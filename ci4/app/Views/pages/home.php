<?php
echo link_tag('css/home.css');

$script = [
   'defer' => null,
    'src' => 'js/home.js',
];

echo script_tag($script);
?>



//<link href="https://localhost:8080/css/home.css" rel="stylesheet" type="text/css">
//<script defer src="https://localhost:8080/js/home.js"></script>

<header>
   <img src="images/ling.gif" alt="ling" class = "logo" > 
<nav>
   <a href="home">Home</a>
   <a href="about">About Me</a>
   <a href="family">My Family</a>
   <a href="my_pets">My Pets</a>
   <a href="guests">Forms</a>
</nav>
</header>

<button id="btn2" onclick="changeColor()">Change Color</button>
<body onload="startTime()">
<div id="txt"></div>

<div id="d1">
  <h1 id="h1"><b>"Hi I'm Heiro Usana"</b></h1>
  <p id="p1"><b>Welcome to my Personal Profile,<br>
   I hope you like my content.</b></p>
  <img id="img1"src="images/me.jpg" alt="white" style="width:400px;height:500px;">
</div>

<div id="div1">
   <h2 id="h2"><b>My Social Media</b></h2>
   <a href="https://www.facebook.com/heiro.usana.5" target="_blank"><img src="images/fb.gif" alt="fb icon" style="width:100px;height:100px;"></a>
   <a href="https://www.tiktok.com/@keep_sil3nt?lang=en" target="_blank"><img src="images/tiktok.gif" alt="tiktok icon" style="width:100px;height:100px;"></a>
   <a href="https://www.youtube.com/channel/UCJSfFWsiw49X7JA1GBBXjwQ" target="_blank"><img src="images/yt.gif" alt="yt icon" style="width:100px;height:100px;"></a>
</div>   

</body>
</html>

