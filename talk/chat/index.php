<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<title>Chat on WebPlatform</title>
<meta charset="UTF-8" />
<link rel="shortcut icon" href="http://webplatform.org/favicon.ico" />
<link rel="search" type="application/opensearchdescription+xml" href="http://docs.webplatform.org/w/opensearch_desc.php" title="WebPlatform Docs (en)" />
<link rel="copyright" href="http://creativecommons.org/licenses/by/3.0/" />
<link rel="stylesheet" href="http://www.webplatform.org/assets/squished.css?v=2013091800" />
<!--[if lt IE 7]><style type="text/css">body{behavior:url("http://docs.webplatform.org/w/skins/vector/csshover.min.htc")}</style><![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--[if lt IE 9]><script src="http://docs.webplatform.org/w/skins/webplatform/html5shiv.js"></script><![endif]-->
<meta name="viewport" content="width=device-width">
<!--[if lt IE 9]><link rel="stylesheet" href="http://docs.webplatform.org/w/skins/webplatform/ie8.css"><![endif]-->
<!--[if lt IE 8]><link rel="stylesheet" href="http://docs.webplatform.org/w/skins/webplatform/ie7.css"><![endif]-->
<link rel="stylesheet" href="http://www.webplatform.org/assets/landing.css" />
<style>
body {
   position: relative;
   z-index: -1;
}

.link {
   font-weight: bold;
}

</style>
</head>
<body class="ltr sitedir-ltr">
	<?php
		$active = 'discussion';
    $siteId = 2;
		include '../../webplatform/templates/header.html';
		
		$breadcrumbs = array(
			'Talk' => "http://talk.webplatform.org",
                        'Chat' => "http://talk.webplatform.org/chat/"
		);
		
		include '../../webplatform/templates/container_open.html';
	?>

<div id="main-content">
                     <h1 id="firstHeading" class="firstHeading">
                        Web Platform Chat
                     </h1>
                     
                     <!-- bodyContent -->
                     <div id="bodyContent">
                        <div id="jump-to-nav" class="mw-jump">
                           Jump to: <a href="#mw-head">navigation</a>,
                           <a href="#p-search">search</a>
                        </div>
                     </div>

                     <p>To join the live chat, join the <a class="link" href="irc://chat.freenode.net#webplatform">Freenode.net #webplatform channel</a> using your IRC client.</p>

                     <p>We will be providing a Web chat client in the future.</p>

                     <h2>Summary</h2>
                     <p>
                      Server: Freenode (irc.freenode.net)
                      <br>
                      Channel: #webplatform
                      <br>
                      <a class="link" href="irc://chat.freenode.net#webplatform">Connect</a> using your favorite chat client.
                     </p>

                     <h2>About the Chat server</h2>
                     <p>The chat server is hosted on the Freenode IRC Network.  It can be connected to by pointing your IRC client to "irc.freenode.net" as the server.  From there you will want to join the #webplatform room.</p>
                     <h2>IRC Clients</h2>
                     <p>Here are a few IRC clients for different platforms:</p>
                     <ul>
                       <li><a href="http://xchat.org/">Xchat</a></li>
                       <li><a href="http://colloquy.info/">Colloquy</a></li>
                       <li><a href="http://www.mirc.com/">mIRC</a></li>
                       <li><a href="http://limechat.net/mac/">LimeChat</a></li>
                       <li><a href="http://pidgin.im/">Pidgin</a></li>
                     </ul>
                     <p>More can be found via <a href="http://en.wikipedia.org/wiki/Comparison_of_Internet_Relay_Chat_clients">Wikipedia</a> as well.</p>



                  </div>

	<?php include '../../webplatform/templates/container_close.html'; ?>
	<?php include '../../webplatform/templates/footer.html'; ?>
   
</body>
</html>
