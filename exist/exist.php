<?php
session_start();
if(preg_match('/info/',$_SESSION['joutai'])){
$_SESSION = array();
}
$_SESSION['joutai']='exist';

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>サモナー情報</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.6.0/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" href="exist.css">
</head>
<body>
<p><img src="../img/next.jpg" width="30%" height="30%"/></p>

<h1>
日本サーバーに登録されていません。サモナーネームを確認してください。
</h1>
<a href="/trunk/index.php">トップページ</a>
<a href="../summoner/summoner.php">前のページ</a>

</div>

</body>
</html>