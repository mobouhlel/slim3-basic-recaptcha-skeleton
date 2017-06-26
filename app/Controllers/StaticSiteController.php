<?php

namespace Base\Controllers;

use Base\Constructor\BaseConstructor;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class StaticSiteController extends BaseConstructor {
	
    public function index(Request $request, Response $response) {
        return $this->view->render($response, 'index.php');
    }
	
}
