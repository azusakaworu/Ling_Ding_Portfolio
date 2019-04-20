<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ling_Ding_Portfolio</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700%7CSrisakdi" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
</head>
<body>



<h1>Ling_Ding_Portfolio</h1>
<?php include 'templetes/header.html';?>



<!-- self introduce -->
<section >
    <h2>About Me</h2>
    <div id="aboutMe">
      <div >
          <img src="images/196.png" alt="" width="60%">
          <h4>Front-end Develepment</h4>
          <p>Bootstrap: <a href="">Projects link</a></p>
          <p>Foundation: <a href="">Projects link</a></p>
          <p>Vue: <a href="">Projects link</a></p>
     </div>


      <div>
          <img  src="images/196.png" alt="" width="60%">
          <h4>Back-end Develepment</h4>
          <p>CMS:<a href="">Projects link</a></p>
          <p>MySQL: <a href="">Projects link</a></p>
          <p>PHP: <a href="">Projects link</a></p>
     </div>


      <div>
          <img   src="images/196.png" alt="" width="60%">
          <h4>Design & Photoshop</h4>
          <p>Layout: <a href="">Projects link</a></p>
          <p>Icon: <a href="">Projects link</a></p>
          <p>Illustrator: <a href="">Projects link</a></p>
     </div>
    </div>




</section>

<!-- lightbox -->
<section class="lightbox">
    <span class="close-lightbox">x</span>
    <!-- add video here with sources for fallback / standards -->

    <div>
        <img src="images/196.png" alt="">
    </div>

  

</section>





<!-- projects -->
<section>
    <h2>Projects</h2>
<ul>
    <li><a href="projects/github/github.html">GitHub</a></li>
    <li><a href="projects/foundation/foundation.html">foundation</a></li>
    <li><a href="projects/bootstrap/bootstrap.html">bootstrap</a></li>
    <li><a href="projects/SASS/SASS.html">SASS</a></li>
    <li><a href="projects/nodejs/nodejs.html">nodejs</a></li>
    <li><a href="projects/Vue/Vue.html">Vue</a></li>
    <li><a href="projects/jQuery/jQuery.html">jQuery</a></li>
</ul>
</section>


<!-- contact me -->
<section class="gradientBG">
    <h2 >Contact Me</h2>
    <form  action="admin/contactform.php" method="post">



<!-- Name -->
<input type="text" id="FormName"  placeholder="Name" name="name">

<!-- Email -->
<input type="email" id="FormEmail"  placeholder="E-mail" name="email">

<input type="text" id="FormSubject"  placeholder="I would like to discuss with you ..." name="subject">



<!-- Message -->
<div class="form-group">
    <textarea name="message" class="form-control rounded-0" id="Textarea" rows="3" placeholder="Message"></textarea>
</div>


<!-- Send button -->
 <button  type="submit" name="submit">Send</button>


</form>

</section>



<?php include "templetes/footer.html";?>


<script src="js/main.js"></script>
</body>
</html>