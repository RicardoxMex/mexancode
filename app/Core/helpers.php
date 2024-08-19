<?php

use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\Http\Url;
use Pecee\Http\Response;
use Pecee\Http\Request;

/**
 * Get url for a route by using either name/alias, class or method name.
 *
 * The name parameter supports the following values:
 * - Route name
 * - Controller/resource name (with or without method)
 * - Controller class name
 *
 * When searching for controller/resource by name, you can use this syntax "route.name@method".
 * You can also use the same syntax when searching for a specific controller-class "MyController@home".
 * If no arguments is specified, it will return the url for the current loaded route.
 *
 * @param string|null $name
 * @param string|array|null $parameters
 * @param array|null $getParams
 * @return \Pecee\Http\Url
 * @throws \InvalidArgumentException
 */
function url(?string $name = null, $parameters = null, ?array $getParams = null): Url
{
    return Router::getUrl($name, $parameters, $getParams);
}

/**
 * @return \Pecee\Http\Response
 */
function response(): Response
{
    return Router::response();
}

/**
 * @return \Pecee\Http\Request
 */
function request(): Request
{
    return Router::request();
}

/**
 * Get input class
 * @param string|null $index Parameter index name
 * @param string|mixed|null $defaultValue Default return value
 * @param array ...$methods Default methods
 * @return \Pecee\Http\Input\InputHandler|array|string|null
 */
function input($index = null, $defaultValue = null, ...$methods)
{
    if ($index !== null) {
        return request()->getInputHandler()->value($index, $defaultValue, ...$methods);
    }

    return request()->getInputHandler();
}

/**
 * @param string $url
 * @param int|null $code
 */
function redirect(string $url, ?int $code = null): void
{
    if ($code !== null) {
        response()->httpCode($code);
    }

    response()->redirect($url);
}

/**
 * Get current csrf-token
 * @return string|null
 */
function csrf_token(): ?string
{
    $baseVerifier = Router::router()->getCsrfVerifier();
    if ($baseVerifier !== null) {
        return $baseVerifier->getTokenProvider()->getToken();
    }

    return null;
}

function validateRequest(array $validationRules): mixed
{
    $request = input()->all();
    $gump = new GUMP();
    GUMP::add_validator("valid_password", function ($field, $input, $param = null) {
        // Validamos que contenga al menos una mayúscula, un número y un carácter especial
        if (
            preg_match('/[A-Z]/', $input[$field]) &&    // Al menos una letra mayúscula
            preg_match('/[0-9]/', $input[$field]) &&    // Al menos un número
            preg_match('/[\W]/', $input[$field])
        ) {     // Al menos un carácter especial (\W busca todo lo que no es letra ni número)
            return true;
        }
        return false;
    }, "The {field} must contain at least one uppercase letter, one number, and one special character.");

    GUMP::add_validator("not_empty", function ($field, $input, $param = null) {
        return !empty(trim($input[$field]));
    }, "The {field} is required");

    $gump->validation_rules($validationRules);
    $gump->run($request);

    if ($gump->is_valid($request, $validationRules) === true) {
        return true;
    } else {
        if (request()->getUrl()->contains("/api")) {
            response()->httpCode(400)->json(['errors'=> $gump->get_errors_array()]);
        }
        return false;
    }
}

function isAuth(): bool
{
    return true;
}

function isAdmin(): bool
{
    return true;
}

function getRole(): ?string
{

}