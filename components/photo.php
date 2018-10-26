<section id="photo">
  <img src="style/public/images/hank.svg" alt="">

  <h1>Desk Inspection</h1>
  <p>It's time to take a look at your desk.</p>
  <br>
  <span class="time-left">Time left:</span><br>
  <div class="item html">
      <h2>0</h2>
      <svg width="160" height="160" xmlns="http://www.w3.org/2000/svg">
       <g>
        <title>Layer 1</title>
        <circle id="circle" class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="10" stroke="#75C3BE" fill="none"/>
       </g>
      </svg>
  </div>


  <div class="photo-button">
    <form target="hiddenframe" action="https://hackaton.w3worx.nl/team1/php/connector.php?action=uploadPicture" method="post" enctype="multipart/form-data" id="take-photo">
      <input id="photoo" type="file" name="file" class="button large green" accept="image/*" capture="camera" />
      <!-- <input type="submit" class="button large green" value="Send desk"> -->
    </form>
  </div>
  <iframe name="hiddenframe" frameborder="0"></iframe>

  <div class="popup">
    <iframe src="" frameborder="0"></iframe>
  </div>
</section>
