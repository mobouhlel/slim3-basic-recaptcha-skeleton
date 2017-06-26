<?php

use Base\Controllers\StaticSiteController;
use Base\Controllers\ContactController;

$app->get('/', StaticSiteController::class . ':index')->setName('index');

$app->group('/contact', function() {
	$this->get('', ContactController::class . ':contact')->setName('contact');
	$this->post('', ContactController::class . ':contactSubmit')->setName('contactSubmit');
});
