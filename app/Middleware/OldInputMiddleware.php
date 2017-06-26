<?php

namespace Base\Middleware;

use Base\Constructor\BaseConstructor;

class OldInputMiddleware extends BaseConstructor {
	
    public function __invoke($request, $response, $next) {
		isset($_SESSION['old']) ? $this->view->getEnvironment()->addGlobal('old', $_SESSION['old']) : null;
		$_SESSION['old'] = $request->getParams();

        $response = $next($request, $response);
        return $response;
    }
	
}
