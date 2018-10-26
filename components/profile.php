<section id="profile">
  <div class="flex-half">
    <div class="avatar-holder">
      <div class="avatar">
        <img src="style/public/images/wilco.jpg" alt="avatar">
      </div>
      <div class="rank"></div>
      <div class="name">Wilco van Meppel</div>
      <div class="rank-name">Level: Desk Recruit</div>
    </div>
    <div class="button-group">
      <a href="page-team.php" class="button green">My team</a>
      <a href="page-dashboard.php" class="button green">My dashboard</a>
    </div>
  </div>

  <div class="flex-half green">
    <div class="badge">
      <img src="style/public/images/badge.png" alt="">
    </div>
    <div class="tip">
      <p>
        <?php echo $tips[rand(0,1)]; ?>
      </p>
    </div>
    <a href="#" class="button green large">Sir yes sir</a>
  </div>
</section>
