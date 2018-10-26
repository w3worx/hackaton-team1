<div id="login">

  <div class="form">
    <h1>Login</h1>
    <?php
      if(isset($_POST['submit'])){
        $username = $_POST['hank-username']; $password = $_POST['hank-password'];
        if($username === 'Wilco' && $password === 'nelleke'){
          $_SESSION['login'] = true; header('LOCATION:page-profile.php'); die();
        } {
          echo "<div class='not-valid'>Username and Password do not match.</div>";
        }

      }
    ?>
    <form action="" method="POST">
      <input type="text" name="hank-username" placeholder="Username" autocomplete="off" autocomplete="false">
      <input type="password" name="hank-password" placeholder="Password" autocomplete="off">
      <input type="submit" name="submit" value="login">
    </form>

  </div>

</div>
