<?php
	session_start();
	$session_username = $_SESSION['username'];
	if( is_null($session_username)) {
		header( 'Location: login.php' );
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>HOME</title>
		<link rel="stylesheet" href="/css/loginstyle.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/css/gallery.css">
	</head>
	<body class="loggedin">
	<!-- Nav Bar -->
		<nav class="navtop">
			<div>
				<h1>SQL injection</h1>
                <a href="/home.php"><i class="fas fa-home"></i>Home</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="/member/logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="container mt-3">
			<div class="row">
				<div class="col-sm-12 col-md-3 col-lg-2 p-2">
				<!-- Sidebar  -->
          <nav id="sidebar" class="border-top border-secondary">
            <div class="list-group">
              <a class="rounded-0 list-group-item list-group-item-action list-group-item-light " href="./freeboard/index.php">자유게시판</a>
              <a class="rounded-0 list-group-item list-group-item-action list-group-item-light " href="/login/report.php">버그및건의</a>
            </div>
					</nav>
				</div>
				<div class="col-sm-12 col-md-9 col-lg-10 p-2">
					<div class="content">

<h2>READ ME</h2>
<div class="col-11">
    <div class="card">
        <div class="card-body">
            <div class="card-text">
            <h4>SERVER</h4>
            <ul>
                <li> PHP <kbd>8.2</kbd></li>
                <li> Apache <kbd>2.4</kbd></li>
                <li> MySQL <kbd>8.0</kbd></li>
                <!--
                <li> 부트스트랩 css 적용<kbd>01/11</kbd></li>
                <li> 공지사항 OPEN _ Markdown 적용<kbd>01/12</kbd></li>
                <li> 로그아웃 구현<kbd>01/13</kbd></li>
                <li> 게시판 구현<kbd>01/14</kbd></li>
                <li> 게시글 추가기능 구현<kbd>01/16</kbd></li>                
                <li> 게시글 파일 첨부 구현<kbd>01/18</kbd></li>
                <li> <del> 보안모듈을 적용하여 안전한 통신(HTTPS)을 지원합니다.</del></li>
                -->
            </ul>
            <h4>UPDATE</h4>
            <kbd>2023.04.04</kbd>
            <ul>
            <li>웹사이트 빌드</li>
            </ul>
            <kbd>2023.04.05</kbd>
            <ul>
            <li>페이지 내 링크 수정</li>
            </ul>
            <h4>주의사항</h4>
            <ul>
            <li><del>게시글 삭제 기능이 구현되지 않았으니 민감파일 업로드에 주의하세요</del></li>
            <li><del>혹시라도 업로드했을 시 관리자 요청 시 삭제해드립니다.</del></li>
            </ul>
            </div>
            <div class="d-flex justify-content-end">
                
                <div class="badge badge-light p-2 text-left">
                    <div class="mb-2">마지막 수정: 관리자</div>
                    <div>2023년 04월 05일</div>
                </div>
            </div>
        </div>
    </div>
</div>


					</div>
				</div>
			</div>
			<hr>
		</div>
	
		<footer class="footer">
    <div class="container mt-3">
        <span class="text-muted">©2023 • CAPSTONE2023</span>
        <div class="float-right small"><a href=#>개인정보취급방침</a></div>
    </div>
</footer>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
	</body>
</html>
