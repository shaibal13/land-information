<?php

  $db = mysqli_connect('localhost','root','','jomiseba');

$nid = $_SESSION['nid'];
$name=$_SESSION['name'];

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title> হোম পেজ </title>
    <link rel="stylesheet" href="colorBackground.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="animatedText.css">
    <link rel="stylesheet" href="menubar.css">
    


  </head>
  <body class="color-background">


    <header>
      <a href="test.php"><img src="jomiseba.png" alt=""></a>
    </header>
    <nav>
  			<ul>
				    <li class="nav-item"><a href="#" >মূলপাতা</a></li>
				    <li class="nav-item"><a href="#">জানুন</a></li>
    				<li class="nav-item"><a href="#" >যোগাযোগ</a></li>
            <li class="nav-item"><?php echo "$name";?></li>
			  </ul>
		</nav>
    <div><center> <h1 data-shadow='জমি সেবাতে আপনাকে স্বাগতম।'>জমি সেবাতে আপনাকে স্বাগতম।</h1> <center></div>


    <div class="parallax">

    </div>
    <div class="relative">
      <form action="result.php" method="post">
        <input type="text" name="search" placeholder="জমি নম্বর দিয়ে খোঁজ করুন।"><br>
        <input type="submit" name="Submit" value="খুঁজুন">
      </form>
    </div>

    <div class="parallax">

    </div>


      <div id="footer">
      <center>
        <h2> <p> © All Rights Reserved || Team Tiger Tech
             <p> Pritam Nandy || Shaibal Saha </h2>
     </center>
   </div>

  </body>
  </html>
