<?php

use Slim\App;
use Noodlehaus\Config;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Base\View\DebugExtension;
use Base\Validation\Validator;
use Slim\Flash\Messages;
use Slim\Csrf\Guard;
use Base\Models\Select;
use Base\Models\MailgunEmail;
use Base\Handlers\NotFoundHandler;
use Base\Middleware\ValidationErrorsMiddleware;
use Base\Middleware\OldInputMiddleware;
use Base\Middleware\CsrfViewMiddleware;
use Base\Middleware\CsrfStatusMiddleware;

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new App([
	'settings' => [
		'determineRouteBeforeAppMiddleware' => true,
		'displayErrorDetails' => true,
		'addContentLengthHeader' => false
	],
]);

$container = $app->getContainer();

$container['config'] = function() {
	return new Config(__DIR__ . '/../config/' . file_get_contents(__DIR__ . '/../env.php') . '.php');
};

session_cache_limiter($container->config->get('php.sessionCacheLimiter'));
date_default_timezone_set($container->config->get('php.dateDefaultTimezoneSet'));
ini_set('display_errors', $container->config->get('php.displayErrors'));

$container['view'] = function($container) {
    $view = new Twig(__DIR__ . '/../resources/views', [
		'cache' => false
	]);
	
	$view->addExtension(new TwigExtension($container->get('router'), $container->get('request')->getUri()));
	$view->addExtension(new DebugExtension());
	$view->getEnvironment()->addGlobal('config', $container['config']);
	$view->getEnvironment()->addGlobal('flash', $container['flash']);
	$view->getEnvironment()->addGlobal('select', $container['select']);

    return $view;
};

$container['validator'] = function($container) {
    return new Validator;
};

$container['flash'] = function($container) {
    return new Messages;
};

$container['csrf'] = function($container) {
    $csrf = new Guard;
    $csrf->setFailureCallable(function ($request, $response, $next) {
        $request = $request->withAttribute("csrf_status", false);
        return $next($request, $response);
    });
	
    return $csrf;
};

$container['select'] = function($container) {
    return new Select;
};

$container['mailer'] = function($container) {
    return new MailgunEmail($container);
};

$container['notFoundHandler'] = function($container) {
    return new NotFoundHandler($container);
};

$app->add(new ValidationErrorsMiddleware($container));
$app->add(new OldInputMiddleware($container));
$app->add(new CsrfViewMiddleware($container));
$app->add(new CsrfStatusMiddleware($container));
$app->add($container->csrf);

require __DIR__ . '/../app/routes.php';
