<?include './header1.php' ?>

<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $sms = $_POST['sms'];
  $email = $_POST['email'];
  $region = $_POST['region'];
  $car = $_POST['car'];
  $my_car = $_POST['my_car'];
  $date = $_POST['e_date'];

  // 절차지향 스타일
  $mysql_host = 'localhost';
  $mysql_user = 'miakimsungji';
  $mysql_password = 'Aa9785780!';
  $mysql_db='miakimsungji';

  $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

  if(!$conn) {
    die('연결실패 : ' .mysqli_connet_error());
  }
  
  $query = "INSERT INTO test_drive (name, phone, sms, email, region, s_car, my_car, e_date)   VALUES ('$name', '$phone', '$sms', '$email', '$region', '$car', '$my_car', '$date')";
  
  $result = mysqli_query($conn, $query);

  // echo '시승신청이 완료되었습니다.' ;

  if($result)
    print '<p class="result">시승신청이 완료되었습니다.
    <br><br><br>
    <a href="./test_drive_print.php" title="시승신청 예약 조회하기">시승신청 예약 조회하기 > </a></p>';
  else
    print '<p class="result">입력이 안되었습니다. 다시 확인하고 입력하세요</p>' 

?>

<?include './footer1.php' ?>