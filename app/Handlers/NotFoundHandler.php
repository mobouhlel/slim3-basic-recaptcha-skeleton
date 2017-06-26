<?php

namespace Base\Handlers;

use Base\Constructor\BaseConstructor;
use Slim\Handlers\AbstractHandler;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class NotFoundHandler extends BaseConstructor {
	
	public function __invoke(Request $request, Response $response) {
		return $this->view->render($response, 'errors/404.php')->withStatus(404)->withHeader('Content-Type', 'text/html');
	}
	
}
