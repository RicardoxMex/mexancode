<?php
use Dotenv\Dotenv;
global $rootPath;
$rootPath = realpath(__DIR__ . '/..');
$dotenv = Dotenv::createImmutable($rootPath);
$dotenv->load();
global $APP_NAME;
global $APP_ENV;
global $APP_DEBUG;
global $APP_URL;

global $DB_CONNECTION;
global $DB_HOST;
global $DB_PORT;
global $DB_DATABASE;
global $DB_USERNAME;
global $DB_PASSWORD;

$APP_NAME = $_ENV['APP_NAME'];
$APP_ENV = $_ENV['APP_ENV'];
$APP_DEBUG = $_ENV['APP_DEBUG'];
$APP_URL = $_ENV['APP_URL'];
$DB_CONNECTION = $_ENV['DB_CONNECTION'];

if ($DB_CONNECTION !== 'none') {
    $DB_HOST = $_ENV['DB_HOST'];
    $DB_PORT = $_ENV['DB_PORT'];
    $DB_DATABASE = $_ENV['DB_DATABASE'];
    $DB_USERNAME = $_ENV['DB_USERNAME'];
    $DB_PASSWORD = $_ENV['DB_PASSWORD'];
}
/*
global $CACHE_DRIVER;
global $SESSION_DRIVER;
global $QUEUE_CONNECTION;

global $MAIL_MAILER;
global $MAIL_HOST;
global $MAIL_PORT;
global $MAIL_USERNAME;
global $MAIL_PASSWORD;
global $MAIL_ENCRYPTION;
global $MAIL_FROM_ADDRESS;
global $MAIL_FROM_NAME;

global $LOG_CHANNEL;
global $LOG_LEVEL;
*/