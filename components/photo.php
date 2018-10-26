<section id="photo">
  <div class="photo-button">
    <form target="hiddenframe" action="https://hackaton.w3worx.nl/team1/php/connector.php?action=uploadPicture" method="post" enctype="multipart/form-data" id="take-photo">
      <input type="file" name="file" accept="image/*" capture="camera" />
      <input type="submit" value="Send desk">
    </form>
  </div>
  <iframe name="hiddenframe" frameborder="0"></iframe>
</section>
