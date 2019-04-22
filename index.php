<?php
session_start();
$dataFile='bbs.dat';

function h($s){
return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }

function setToken() {
    $token = sha1(uniqid(mt_rand(), true));
    $_SESSION['token'] = $token;
}

function checkToken() {
    if (empty($_SESSION['token']) || ($_SESSION['token'] != $_POST['token'])) {
        echo "不正なPOSTが行われました！";
        exit;
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' &&
isset($_POST['message']) &&
isset($_POST['user'])){

  $message = trim($_POST['message']);
  $user = trim($_POST['user']);

  if ($message !== ''){

      $user = ($user === '') ? 'ななしさん' : $user;

      $message = str_replace("\t" , ' ', $message);
      $user = str_replace("\t" , ' ', $user);


      $hour = gmdate("H");
      $minute = gmdate("i");
      $second = gmdate("s");
      $month = gmdate("n");
      $day = gmdate("j");
      $year = gmdate("Y");

      $postedAt = date("Y/m/d H:i:s");

      $newData = $message . "\t" . $user . "\t" . $postedAt . "\n";


      $fp = fopen($dataFile,'a');
      fwrite($fp , $newData);
      fclose($fp);
  }else {
    setToken();
  }
}
$posts = file($dataFile, FILE_IGNORE_NEW_LINES);

$posts = array_reverse($posts);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>top</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="shortcut icon" href="img/favicon.ico">

 <!--       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="jquery.bxslider.js"></script>
    <link href="jquery.bxslider.css" />
    <script type="text/javascript">
            $(document).ready(function(){
                $('.bxslider').bxSlider({
                    auto: true,
                });
        	});
    </script> -->

</head>

<body>
    <div id="container">
        <div id="header">
            <h1><a href="index.php"><div id="asd"></div></a></h1></div>
        <div id="menu">
            <ul>
                <li><a href="index.php">トップページ</a></li>
                <li><a href="standard/standard.php">基本的なことについて</a></li>
                 <!-- <li><a href="gaido/gaido.php">チャンピオンガイド</a></li> -->
                <li><a href="info/info.php">サモナーの情報</a></li>
                <!--  <li><a href="meta/meta.php">メタ</a></li>  -->
                 <!-- <li><a href="meta/meta.php">雑記</a></li>  -->
            </ul>
        </div>
        <div id="main">
            <div id="contents">
              <h2>このサイトについて</h2>
              このサイトは初心者からゴールドまでの方に向けたサイトです
              <br>このサイトが少しでも見てくれる方に貢献できれば幸いです
              <h2><a href="standard/standard.php">基本的なことについて</a></h2> このサイトの講座は上記の基本的なことについてを一読したことを前提に進めています。本当に初心者のかたは一読してから各チャンピオンの講座に移ってください
              <h2>現在説明できるチャンプ一覧</h2> 極力操作が簡単なチャンピオンに絞って解説します。各チャンピオン画像をクリックしてください。
              <table border="1"  >
                  <thead>
                      <tr>
                        <th id="ekko">ekko</th>
                        <th id="panth">panth</th>
                        <th id="shen">shen</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td width="100"><a href=ekko/ekko.php><div id="ekkoimg"></div></a></td>
                          <td width="100"><a href=panth/panth.php><div id="panthimg"></div></a></td>
                          <td width="100"><a href=shen/shen.php><div id="shenimg"></div></a></td>
                      </tr>
                  </tbody>
              </table>

          <h2>今週の無料チャンピオン</h2>
          <?php
          //Json形式をデコード
          // $json = json_decode(file_get_contents("https://jp1.api.riotgames.com/lol/platform/v3/champion-rotations?api_key=RGAPI-bffa41ad-317b-4cc6-8bcf-6fc2ea6ac421"), true);
          // $json1 = json_decode(file_get_contents("https://jp.api.pvp.net/api/lol/jp/v1.2/champion?api_key=RGAPI-bffa41ad-317b-4cc6-8bcf-6fc2ea6ac421"), true);

          //ree champ表示！
          //free champ id 取得！
          // foreach($json1['champions'] as $key => $value){
          //   if($value['freeToPlay'] == true){
          //       $free1[] = $value["id"];
          //   }
          // }
          // $result = count($free1);
          // //free champ id とチャンプ名をひも付け！
          // foreach($json['data'] as $key => $value){
          //   for($i=0;$i<$result;$i++){
          //       if( $value['id'] === $free1[$i]){
          //           $free2[]=$value['key'];
          //           break;
          //       }
          //   }
          // }
          // //並び替え
          // for($i=0;$i<$result;$i++){
          //   for($j=0;$j<$result;$j++){
          //     if($free2[$i]<$free2[$j]){
          //       $free3=$free2[$i];
          //       $free2[$i]=$free2[$j];
          //       $free2[$j]=$free3;
          //     }
          //   }
          // }
          // for($i=0;$i<$result;$i++){
          //   print '<image src="http://ddragon.leagueoflegends.com/cdn/6.19.1/img/champion/'.$free2[$i].'.png" width="50" height="50"></image>';
          // }
          $key="RGAPI-e6a464a8-7174-484d-a84b-3edbd3412ebd";

          $json= json_decode(file_get_contents('./summoner/champion.json'), true);
$aa = 0;
//無料チャンプの名前とID取得
$free=json_decode(file_get_contents('https://jp1.api.riotgames.com/lol/platform/v3/champion-rotations'.'?api_key='.$key), true);
//無料チャンプのID
$freechamp=$free['freeChampionIds'];
foreach($json['data'] as $key => $value){
  $test = $key;
  foreach($freechamp as $value){
       if($json['data'][$key]['key']==$value){
         print '<image src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/champion/'.$test.'.png" width="50" height="50"></image>';
       };
}
}
          ?>


          <ul class="bxslider">
		<!-- <li><img src="images/cool1.jpg"width="670" height="376"></li>
		<li><img src="images/cool2.jpg"width="670" height="376"></li>
		<li><img src="images/cool3.jpg"width="670" height="376"></li> -->
	</ul>


          <h2>コメント</h2>
          <form action="" method="post">
            message:<input type="text" name="message">
            user:<input type="text" name="user">
          <input type="submit" value="投稿">
          <input type="hidden" name="token" value="<?php echo h($_SESSION['token']); ?>">

          </form>
          <h3>コメント一覧(<?php echo count($posts); ?>件)</h3>
          <ul>
            <?php if (count($posts)) : ?>
              <?php foreach ($posts as $post) : ?>
                <?php list($message, $user, $postedAt) = explode("\t", $post); ?>
                <li><?php echo h($message); ?>(<?php echo h($user); ?>) - <?php echo h($postedAt); ?></li>
        <?php endforeach; ?>
      <?php else : ?>
          <li>まだ投稿はありません。</li>
<?php endif; ?>
          </ul>
            </div><!-- #contents-->
            <div id="sidebar">
                <div class="kategori">
                    <ul>
                        カテゴリー
                        <hr>
                        <li><a href="/trunk/ekko/ekko.php">エコー</a></li>
                        <li><a href="/trunk/panth/panth.php">パンテオン</a></li>
                      <!--  <li><a href="">雑記</a></li>  -->
                      <!--  <li><a href="">チャンピオンガイド</a></li> -->
                      <!--  <li><a href="">メタ</a></li>  -->
                      <!--  <li><a href="">パッチノート</a></li>  -->
                    </ul>
                </div>
            </div>
            <!-- #sidebar -->
        </div>
        <!-- #main -->
        <div id="footer">Copyright 2016, feederjp.com</div>
    </div>
    <!-- #container -->
</body>
</html>
