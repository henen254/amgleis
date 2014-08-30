<html>
<head>
</head>
<body>
<!--<p><iframe id="ytplayer" type="text/html" width="640" height="360"
src="https://www.youtube.com/embed/3u8Tbzj37cc?version=3&enablejsapi=1"
frameborder="0" allowfullscreen></iframe>
-->
<script type="text/javascript" src="swfobject.js"></script>    
  <div id="ytapiplayer">
You need Flash player 8+ and JavaScript enabled to view this video.
  </div>

  <script type="text/javascript">

var params = { allowScriptAccess: "always" };
var atts = { id: "myytplayer" };
swfobject.embedSWF("http://www.youtube.com/v/3u8Tbzj37cc?enablejsapi=1&playerapiid=ytplayer&version=3","ytapiplayer", "425", "356", "8", null, null, params, atts);

  </script>
<script type="text/javascript">

function onYouTubePlayerReady(playerId) {
player = document.getElementById("myytplayer");
}
</script>
<a href="javascript:player.playVideo()">Play</a>
<a href="javascript:player.pauseVideo()">Play</a>
<p><form>
<button type="butonplay" onclick="player.playVideo();">Start</button>
<button type="buttonpause" onclick="player.pauseVideo();">Pause</button>

</form>
</body>
</html>
