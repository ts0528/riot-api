<?php
session_start();
$_SESSION['joutai']='info';
if(isset($_POST['submit'])){
$_SESSION['NAME']= $_POST['username'];
header('Location: ../summoner/summoner.php');
exit();
}
?>



<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf8">
    <title>summoner info</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet"href="info.css">
  </head>

<body>
    <div id="container">
        <div id="header">
            <h1><a href="../index.php"><div class="asd"></div></a></h1></div>

        <div id="menu">
            <ul>
                <li><a href="../index.php">トップページ</a></li>
                <li><a href="../standard/standard.php">基本的なことについて</a></li>
                <!-- <li><a href="../gaido/gaido.php">チャンピオンガイド</a></li> -->
       	        <li><a href="../info/info.php">サモナーの情報</a></li>
                <!-- <li><a href="../meta/meta.php">メタ</a></li>  -->
                <!-- <li><a href="../meta/meta.php">雑記</a></li>  -->
            </ul>
        </div>

        <div id="main">
            <div id="contents">
	<div id="center">
        <p><img src="../img/dia.png" /></p>
        <form action="" method="POST">
        <input type="text" name="username" placeholder="サモナー名を入力">
        <input type="submit" name="submit" value="送信"><br>
        </form>
	</div>
            <!-- #center-->

            </div>
            <!-- #contents-->

        </div>
        <!-- #main -->

        <div id="footer">Copyright 2016, feederjp.com</div>

    </div>
    <!-- #container -->

</body>

</html>
