<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config.meta.title }}</title>
<meta name="description" content="{{ config.meta.description }}">
<meta name="robots" content="{{ config.meta.robots }}">
<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body oncontextmenu="{{ config.body.onContextMenu }}">
	
	{% block content %}{% endblock %}
	
	<script src="https://www.google.com/recaptcha/api.js?hl=en"></script>
	<script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>