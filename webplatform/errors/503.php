<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<?php
	$title = '503 Service Unavailable';
	include '../templates/headinclude.html';
?>
<link href="/errors/style.css" rel="stylesheet" />
</head>
<body class="ltr sitedir-ltr">
	
<?php include '../templates/header.html'; ?>
<?php include '../templates/container_open.html'; ?>

<hgroup>
	<h1 class="code">
		<img src="/errors/images/5.svg" alt="5" />
		<img src="/errors/images/0.svg" alt="0" />
		<img src="/errors/images/3.svg" alt="3" />
	</h1>
	<h2>Service Unavailable</h2>
</hgroup>
<p>
	We’re sorry, but WebPlatform.org is currently having a few issues. Don’t worry, you didn’t break anything. Wait a few minutes, then try again.
</p>

<h2>By the way, do you know what a 503 error is?</h2>
<p>
	Every HTTP request returns a three digit code in the beginning which communicates how everything went in a compact way.
	These numbers are known as HTTP status codes. 
	Specifically, 503 is a code that means “Service unavailable”, i.e. the server is currently unavailable, usually because it is overloaded or down for maintenance.
</p>
<p>
	Want to know more? Read through the <a href="http://docs.webplatform.org/wiki/http/response_status_codes">list of HTTP status codes</a>
	or <a href="http://webplatform.org">go to the homepage</a> and start from there!
</p>
							
<?php include '../templates/container_close.html'; ?>
<?php include '../templates/footer.html'; ?>

</body>
</html>
