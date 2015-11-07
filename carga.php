<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme --> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.css"
</head>

</head>

<body>
<div id="demo"></div>
<div id="mapholder"></div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>


<script type="text/javascript">
var x=document.getElementById("demo");
function cargarmap(){
navigator.geolocation.getCurrentPosition(showPosition,showError);
function showPosition(position)
  {
  lat=position.coords.latitude;
  lon=position.coords.longitude;
  latlon=new google.maps.LatLng(lat, lon)
  mapholder=document.getElementById('mapholder')
  mapholder.style.height='500px';
  mapholder.style.width='1000px';
  var myOptions={
  center:latlon,zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
  var marker=new google.maps.Marker({position:latlon,map:map,animation:google.maps.Animation.DROP,title:"aqui se encuentra el chofer"});
  }
function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="Denegada la peticion de Geolocalización en el navegador."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="La información de la localización no esta disponible."
      break;
    case error.TIMEOUT:
      x.innerHTML="El tiempo de petición ha expirado."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="Ha ocurrido un error desconocido."
      break;
    }
  }}
</script>
<script src="http://www.anidocs.es/bootstrap/docs/assets/js/bootstrap-modal.js"></script>
   
    <script src="http://code.jquery.com/jquery.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
 <center><div class="container">
 
</form>
 <input id="start" name="controls" type="radio" onclick="cargarmap()"/>
 <input id="stop" name="controls" type="radio" />
 <input id="reset" name="controls" type="radio" />
 <div class="timer">
  <div class="cell">
   <div class="numbers tenhour moveten">0 1 2 3 4 5 6 7 8 9</div>
  </div>
  <div class="cell">
   <div class="numbers hour moveten">0 1 2 3 4 5 6 7 8 9</div>
  </div>
  <div class="cell divider"><div class="numbers">:</div></div>
  <div class="cell">
   <div class="numbers tenminute movesix">0 1 2 3 4 5 6</div>
  </div>
  <div class="cell">
   <div class="numbers minute moveten">0 1 2 3 4 5 6 7 8 9</div>
  </div>
  <div class="cell divider"><div class="numbers">:</div></div>
  <div class="cell">
   <div class="numbers tensecond movesix">0 1 2 3 4 5 6</div>
  </div>
  <div class="cell">
   <div class="numbers second moveten">0 1 2 3 4 5 6 7 8 9</div>
  </div>
  <div class="cell divider"><div class="numbers">:</div></div>
  <div class="cell">
   <div class="numbers milisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
  </div>
  <div class="cell">
   <div class="numbers tenmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
  </div>
  <div class="cell">
   <div class="numbers hundredmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
  </div>
 </div>
 <div id="timer_controls">
  <label for="start">cargar mapa</label>
  <label for="stop">Stop</label>
  <label for="reset">Reset</label>
 </div>
</div></center>


<script src="http://hostredeando.ucoz.es/js/prefixfree.js" type="text/javascript"></script>


<style>
.container {
 padding: 20px;width: 400px;
 text-align: center;
}

.timer {
 padding: 10px;
 background: #000000;
 overflow: hidden;
 display: inline-block;
 border: 7px solid #efefef;
 border-radius: 5px;
 position: relative;
box-shadow: 
  0 -2px 10px 1px rgba(0, 0, 0, 0.75), 
  0 5px 20px -10px rgba(0, 0, 0, 1);

}

.cell {
 width: 0.60em;
 height: 40px;
 font-size: 50px;
 overflow: hidden;
 position: relative;
 float: left;
}

.numbers {
 width: 0.6em;
 line-height: 40px;
 font-family: digital, arial, verdana;
 text-align: center;
 color: #fff;

 position: absolute;
 top: 0;
 left: 0;


 text-shadow: 0 0 5px rgba(255, 255, 255, 1);
}

#timer_controls {
 margin-top: 5px;
}
#timer_controls label {
 box-shadow: 
  0 -2px 10px 1px rgba(0, 0, 0, 0.75), 
  0 5px 20px -10px rgba(0, 0, 0, 1);

cursor: pointer;
 padding: 5px 10px;
 background: #efefef;
 font-family: arial, verdana, tahoma;
 font-size: 11px;
 border-radius: 0 0 3px 3px;border:1px solid #989293;
}
input[name="controls"] {display: none;}


#stop:checked~.timer .numbers {animation-play-state: paused;}
#start:checked~.timer .numbers {animation-play-state: running;}
#reset:checked~.timer .numbers {animation: none;}

.moveten {
 /*The digits move but dont look good. We will use steps now
 10 digits = 10 steps. You can now see the digits swapping instead of 
 moving pixel-by-pixel*/
 animation: moveten 1s steps(10, end) infinite;
 /*By default animation should be paused*/
 animation-play-state: paused;
}
.movesix {
 animation: movesix 1s steps(6, end) infinite;
 animation-play-state: paused;
}

.second {animation-duration: 10s;}
.tensecond {animation-duration: 60s;} /*60 times .second*/

.milisecond {animation-duration: 1s;} /*1/10th of .second*/
.tenmilisecond {animation-duration: 0.1s;}
.hundredmilisecond {animation-duration: 0.01s;}

.minute {animation-duration: 600s;} /*60 times .second*/
.tenminute {animation-duration: 3600s;} /*60 times .minute*/

.hour {animation-duration: 36000s;} /*60 times .minute*/
.tenhour {animation-duration: 360000s;} /*10 times .hour*/

@keyframes moveten {
 0% {top: 0;}
 100% {top: -400px;} 
 /*height = 40. digits = 10. hence -400 to move it completely to the top*/
}

@keyframes movesix {
 0% {top: 0;}
 100% {top: -240px;} 
 /*height = 40. digits = 6. hence -240 to move it completely to the top*/
}

@font-face {
 font-family: 'digital';
 src: url('http://thecodeplayer.com/uploads/fonts/DS-DIGI.TTF');

</style>
 
 
</body>
</html>