<!doctype html>
<html lang="en">

<?php
  $pageTitle = "Odd one out!";
  include('./inc/app-head.php');
?>

  <body class="for-color">

    <?php
      include('./inc/app-nav.php');
    ?>

    <div class="ui-container">
      <h1 class="header">Odd one out!</h1>

      <div class="item1">
        <h2>Priya Pooja</h2>

        <figure>
          <img src="./media/priya.jpg" alt="Pooja Priya">
        </figure> 
      </div>

      <div class="item2">
          Field of Study: Digital Media Studies and Computer Science.
      </div> 

      <div class="item3"> 
          <h2>Hope Barkley</h2>

          <figure>
            <img src="./media/hope.jpg" alt="Hope Barkley">
          </figure> 
      </div>

      <div class="item4">
          Field of Study: Digital Media Studies  
      </div> 

      <div class="item5">
        <h2>Diarra Bell</h2>
        <figure>
          <img src="./media/diarra.jpg" alt="Diarra">
        </figure>
      </div>

      <div class="item6">
          Field of Study: Computer Science with a minor in Japanese.
      </div>

         <a class="item16" href="priya-hope-diarra.php">Click here to learn more!</a>
       
    </div>

    <?php include('./inc/app-scripts.php'); ?>

  </body>

</html>
