# Slim 3 Basic Skeleton with Google ReCaptcha
This is a skeleton template for Slim 3 Framework and Twig which includes Bootstrap Framework. The simplest boilerplate for getting started on a new Slim 3 adventure. No clutter, ready to transform into your next big idea and just to save a little time.

Also used in <a href="https://www.iconic-publishing.com" target="_blank">Iconic Publishing</a> projects.

# Installation

PHP Version 5.4 or above.

Download <a href="https://getcomposer.org/" target="_blank">Composer</a>

Dependencies are located in: <code>composer.json</code>

Updating dependencies in your Terminal via composer: <code>cd [path/to/project]</code>

Run Globally:

<pre>composer require iconic-publishing/slim3-basic-recaptcha-skeleton</pre>

<pre>composer update</pre>

Run Locally with PHP:

<pre>php composer.phar require iconic-publishing/slim3-basic-recaptcha-skeleton</pre>

<pre>php composer.phar update</pre>

# Mailgun

Open a Sandbox account with <a href="https://www.mailgun.com" target="_blank">Mailgun</a>

Mailgun API settings are located in: <code>config/dev.php</code>

Changing Mailgun to send either HTML or Plain Text email: <code>app/Models/MailgunEmail.php</code>

# Google ReCaptcha

Create a Google ReCaptcha account and copy the <code>sitekey</code> and <code>secretkey</code> to <code>config/dev.php</code>

# Settings

Respect Validation settings are located in: <code>app/Validation/Forms/ContactForm.php</code>

Middleware for Slim CSRF and Validation are located in: <code>app/Middleware/</code>

Custom 404 <code>notFoundHandler</code> are located in: <code>app/Handlers/NotFoundHandler.php</code>

# Features

<ul>
<li>PSR-4 Autoloading</li>
<li>Bootstrap v3.3.7</li>
<li>Symfony Var-Dumper</li>
<li>Hassankhan Config</li>
<li>Slim 3 Framework</li>
<li>Twig Views</li>
<li>Middleware</li>
<li>Slim Flash Messages</li>
<li>Slim CSRF</li>
<li>Respect Validation</li>
<li>Mailgun API</li>
<li>Google ReCaptcha</li>
</ul>
