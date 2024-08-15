<?php
namespace Core;

use GUMP;

class Request
{
    protected array $validationRules;

    protected array $validationErrors;

    public function __construct(array $validationRules = array(), array $validationErrors = array()) {
        $this->validationRules = $validationRules;
        $this->validationErrors = $validationErrors;
    }

    /**
     * @return mixed
     */
    public function getJsonRequestBody(): mixed
    {
        $rawData = file_get_contents('php://input');
        return json_decode($rawData);
    }

   
    public function all() : mixed
    {
        $_request = self::getJsonRequestBody();
        $_data = $_POST;
        if (!$_request) {
            return $_data;
        }
        return $_request;
    }

    /**
     * @param ?string $param
     * @param mixed $default
     * @return mixed
     */
    public function getParameters(?string $param, $default): mixed
    {
        if ($param) {
            /** @psalm-suppress MixedReturnStatement */
            return isset($_GET[$param]) ?
                $_GET[$param] : $default;
        }
        return $_GET;
    }

    /**
     * @access public
     * @return bool
     */
    public function validate(): bool
    {
        $request = (array) $this->all();
        $gump = new GUMP();
        $gump->validation_rules($this->validationRules);
        $gump->run($request);

        if ($gump->is_valid($request, $this->validationRules) === true) {
            return true;
        }

        $this->validationErrors = $gump->get_errors_array();
        return false;
    }

    public function getValidationErrors(): array
    {
        return $this->validationErrors;
    }

    public function setValidationRules(array $validationRules): void
    {
        $this->validationRules = $validationRules;
    }
}