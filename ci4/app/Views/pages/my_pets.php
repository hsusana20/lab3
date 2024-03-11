<?php
echo link_tag('css/my_pets.css');

$script = [
   'defer' => null,
    'src' => 'js/my_pets.js',
];

echo script_tag($script);
?>
//<link href="https://localhost:8080/css/my_pets.css" rel="stylesheet" type="text/css">
//<script defer scr="https://localhost:8080/js/my_pets.js"></script>
<header>
   <img src="images/dog.gif" alt="cute" class="logo"> 
<nav>
   <a href="home">Home</a>
   <a href="about">About Me</a>
   <a href="family">My Family</a>
   <a href="my_pets">My Pets</a>
   <a href="guests">Forms</a>
</nav>
</header>


<body>
<h1 id="h1"><b>My Pets</b></h1>

  
<button id="myBtn">Click it</button>

<div id="h2">
  <?php
  echo "<h2><b>I Love All My Pets</b></h2>";
?>
</div>

<div id="h3">
  <?php
  function myMessage() {
	  echo "<h3><b>This is My Favorite Pets!</b></h3>";
  }
  myMessage();
?>
</div>

<div class="gallery">
  <a target="_blank" href="images/lucky.png">
    <img src="images/lucky.png" alt="mother dog" width="600" height="400">
  </a>
  <div class="desc"><b>Name: Lucky</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="images/dagul.png">
    <img src="images/dagul.png" alt="baby dog" width="600" height="400">
  </a>
  <div class="desc"><b>Name: Dagul</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="images/dina.png">
    <img src="images/dina.png" alt="baby dog" width="600" height="400">
  </a>
  <div class="desc"><b>Name: Dina</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="images/oreo.png">
    <img src="images/oreo.png" alt="white dog" width="600" height="400">
  </a>
  <div class="desc"><b>Name: Oreo</b></div>
</div>
</body>
</html> 
