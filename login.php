<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title> লগইন/রেজিস্টার </title>
  <link rel="stylesheet" href="colorBackground.css">
  <link rel="stylesheet" href="menubar.css">
  <link rel="stylesheet" href="loginstyles.css">
</head>

<body  class="color-background">

  <?php
      include 'connect.php'
   ?>
  <header>
    <a href="test.php"><img src="jomiseba.png" alt=""></a>
  </header>
  <nav>
      <ul>
          <li class="nav-item"><a href="home.php" >মূলপাতা</a></li>
          <li class="nav-item"><a href="#">জানুন</a></li>
          <li class="nav-item"><a href="#" >যোগাযোগ</a></li>
          <li class="nav-item"><a href= "login.php"> লগইন/রেজিস্টার</a></li>
      </ul>
  </nav>


    <center> <h1> লগইন করুন </h1> <center>
  <form  action="loginver.php" method="post">

    <label><b>জাতীয় পরিচয় পত্র নম্বর</b></label>
   <br>
   <input type="text" placeholder="জাতীয় পরিচয় পত্র নম্বর" name="nid" required>
   <br>
   <br>
   <label><b>পাসওয়ার্ড</b></label>
   <br>
   <input type="password" placeholder="পাসওয়ার্ড" name="pass" required>
   <br>
   <br>
   <a class="button" href="register.php">Not a member!!!!</a>
  <input class="button" type="submit" name="submit1" value="submit">




</form>


</body>
</html>
