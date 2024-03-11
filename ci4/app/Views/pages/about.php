<?php
echo link_tag('css/about.css');

$script = [
   'defer' => null,
    'src' => 'js/about.js',
];

echo script_tag($script);
?>
<link href="https://localhost:8080/css/about.css" rel="stylesheet" type="text/css"><script defer scr="https://localhost:8080/js/about.js"></script>
<header>
   <img src="images/bruno.gif" alt="mm" class="logo"> 
<nav>
   <a href="home">Home</a>
   <a href="about">About Me</a>
   <a href="family">My Family</a>
   <a href="my_pets">My Pets</a>
   <a href="guests">Forms</a>
</nav>
</header>

<body>
<h1 style="font-size:40px;" id="hg1">Usana, Heiro Sibud</h1>
<input id="btnb" type="button" value="Back" onclick="goBack()">
<button type="button" onclick="myFunction()">Change format Name</button>


<p id="switch"></p>

<p id="demo"></p>


<img id="img1" src="images/img_handsome.png" alt="White T-shirt with watch" width="300" height="300"> 
<h2 style="text-align:center;" id="heading2" >About Me!</h2>
<p id="parag2"> I am a student from APC (Asia Pacific College) and I am currently a 2nd-year college student.</p>
<!-- Lesson 2.22 - Images -->

<!-- Lesson 2.1 - Headings -->
<!-- Lesson 2.2 - Paragraphs -->

<!-- Lesson 2.4 - Formatting -->
<div id="div1"> <b>Age:</b> 19 <br>
    <b>Gender:</b> Male <br> 
    <b>Scholarship:</b> AFP-OLC Scholarship for Armed Forces </div>

<!-- Lesson 2.1 - Headings -->
<!-- Lesson 2.3 - Styles -->
<div id="div2"> <b>My last School Attend</b> <br>
          I am graduated from Francisco Osorio Integrated <br>
		  Senior High School. My School located in Trece <br>
		  Martires City.</div>
<!-- Lesson 2.3 - Styles -->
<div id="div3"> <b>Why did you choose this course?</b> <br>
          Because I want to learn more about IT, <br>
		  and I want to improve my coding skills.</div>
<!-- Lesson 2.1 - Headings -->
<!-- Lesson 2.3 - Styles -->
<div id="div4" > <b>IT Experience</b> <br> 
           My IT experience last year includes programming <br>
		   in languages such as Python and Java.</div>
<!-- Lesson 2.1 - Headings -->
<!-- Lesson 2.3 - Styles -->
<h1 style="text-align: center;" id="head1">My Hobbies</h1>
<!-- Lesson 2.14 - Lists -->
<div style="text-align: center;" id="div5"> <b>Basketball</b> <br>
   <img src="images/img_basketball.png" alt="The black he is Stephen Curry"> </div>
   
<div style="text-align: center;" id="div6"> <b>Mobile Legends</b> <br>
   <img src="images/img_ml.png" alt="Heroes in ML"> </div>

<!-- Lesson 2.1 - Headings -->
<!-- Lesson 2.3 - Styles -->
<h2  id="head2">My Goals in my Life</h2>
<!-- Lesson 2.2 - Paragraphs -->
<p style="text-align:center;" id="parag4"> My goal in my life is to graduate and focus on college because I want to finish my studies, this is the way to make all my dreams come true.</p>
<div id="divone"> <img src="images/grad1.jpg" alt="Graduation" width="300" height="300"> </div>
<div id="divtwo"> <img src="images/grad2.jpg" alt="Graduation Day" width="300" height="300"> </div>
<div id="divtree"> <img src="images/grad3.jpg" alt="Graduation Dream" width="300" height="300"> </div>


<h3 id="head3" style="text-align:center;">My Idol and my Main Hero in MLBB</h3>
<div id="divfour"> <img src="images/kairi.jpg" alt="Pro Player" width="300" height="300"> </div>
<div id="divfive"> <img src="images/gusion.jpg" alt="My main Hero" width="300" height="300"> </div>
<div id="divsix"> <img src="images/ling.jpg" alt="My 2nd main Hero" width="300" height="300"> </div>
<div id="divOne"> <img src="images/haya.jpg" alt="My 3rd main Hero" width="300" height="300"> </div>
<div id="divTwo"> <img src="images/lancelot.jpg" alt="My 4th main Hero" width="300" height="300"> </div>



</body>

</html>