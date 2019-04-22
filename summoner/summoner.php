<?php
$key="RGAPI-e6a464a8-7174-484d-a84b-3edbd3412ebd";
session_start();
if(!isset($_SESSION['NAME'])){
header('Location: ../info/info.php');
exit();
}
if(isset($_POST['submit'])){
$_SESSION['NAME']= $_POST['username'];
}
if(!preg_match('/exist/',$_SESSION['joutai'])){
  $json = json_decode(file_get_contents('https://jp1.api.riotgames.com/lol/summoner/v4/summoners/by-name/'.$_SESSION['NAME'].'?api_key='.$key), true);
//ほしい情報をjsonから引き出す
$_SESSION['icon'] = $json["profileIconId"];
$_SESSION['TNAME'] = $json['name'];
$_SESSION['level'] =  $json['summonerLevel'];
$_SESSION['id'] = $json['id'];
$_SESSION['accountId']=$json['accountId'];
$aa=1;

//ランクの情報　tier、グループ、LP、勝敗数、divison、
$json = json_decode(file_get_contents('https://jp1.api.riotgames.com/lol/league/v4/positions/by-summoner/' . $_SESSION['id'] . '?api_key='.$key), true);
$_SESSION['LP']=$json[0]['leaguePoints'];
$_SESSION['division']=$json[0]['rank'];
$_SESSION['losses']=$json[0]['losses'];
$_SESSION['wins']=$json[0]['wins'];
$_SESSION['tier']=$json[0]['tier'];
$_SESSION['name1'] = $json[0]['leagueName'];//テーモのつけた名前
$_SESSION['tierD'] = $json[0]['tier'];
if(!isset($aa)){
header('Location: ../exist/exist.php');
exit();
}
}
$_SESSION['joutai'] = 'summoner';

 ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf8">
    <title>Summoner Info</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" href="summoner.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1><a href="../index.php"><div class="asd"></div></a></h1></div>

        <div id="menu">
            <ul>
                <li><a href="../index.php">トップページ</a></li>
                <li><a href="../standard/standard.php">基本的なことについて</a></li>
               <!-- <li><a href="../gaido/gaido.php">チャンピオンガイド</a></li>-->
       	        <li><a href="../info/info.php">サモナーの情報</a></li>
                <!--<li><a href="../meta/meta.php">メタ</a></li>-->
               <!-- <li><a href="../meta/meta.php">雑記</a></li>-->
		<li style="float: right">
		<form action="" method="POST"><input type="text" name="username" placeholder="user name"
		value="<?php echo
			$str = preg_replace('/(\s|　)/','',$_SESSION['TNAME']);
			htmlspecialchars($str,ENT_QUOTES,'UTF-8'); ?>"><input type="submit" name="submit" value="送信"></form>
		</li>
            </ul>
        </div>

        <div id="main">
            <div id="contents">
                <ul class="products">
                    <li>
                        <?php   print '<image src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/profileicon/'.$_SESSION['icon'].'.png" width="100px"></image>'; ?>

                       <p><span style="font-weight : bold"><?php echo $_SESSION['TNAME']; ?></span></p>
サモナーレベル：<?php echo $_SESSION['level']; ?>

                    </li>
                </ul>
                <ul class="products">
                    <li>
<?php
	if(!empty($_SESSION['tierD'])){
            print '<image src="../img/'.$_SESSION['tier'].$_SESSION['division'].'.png"width="100px"></image>';
	print $_SESSION['tierD'].$_SESSION['division'].'<br>';
	print $_SESSION['LP'].'LP';
            print '<font color="#999999">  /  </font>';
            print '<font color="#999999">'.$_SESSION['wins'].'勝</font>';
            print '<font color="#999999">'.$_SESSION['losses'].'敗</font><br>';
 	$syouritu = number_format($_SESSION['wins']/($_SESSION['wins']+$_SESSION['losses']),2)*100;
            print '<font color="#999999">勝率'.$syouritu.'%</font><br>';
            print '<font color="#999999">'.$_SESSION['name1'].'</font>';

	}else{
            print '<image src="../img/unrank.png"width="100px"></image>';
            print '<br>';
            print '<br>';
	echo 'Unrank';
	}
?>
                    </li>
                  </ul>
            </div>
            <!-- #contents-->
<?php
  //timestanp
    $json = json_decode(file_get_contents('https://jp1.api.riotgames.com/lol/match/v4/matchlists/by-account/' . $_SESSION['accountId'] . '?api_key='.$key), true);
  $test=$json['matches'];
  foreach($test as $key => $value){
    if($value['queue']=='420'){
      $syori = "1";
    }else{
      $syori="0";
    }
    if($syori=="1"){
          echo $value['timestamp'];
          echo '<br>';
    }
      //   print_r($value);
      // print '<br>';
  }

 ?>

        </div>
        <!-- #main -->

        <div id="footer">Copyright 2016, feederjp.com</div>

    </div>
    <!-- #container -->
  <script src="../main.js"></script>

</body>

</html>
