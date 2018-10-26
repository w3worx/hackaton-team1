<section id="score">
  <?php
    if($_GET['score'] < 6){
      echo'
      <div class="image">
        <img src="style/public/images/hank_angry.png" alt="">
      </div>
      ';
      echo'
      <div class="score">Your mark: 7 '.$_GET["score"].' </div>
      ';
    } else {
      echo'
      <div class="image">
        <img src="style/public/images/confetti.png" alt="">
      </div>
      ';
      echo'
      <div class="score">Your mark: 7 '.$_GET["score"].' </div>
      ';
    }
  ?>

  <h1>Today's winner:<br><span>Gerwald</span></h1>
</section>
