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
    <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
</head>
<body>



<h1 class="hidden">Ling_Ding_Portfolio</h1>
<?php include 'templetes/header.html';?>

<section id="banner">
    <div>

        <h3>Hi , I am Ling Ding</h3>
        <p id="introText" class="lighter">
            Welcome to my portfolio website. I am a Developer. I'm also interested in the graphics design and photoshop
            retouch. I have 2+ years of studying in an interactive media design program in Fanshawe college.I am located
            in London.
        </p>
        <p>by <strong>Ling Ding</strong> 04/20/2019</p>
        <p>My GitHub for <a href="https://github.com/azusakaworu/Ling_Ding_Portfolio">Portfolio Website</a></p>
            
        <button><a href="https://resume.io/r/1UhVxeC9S">DOWNLOAD RESUME</a></button>


    </div>

</section>

<!-- self introduce -->
<section >
    <h2>About Me</h2>
    <div id="aboutMe">
      <div >
          <img class="show" src="images/1.png" alt="" width="75%">
          <h4>Front-end Develepment</h4>
          <p>Bootstrap: <a href="">Projects link</a></p>
          <p>Foundation: <a href="">Projects link</a></p>
          <p>Vue: <a href="">Projects link</a></p>
     </div>


      <div>
          <img class="show" src="images/2.png" alt="" width="75%">
          <h4>Back-end Develepment</h4>
          <p>CMS:<a href="">Projects link</a></p>
          <p>MySQL: <a href="">Projects link</a></p>
          <p>PHP: <a href="">Projects link</a></p>
     </div>


      <div>

          <img class="show"  src="images/5.png" alt="" width="75%">
          <h4>Design & Photoshop</h4>
          <p>Layout: <a href="design.php">Projects link</a></p>
          <p>Icon: <a href="">Projects link</a></p>
          <p>Illustrator: <a href="">Projects link</a></p>
     </div>
    </div>




</section>

<!-- lightbox -->
<section class="lightbox">
    <span class="close-lightbox">x</span>


    <div>
        <img src="images/196.png" alt="">
    </div>



</section>





<!-- projects -->
<section>
    <h2>Projects</h2>
<!-- <ul>
    <li><a href="projects/github/github.html">GitHub</a></li>
    <li><a href="projects/foundation/foundation.html">foundation</a></li>
    <li><a href="projects/bootstrap/bootstrap.html">bootstrap</a></li>
    <li><a href="projects/SASS/SASS.html">SASS</a></li>
    <li><a href="projects/nodejs/nodejs.html">nodejs</a></li>
    <li><a href="projects/Vue/Vue.html">Vue</a></li>
    <li><a href="projects/jQuery/jQuery.html">jQuery</a></li>
</ul> -->

<table>
  <th>Technology</th>
  <th>To Do</th>
  <th>Projects Link</th>
  </tr>
  <tr>
  <td>Ajax</td>
  <td>After sending email,Show thank you msg without reload page</td>
  <td>$100</td>
  </tr>
  <tr>
  <td>CMS</td>
  <td>allowed admin to add git info after login</td>
  <td>$150</td>
  </tr>
  <tr>
  <td>PHP</td>
  <td>load data from database and render in git page</td>
  <td>$300</td>
  </tr>
  <tr>
  <td>Vue</td>
  <td>Show v-bind router-link and components skills</td>
  <td>$250</td>
  </tr>
  <tr>
  <td>Git/Github</td>
  <td>markdown and git command </td>
  <td>$250</td>
  </tr>

  <tr>
  <td>Bootstrap</td>
  <td>responsible and components </td>
  <td>$250</td>
  </tr>

  <tr>
  <td>Foundation</td>
  <td>responsible and components </td>
  <td>$250</td>
  </tr>
</table>

</section>


<!-- contact me -->
<section class="gradientBG" id="contact">
    <h2 id="contactTitle">Contact Me</h2>
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