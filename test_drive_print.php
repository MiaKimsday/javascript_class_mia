<?include './header1.php' ?>

  <form name="search" method="post" action="search.php">
  <?php
    //1. 변수선언(서버주소, 아이디, 패스워드, 데이터베이스명)
    $mysql_host = 'localhost';
    $mysql_user = 'miakimsungji';
    $mysql_password = 'Aa9785780!';
    $mysql_db='miakimsungji';

    //2. 데이터베이스 계정연결
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

    //3. 데이터베이스 연결 오류구문
    if(mysqli_connect_errno()) {
      printf("%s \n", mysqli_connect_error());
      exit;
    }

    //4. 데이터 조회하기
    $query = 'select * from test_drive';
    $result = mysqli_query($conn, $query); //조회결과값을 변수에 담는다. 

    print "<table class='car_reverse'><caption>현대자동차 시승신청 예약조회</caption><tr>" .
            "<th>번호</th>" .
            "<th>성명</th>" . 
            "<th>전화번호</th>" .
            "<th>SNS수신여부</th>". 
            "<th>이메일주소</th>".
            "<th>희망지점</th>".
            "<th>시승차</th>".
            "<th>보유차</th>".
            "<th>예약날짜</th>".
            "</tr>";

    while($row = mysqli_fetch_row($result)){
      print "<tr><td>" . $row[0] . "</td>" . 
      "<td>" . $row[1] . "</td>" . 
      "<td>" . $row[2] . "</td>" . 
      "<td>" . $row[3] . "</td>". 
      "<td>" . $row[4] . "</td>". 
      "<td>" . $row[5] . "</td>". 
      "<td>" . $row[6] . "</td>". 
      "<td>" . $row[7] . "</td>".
      "<td>" . $row[8] . "</td></tr>";
    }        
    print "</table>";
    mysqli_free_result($result);
    mysqli_close($conn);
  ?>
    <br>
        <p class="t_drive_btn"><a href="test_drive.html" title="데이터 입력하기">시승신청예약 하기</a></p>
          
        <fieldset class="search_box">
            <legend>예약조회하기</legend>
            <input type="text" id="search_txt" name="search_txt">
            <input type="submit" value="예약조회하기">
        </fieldset>
          
      </form>
    </main>

    <?include './footer1.php' ?>