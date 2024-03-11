<?php
echo link_tag('css/family.css');

$script = [
   'defer' => null,
    'src' => 'js/family.js',
];

echo script_tag($script);
?>
<link href="https://localhost:8080/css/family.css" rel="stylesheet" type="text/css"><script defer scr="https://localhost:8080/js/family.js"></script>
<header>
   <img src="images/giphy.gif" alt="mlbb" class = "logo" > 
<nav>
   <a href="home">Home</a>
   <a href="about">About Me</a>
   <a href="family">My Family</a>
   <a href="my_pets">My Pets</a>
   <a href="guests">Forms</a>
</nav>
</header>

<body>
<h1 id="h1"><b>My Family</b></h1>
<input id="btn1" type="button" value="Back" onclick="goBack()">
<p id="demo"></p>

<div id="variable">
</div>


<div class="gallery">
  <a target="_blank" href="images/father.png">
    <img src="images/father.png" alt="my father" width="700" height="500">
  </a>
  <div class="desc"><b>This is my father his name is Heinrich Usana, he is 50 years<br>
old. My father is a soldier in Air Force. He is hardworking, kind,<br>
kind, helpul and most of all he always puts us first before himself.</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="images/mother.png">
    <img src="images/mother.png" alt="my mother" width="700" height="500">
  </a>
  <div class="desc"><b>This is my mother her name is Rosabella Usana, she is 50 years<br>
old. She is kind, hardworking just like my father, delicious<br>
and a good cook</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="images/my sister.png">
    <img src="images/my sister.png" alt="my sister" width="700" height="500">
  </a>
  <div class="desc"><b>This is my eldest sister her name is Rica Rose Usana,  <br>
she is 22 years old. She works in Cebu Pacific and is <br>
assigned to the international airport in Pasay. She <br>
is kind and hardworking just like them mom.</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="images/youngest sister.png">
    <img src="images/youngest sister.png" alt="youngest" width="700" height="500">
  </a>
  <div class="desc"><b>This is my youngest sister her name is Erich Usana, she is <br>
17 years old. She is in grade 11 now and his grade is high <br>
so he gets many awards and he is always included in the<br>
 honors.</b></div>
</div>

</body>
</html>
