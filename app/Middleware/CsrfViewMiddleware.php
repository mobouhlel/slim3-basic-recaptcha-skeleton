<?php

namespace Base\Middleware;

use Base\Constructor\BaseConstructor;

class CsrfViewMiddleware extends BaseConstructor {
	
    public function __invoke($request, $response, $next) {
        $this->view->getEnvironment()->addGlobal('csrf', [
            'field' => '
                <input type="hidden" name="' . $this->csrf->getTokenNameKey() . '" value="' . $this->csrf->getTokenName() . '">
                <input type="hidden" name="' . $this->csrf->getTokenValueKey() . '" value="' . $this->csrf->getTokenValue() . '">
            ',
        ]);

        $response = $next($request, $response);
        return $response;
    }
	
}
