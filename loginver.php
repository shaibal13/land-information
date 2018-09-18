<?php
  $db = mysqli_connect('localhost','root','','jomiseba');

  if(isset($_POST['submit1'])) {
   session_start();
    $nid= $_POST['nid'];
    $pass=$_POST['pass'];
    $result = "Select * From owner_info Where nid = '$nid' and pass='$pass'";
    $result = mysqli_query($db, $result);
    $res = mysqli_fetch_array($result);
    $name=$res['name'];
    $_SESSION['name']=$name;
    $containpass=preg_match("/^[A-Za-z]\w{6,14}$/",$pass);
    $containnid=preg_match("/[0-9]/",$nid);
    $_SESSION['nid'] = $nid;

    if ($res['nid']==$nid && $res['pass']==$pass) {
      include'afterlogin.php';
      echo "login success";
      # code...
    }
    if( !$containnid || empty($nid) || $res['nid']!=$nid){
      echo "জাতীয় পরিচয় পত্র নম্বরটি দেখুন";
    }
    if (! $containpass || empty($pass)) {
      echo "পাসওয়ার্ডটি ভুল হয়েছে। আবার চেষ্টা করুন";
      # code...
    }



  }

 ?>
