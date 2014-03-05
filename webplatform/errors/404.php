<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<?php
	$title = '404 Not found';
	include '../templates/headinclude.html';
?>
<link href="/errors/style.css" rel="stylesheet" />
</head>
<body class="ltr sitedir-ltr">
	
<?php include '../templates/header.html'; ?>
<?php include '../templates/container_open.html'; ?>

<hgroup>
	<h1 class="code">
		<img src="/errors/images/4.svg" alt="4" />
		<img src="/errors/images/0.svg" alt="0" />
		<img src="/errors/images/4-alt.svg" alt="4" />
	</h1>
	<h2><span class="element-invisible">404 </span>Not found</h2>
</hgroup>
<p>
	We’re sorry, but what you’re looking for isn’t here.
	It may have been moved, or perhaps you mistyped the web address (URL).
</p>

<h2>By the way, do you know what a 404 error is?</h2>
<p>
	Every HTTP request returns a three digit code in the beginning which communicates how everything went in a compact way.
	These numbers are known as HTTP status codes. 
	Specifically, 404 is a code that means “Not found”, i.e. there is no resource at the specified address.
</p>
<p>
	Want to know more? Read through the <a href="http://docs.webplatform.org/wiki/http/response_status_codes">list of HTTP status codes</a>
	or <a href="http://webplatform.org">go to the homepage</a> and start from there!
</p>
							
<?php include '../templates/container_close.html'; ?>
<?php include '../templates/footer.html'; ?>

</body>
</html>
