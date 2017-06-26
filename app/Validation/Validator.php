<?php

namespace Base\Validation;

use Base\Validation\Contracts\ValidatorInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Respect\Validation\Exceptions\NestedValidationException;

class Validator implements ValidatorInterface {
	
    protected $errors = [];

    public function validate(Request $request, array $rules) {
        foreach($rules as $field => $rule) {
			$rule_title = ucfirst($field);
			
			$explode = explode('_', $rule_title);
			
			if(!isset($explode[1])) {
				$explode = explode('-', $rule_title);
			}
				
			if(isset($explode[1])) {
				$rule_title = implode(' ', $explode);
				$rule_title = ucwords(strtolower($rule_title));
			}
			
            try {
                $rule->setName($rule_title)->assert($request->getParam($field));
            } catch (NestedValidationException $e) {
                $this->errors[$field] = $e->getMessages();
            }
        }

        $_SESSION['errors'] = $this->errors;
        
        return $this;
    }

    public function fails() {
        return !empty($this->errors);
    }
	
}
