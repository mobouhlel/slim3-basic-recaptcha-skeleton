<?php

namespace Base\Middleware;

use Base\Constructor\BaseConstructor;

class ValidationErrorsMiddleware extends BaseConstructor {

    public function __invoke($request, $response, $next) {
		isset($_SESSION['errors']) ? $this->view->getEnvironment()->addGlobal('errors', $_SESSION['errors']) : null;
     	unset($_SESSION['errors']);

        $response = $next($request, $response);
        return $response;
    }
	
}
