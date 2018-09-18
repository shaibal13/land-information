<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> আপনার তথ্য </title>
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="menubar.css">
    <link rel="stylesheet" href="animatedText.css">
    <style>
      body{
        background-color: #09BCBC;
      }
      h2 {
        font-family: sans-serif;
        font-size: 25px;
        color: white;
      }
    </style>
  </head>
  <body>
    <header>
      <a href="test.php"><img src="jomiseba.png" alt=""></a>
    </header>
    <nav>
  			<ul>
				    <li class="nav-item"><a href="#" >মূলপাতা</a></li>
				    <li class="nav-item"><a href="#">জানুন</a></li>
    				<li class="nav-item"><a href="#" >যোগাযোগ</a></li>
            <li class="nav-item"><a href= "login.php"> লগইন/রেজিস্টার </a></li>
			  </ul>
		</nav>
    <div><center> <h1 data-shadow='আপনার খোঁজা তথ্য।'>আপনার খোঁজা তথ্য।</h1> <center></div>
    <br>
    <br>
    <center> <h2>
    <?php
        $db = mysqli_connect('localhost','root','','jomiseba');

        if(isset($_POST['Submit'])) {

          $search = $_POST['search'];
          $result = "Select * From land_info Where lid = '$search'";
          $result = mysqli_query($db, $result);

          while($res = mysqli_fetch_array($result))
          {
            echo "Land Number: ".$res['lid'];
            echo "<br>";
            echo "<br>";
            echo "Owner Name: ".$res['owner'];
            echo "<br>";
            echo "<br>";
            echo "Email: ".$res['email'];
            echo "<br>";
            echo "<br>";
            echo "Land Type: ".$res['type'];
            echo "<br>";
            echo "<br>";
            echo "Tax: ".$res['tax'];
            echo "<br>";
            echo "<br>";
            echo "Address: ".$res['address'];
            echo "<br>";
            echo "<br>";
            echo "District: ".$res['district'];
            echo "<br>";
            echo "<br>";
            echo "Land Amount: ".$res['amount'];
            echo "<br>";
            echo "<br>";
            echo "PS Number: ".$res['psnum'];
            echo "<br>";
            echo "<br>";
            echo "BS Number: ".$res['bsnum'];
            echo "<br>";
            echo "<br>";
          }


        }

     ?>
   </h2>
 </center>

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
