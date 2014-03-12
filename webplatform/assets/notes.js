(function() {
   var ssl = !!document.location.protocol.match(/^https:/)
   , embedUrl = 'http://notes.webplatform.org/app/embed.js';
   ;

   if (ssl && !embedUrl.match(/^https:/)) {
     var msg = (
       'Sorry, but this service is unavailable on pages ' +
       'served with HTTPS at this time. Please contact support for ' +
       'further assistance.'
     );
     alert(msg);
   } else {
     var embed = document.createElement('script');
     embed.setAttribute('src', embedUrl);
     document.body.appendChild(embed);
   }
 })();