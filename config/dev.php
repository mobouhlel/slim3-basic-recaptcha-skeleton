<?php

return [
	'php' => [
		'sessionCacheLimiter' => false,
		'dateDefaultTimezoneSet' => 'Asia/Bangkok',
		'displayErrors' => 'On',
	],
	
	'meta' => [
		'title' => 'New Title',
		'description' => '',
		'robots' => 'index, follow'
	],
	
	'company' => [
		'name' => 'New Company',
		'phone' => '+000-000-0000',
		'email' => 'info@domain.com',
		'address' => 'Any Address, Any City, Any Country. 123456',
		'contactFormEmail' => 'info@domain.com'
	],
	
	'body' => [
		'onContextMenu' => 'return true'
	],
	
	'mailgun' => [
		'apikey' => '',
		'domain' => '',
		'from' => 'noreply@domain.com',
		'host' => 'smtp.mailgun.org',
		'username' => '',
		'password' => ''
	],
	
	'recaptcha' => [
		'sitekey' => '',
		'secretkey' => ''
	],
];
