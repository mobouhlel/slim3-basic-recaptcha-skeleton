{% extends 'includes/layout.php' %}

{% block content %}

	<section style="margin-top: 50px">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>Slim 3 Basic Skeleton with Google ReCaptcha</h2>

					<p>This is a skeleton template for Slim 3 Framework and Twig which includes Bootstrap Framework. The simplest boilerplate for getting started on a new Slim 3 adventure. No clutter, ready to transform into your next big idea and just to save a little time.</p>
					
					<p>Also used in <a href="https://www.iconic-publishing.com" target="_blank">Iconic</a> projects.</p>
					
					<hr>
					
					<h2>Installation</h2>
					
					<p>PHP Version 5.4 or above.</p>
					
					<p>Download <a href="https://getcomposer.org/" target="_blank">Composer</a></p>

					<p>Dependencies are located in: <code>composer.json</code></p>

					<p>Updating dependencies in your Terminal via composer: <code>cd [path/to/project]</code></p>
					
					<p>Run Globally:</p>
					
					<pre>composer require iconic-publishing/slim3-basic-recaptcha-skeleton</pre>

					<pre>composer update</pre>
					
					<p>Run Locally with PHP:</p>
					
					<pre>php composer.phar require iconic-publishing/slim3-basic-recaptcha-skeleton</pre>

					<pre>php composer.phar update</pre>
					
					<hr>
					
					<h2>Mailgun</h2>
					
					<p>Open a Sandbox account with <a href="https://www.mailgun.com" target="_blank">Mailgun</a></p>
					
					<p>Mailgun API settings are located in: <code>config/dev.php</code></p>
					
					<p>Changing Mailgun to send either HTML or Plain Text email: <code>app/Models/MailgunEmail.php</code></p>
					
					<hr>
					
					<h2>Google ReCaptcha</h2>
					
					<p>Create a Google ReCaptcha account and copy the <code>sitekey</code> and <code>secretkey</code> to <code>config/dev.php</code></p>
					
					<hr>
					
					<h2>Settings</h2>
					
					<p>Respect Validation settings are located in: <code>app/Validation/Forms/ContactForm.php</code></p>
					
					<p>Middleware for Slim CSRF and Validation are located in: <code>app/Middleware/</code></p>
					
					<p>Custom 404 <code>notFoundHandler</code> are located in: <code>app/Handlers/NotFoundHandler.php</code></p>
				</div>
				
				<div class="col-md-4">
					<h2>Features</h2>
					
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
				</div>
			</div>
		</div>
	</section>

{% endblock %}