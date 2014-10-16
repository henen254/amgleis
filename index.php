<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<!--<p><iframe id="ytplayer" type="text/html" width="640" height="360"
src="https://www.youtube.com/embed/3u8Tbzj37cc?version=3&enablejsapi=1"
frameborder="0" allowfullscreen></iframe>
-->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="swfobject.js"></script>    
 <!-- <div id="ytapiplayer">
You need Flash player 8+ and JavaScript enabled to view this video.

  </div>-->
  <script type="text/javascript">

var params = { allowScriptAccess: "always" };
var atts = { id: "myytplayer" };
var video;
swfobject.embedSWF("http://www.youtube.com/v/XVQi4v_6L4E?enablejsapi=1&playerapiid=ytplayer&version=3","ytapiplayer", "425", "356", "8", null, null, params, atts);

  </script>
<script type="text/javascript">

function onYouTubePlayerReady(playerId) {
	player = document.getElementById("myytplayer");
	player.addEventListener("onStateChange", "onytplayerStateChange");
	var playbackRates = player.getAvailablePlaybackRates();
}

function onytplayerStateChange(newState) {
	if (newState == 1) {
		nextMsg();
	}
}
function countdown() {

	
	if (countdownmsg.length == 0) {
		playvid();
		nextMsg();
	} else {
		$('#message').html(countdownmsg.pop()).fadeIn(400).delay(1000).fadeOut(400, countdown);
		
	}

};
function nextMsg() {
	if (messages.length == 10) {
		playvid();
	};
	
	if (messages.length == 0) {
		// once there is no more message, do whatever you want
	} else {

		$('#message').hide().delay(15000).html(messages.pop()).fadeIn(400).delay(10000).fadeOut(400, nextMsg);
	}

};
// list of messages to display

var countdownmsg = [
	"3",
	"2",
	"1",
	].reverse();

var messages = [
	"Här konstruerades och byggdes världens första tickande ägg.",
	"Sedan begynnelsen en knutpunkt för vägkommunikation. Idag möts A3, A6, A9 och A73 i staden",
	"I staden finns kjesarens borg med både torn och kapell men bara ett berg utan något i",
	"Bayerns tvåa, frankens etta",
	"I staden ställdes politiska och militära ledare inför rätta efter andra världskriget"
].reverse();


var i = 0;
/* var delayTime=[];
delayTime[0]=exitTime[0]*1000-1000;
for(m=1; m < exitTime.length; m++){
delayTime[m]=(exitTime[m]-exitTime[m-1])*1000-1000;
}  */
// initially hide the message


/* function changeMessage()
{
//alert('hej');


if(video.currentTime > exitTime[i]){

$('#hint').html(messages[i]);
i=i+1;
}

} */

// start animation
$(document).ready(function () {
	video = document.getElementById("Video1");
	//exitTime=[0.1*video.duration, 0.2*video.duration, 0.3*video.duration, 0.4*video.duration, 0.5*video.duration];
	/* setInterval(function(){changeMessage()},1000);
	video.onplay=function(){
	$('#hint').html(messages[i]);
	i=i+1;
	};*/
	$('#guess').hide();

	video.oncanplay = function () {

		countdown();
	};

});
function playvid() {

	video.play();
}
function pausevid() {
	video.pause();
	$('#message').stop(true, false);
	$('#guess').show();

}

function guess() {
	var a=$('#answer').val();
	if(a=="Nurenberg"){
		alert("Rätt");
		}
		else{
		alert("Fel");
		}

};

</script>
<style>
video{
   position:absolute;
   top:50px;
   left:50px;

}

img{
   position:absolute;
   top:540px;
   left:535px;
}

div.hint{
   position:absolute;
   top:290px;
   left:75px;
	text-align: center;
font-size: 30px;
font-color: black;
   width: 590px;
   padding: 5px;
   border: 5px;
   margin: 0px;
   background: rgba(255,255,255,0.7);
}

div:empty {
   display: none;
}

div.guess{
   position:absolute;
   top:290px;
   left:75px;
	text-align: center;
font-size: 30px;
font-color: black;
   width: 590px;
   padding: 5px;
   border: 5px;
   margin: 0px;
   background: rgba(255,255,255,0.7);
}

input.answer{
	font-size: 30px;
	
border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.0);
    margin: 0 0 10px 0;
}
</style>
<video id="Video1" >
  <source src="skåp.webm" type="video/webm" >
  Your browser does not support HTML5 video.
</video>
<a href="javascript:pausevid()"><img src="brake.jpg"></a>
<div id="message" class="hint">sdfsdf</div>
<div id="guess" class="guess"><input type="text" class="answer" name="answer" id="answer"></input> <span onClick="javascript:guess()">Svara</span></div>
</body>
</html>
