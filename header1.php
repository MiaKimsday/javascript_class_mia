<!doctype html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta name="veiwport" content="width=device-width, initial-scale=1">
  <title>현대자동차 시승신청 예약 데이터베이스 자료 출력</title>
    <!-- 초기화 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css">
  <!-- 기본서식, 공통서식 -->
  <link href="./css/base.css" rel="stylesheet" type="text/css">
  <!-- 레이아웃서식 -->
  <link href="./css/layout.css" rel="stylesheet" type="text/css">
  <!-- 아이콘폰트 주소 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- css3추가속성시 접두사 자동으로 붙여주는 스크립트 -->
  <script src="./script/prefixfree.min.js"></script>
<style>
        header{ background:#000;}
        main{padding:140px 0px 50px 0px;}
        .car_reverse{
            border:1px solid #ccc;
            border-collapse:collapse;
            width:1000px;
            margin:0px auto 30px auto;
    }
        .car_reverse caption{
            font-weight:bold;
            font-size:20px;
            padding:20px 0px;
        }
        .car_reverse td, .car_reverse th{
            border:1px solid #ccc;
            line-height:34px;
            text-align:center;
        }
        .t_drive_btn{ text-align:center;}
        .t_drive_btn > a{
            border:1px solid #333;
            padding:4px 10px;
            text-decoration:none;
            color:#333;
        }
    
    .search_box{
        width:1000px;
        border:1px solid #ccc;
        padding:12px 0px;
        margin:20px auto;
        text-align:center;
        background:#ccc;
    }
    .search_box legend{display:none;}
    .search_box input[type=text]{
        width:300px;height:20px;
    }
    .search_box input[type=submit]{
        padding:2px 10px;
        background:#000;color:#fff;
        transform:translateY(2px);
    }
    .result{
      font-size:var(--f-size01);
      font-weight:bold;
      text-align:center;
    }
    </style>
</head>
<body>
    <header>
    <h1>
      <a href="index.html" title="메인페이지로 바로가기">
        <img src="./images/logo-casper-white.png" alt="상단로고">
      </a>
    </h1>

    <!-- 상단 스크롤시 고정 내비게이션 -->
    <nav>
      <ul class="gnb">
        <li><a href="#" title="소개">소개</a></li>
        <li><a href="#" title="체험">체험</a></li>
        <li><a href="#" title="이벤트">이벤트</a></li>
        <li><a href="#" title="구매안내">구매안내</a></li>
        <li><a href="#" title="고객지원">고객지원</a></li>
      </ul>
    </nav>

    <i class="fas fa-user"></i>
    <i class="fas fa-bell"></i><!-- 알림아이콘 -->
  </header>

  <main>