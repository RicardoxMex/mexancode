<?php
namespace Core;

use Core\Exception\ViewException;

class Views
{
    private static string $viewPath;
    private static string $title = "";
    private static array $data = array();
    private static string $layout = 'app';
    private static string $message;

    public static function setViewPath(string $view): void
    {
        $path = str_replace(".", "/", $view);
        self::$viewPath = $path;
    }

    public static function setTitle(string $title): void
    {
        self::$title = $title;
        self::$data['title'] = $title;
    }

    public static function setData(array $data): void
    {
        self::$data['title'] = self::$title;
        self::$data = $data;
    }
    public static function setLayout(string $layout): void
    {
        self::$layout = $layout;
    }

    public static function setMessage(string $message): void
    {
        self::$message = $message;
    }

    private static function getChild(): Template
    {
        $_appView = "";
        $DIR = $GLOBALS['DIR'];
        $_file_html = $DIR . '/app/Views/pages/' . self::$viewPath . '.html';
        $_file_php = $DIR . '/app/Views/pages/' . self::$viewPath . '.php';

        if (file_exists($_file_php)) {
            $_appView = $_file_php;
        } else if (file_exists($_file_html)) {
            $_appView = $_file_html;
        } else {

            throw new ViewException();
        }
        $view = new Template($_appView, [self::$data, self::$title]);
        return $view;

    }

    public static function render(): void
    {
        $DIR = $GLOBALS['DIR'];
        // $_file_html = $DIR .'/app/Views/pages/' . self::$viewPath . '.html';
        $child = self::getChild();
        $_layout_app = (string) $DIR . '/app/Views/app.php';

        if (self::$layout == 'app') {
            $view = new Template($_layout_app, [
                'title' => self::$title,
                'child' => $child,
            ]);

        } else {
            $_layout_custom = (string) $DIR . '/app/Views/layouts/' . self::$layout . '.php';
            $view = new Template($_layout_custom, [
                'title' => self::$title,
                'child' => $child,
                'data' => self::$data
            ]);
        }
        echo $view;
        exit();
    }

    public static function errorPage(): void
    {
        $DIR = $GLOBALS['DIR'];
        $_page_error = (string) $DIR.'/app/Views/errors/index.html';
        $view = new Template($_page_error, [
            'title' => self::$title,
            'message' => self::$message
        ]);
        echo $view;
        exit();
    }
}