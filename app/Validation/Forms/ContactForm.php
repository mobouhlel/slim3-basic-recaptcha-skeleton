<?php

namespace Base\Validation\Forms;

use Respect\Validation\Validator as v;

class ContactForm {
	
    public static function rules() {
        return [
			'full_name' => v::notEmpty()->alpha(),
			'mobile_number' => v::notEmpty(),
			'country' => v::notEmpty(),
			'department' => v::notEmpty()->alpha(),
			'email_address' => v::noWhitespace()->notEmpty()->email(),
			'subject' => v::notEmpty(),
            'message' => v::notEmpty(),
        ];
    }
	
}
