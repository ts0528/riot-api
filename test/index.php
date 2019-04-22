<?php
session_start();
if(!isset($_SESSION['NAME'])){
header('Location: ../info/info.php');
exit();
}
if(isset($_POST['submit'])){
$_SESSION['NAME']= $_POST['username'];
}
if(!preg_match('/exist/',$_SESSION['joutai'])){
  $json = json_decode(file_get_contents('https://jp.api.pvp.net/api/lol/jp/v1.4/summoner/by-name/'.$_SESSION['NAME'].'?api_key=3eb91288-ac0b-44ca-adc2-c9c11d0e1354'), true);
//ほしい情報をjsonから引き出す
  foreach($json as $key => $value){
$_SESSION['TNAME'] = $value['name'];
$_SESSION['icon'] = $value['profileIconId'];
$_SESSION['level'] =  $value['summonerLevel'];
$_SESSION['id'] = $value['id'];
$aa=1;
}

//ランクの情報　tier、グループ、LP、勝敗数、divison、
$json = json_decode(file_get_contents('https://jp.api.pvp.net/api/lol/jp/v2.5/league/by-summoner/' . $_SESSION['id'] . '/entry?api_key=3eb91288-ac0b-44ca-adc2-c9c11d0e1354'), true);
$_SESSION['LP']=$json[$_SESSION['id']][0]['entries'][0]['leaguePoints'];
$_SESSION['division']=$json[$_SESSION['id']][0]['entries'][0]['division'];
$_SESSION['losses']=$json[$_SESSION['id']][0]['entries'][0]['losses'];
$_SESSION['wins']=$json[$_SESSION['id']][0]['entries'][0]['wins'];
$_SESSION['tier']=$json[$_SESSION['id']][0]['tier'];
$_SESSION['name1'] = $json[$_SESSION['id']][0]['name'];//テーモのつけた名前
$_SESSION['tierD'] = $_SESSION['tier'];
$_SESSION['tierD'] .= $_SESSION['division'];

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
                        <?php   print '<image src="http://ddragon.leagueoflegends.com/cdn/6.19.1/img/profileicon/'.$_SESSION['icon'].'.png" width="100px"></image>'; ?>

                       <p><span style="font-weight : bold"><?php echo $_SESSION['TNAME']; ?></span></p>
サモナーレベル：<?php echo $_SESSION['level']; ?>

                    </li>
                </ul>
                <ul class="products">
                    <li>
<?php
	if(!empty($_SESSION['tierD'])){
            print '<image src="../img/'.$_SESSION['tierD'].'.png"width="100px"></image>';
	print $_SESSION['tierD'].'<br>';
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
//チャンプの情報,idと名前(['id'])
$json1= json_decode(file_get_contents('https://global.api.pvp.net/api/lol/static-data/jp/v1.2/champion?api_key=3eb91288-ac0b-44ca-adc2-c9c11d0e1354'), true);
//rankedの情報
$json = json_decode(file_get_contents('https://jp.api.pvp.net/api/lol/jp/v1.3/stats/by-summoner/' . $_SESSION['id'] . '/ranked?season=SEASON2016&api_key=3eb91288-ac0b-44ca-adc2-c9c11d0e1354'), true);
//情報の取得
$aa = 0;

foreach($json['champions'] as $key => $value){
if(!$value['id'] == ''){
$id[] = $value['id'];
$totalDeathsPerSession[] =$json['champions'][$aa]['stats']['totalDeathsPerSession'];//KDAのD
$totalSessionsPlayed[] = $json['champions'][$aa]['stats']['totalSessionsPlayed'];//試合数
$totalDamageTaken[] = $json['champions'][$aa]['stats']['totalDamageTaken'];//平均受けたダメージ
$totalQuadraKills[] = $json['champions'][$aa]['stats']['totalQuadraKills'];//クアドラキル
$totalTripleKills[] = $json['champions'][$aa]['stats']['totalTripleKills'];//トリプルキル
$totalMinionKills[] = $json['champions'][$aa]['stats']['totalMinionKills'];//平均ミニオンキル数（ｃｓ）
$maxChampionsKilled[] = $json['champions'][$aa]['stats']['maxChampionsKilled'];//最高のキル数
$totalDoubleKills[] = $json['champions'][$aa]['stats']['totalDoubleKills'];//ダブルキル
$totalChampionKills[] = $json['champions'][$aa]['stats']['totalChampionKills'];//KDAのK
$totalAssists[] = $json['champions'][$aa]['stats']['totalAssists'];//KDAのA
$totalDamageDealt[] = $json['champions'][$aa]['stats']['totalDamageDealt'];//平均の与えたダメージ
$totalSessionsLost[] = $json['champions'][$aa]['stats']['totalSessionsLost'];//敗北数
$totalSessionsWon[] = $json['champions'][$aa]['stats']['totalSessionsWon'];//勝利数
$totalGoldEarned[] = $json['champions'][$aa]['stats']['totalGoldEarned'];//平均の稼ぎ
$totalTurretsKilled[] = $json['champions'][$aa]['stats']['totalTurretsKilled'];//平均のタレント破壊数
$totalPentaKills[] = $json['champions'][$aa]['stats']['totalPentaKills'];//ペンタキル
$maxNumDeaths[] = $json['champions'][$aa]['stats']['maxNumDeaths'];//最高のデス数
$aa++;

}else{
$aa++;

}
}
$aa = count($id);

?>


<?php
$bb = 0;
foreach($json1['data'] as $key => $value){
$id1[] = $value['id'];
for($i=0;$i<$aa;$i++){
if( $value['id'] === $id[$i]){
  //print '<image src="http://ddragon.leagueoflegends.com/cdn/6.17.1/img/champion/'.$value['key'].'.png" width="50" height="50"></image>';
$cname[] = $value['key'];
$totalDeathsPerSession1[]=$totalDeathsPerSession[$i];
$totalSessionsPlayed1[] = $totalSessionsPlayed[$i];
$totalDamageTaken1[]=$totalDamageTaken[$i];
$totalQuadraKills1[]=$totalQuadraKills[$i];
$totalTripleKills1[]=$totalTripleKills[$i];
$totalMinionKills1[]=$totalMinionKills[$i];
$maxChampionsKilled1[]=$maxChampionsKilled[$i];
$totalDoubleKills1[]=$totalDoubleKills[$i];
$totalChampionKills1[]=$totalChampionKills[$i];
$totalAssists1[]=$totalAssists[$i];
$totalDamageDealt1[]=$totalDamageDealt[$i];
$totalSessionsLost1[]=$totalSessionsLost[$i];
$totalSessionsWon1[]=$totalSessionsWon[$i];
$totalGoldEarned1[]=$totalGoldEarned[$i];
$totalTurretsKilled1[]=$totalTurretsKilled[$i];
$totalPentaKills1[]=$totalPentaKills[$i];
$maxNumDeaths1[]=$maxNumDeaths[$i];
break;
}
}
}

function change(&$a,&$b){
$free=$a;
$a=$b;
$b=$free;
}

$aa = count($id);
//for (初期化式; 条件式; 変化式)
          for($i=0;$i<$aa;$i++){
            for($j=0;$j<$aa;$j++){
              if($totalSessionsPlayed1[$j]<$totalSessionsPlayed1[$i]){
if($totalSessionsWon1[$j] > $totalSessionsWon1[$j]){
$free=$cname[$j];
$cname[$j]=$cname[$i];
$cname[$i]=$free;
$free=$totalSessionsPlayed1[$i];
$totalSessionsPlayed1[$i]=$totalSessionsPlayed1[$j];
$totalSessionsPlayed1[$j]=$free;
change($totalDeathsPerSession1[$i],$totalDeathsPerSession1[$j]);
change($totalDamageTaken1[$i],$totalDamageTaken1[$j]);
change($totalQuadraKills1[$i],$totalQuadraKills1[$j]);
change($totalTripleKills1[$i],$totalTripleKills1[$j]);
change($totalMinionKills1[$i],$totalMinionKills1[$j]);
change($maxChampionsKilled1[$i],$maxChampionsKilled1[$j]);
change($totalDoubleKills1[$i],$totalDoubleKills1[$j]);
change($totalChampionKills1[$i],$totalChampionKills1[$j]);
change($totalAssists1[$i],$totalAssists1[$j]);
change($totalDamageDealt1[$i],$totalDamageDealt1[$j]);
change($totalSessionsLost1[$i],$totalSessionsLost1[$j]);
change($totalSessionsWon1[$i],$totalSessionsWon1[$j]);
change($totalGoldEarned1[$i],$totalGoldEarned1[$j]);
change($totalTurretsKilled1[$i],$totalTurretsKilled1[$j]);
change($totalPentaKills1[$i],$totalPentaKills1[$j]);
change($maxNumDeaths1[$i],$maxNumDeaths1[$j]);
              }
            }
          }
          }
?>

<table class="champ" role="grid">
<thead class="Header">
<tr class="Row tablesorter-geaderRow" role="row">
<th class="Rank HeaderCell" role="columnheader" data-column="0" data-type="number">
<div class="tablesorter-header-inner">#</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="1" data-type="string">
<div class="tablesorter-header-inner" >チャンピオン</div>

</th>
<th class="Rank HeaderCell" role="columnheader" data-column="2" data-type="game">
<div class="tablesorter-header-inner">ゲーム</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="3" data-type="KDA">
<div class="tablesorter-header-inner">KDA</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="4" data-type="number">
<div class="tablesorter-header-inner">ゴールド</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="5" data-type="number">
<div class="tablesorter-header-inner">タレット破壊数</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="6" data-type="number">
<div class="tablesorter-header-inner">最多キル数</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="7" data-type="number">
<div class="tablesorter-header-inner">最多デス数</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="8" data-type="number">
<div class="tablesorter-header-inner">平均与ダメージ</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="9" data-type="number">
<div class="tablesorter-header-inner">平均被ダメージ</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="10" data-type="number">
<div class="tablesorter-header-inner">ダブルキル</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="11" data-type="number">
<div class="tablesorter-header-inner">トリプルキル</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="12" data-type="number">
<div class="tablesorter-header-inner">クアドラキル</div>
</th>
<th class="Rank HeaderCell" role="columnheader" data-column="13" data-type="number">
<div class="tablesorter-header-inner">ペンタキル</div>
</th>
</tr>
</thead>
<?php
for($i=0;$i<$aa;$i++){
?>
<tbody class="Body" aria-live="polite" aria-relevant="all">
<tr class="Row TopRanker" role="row">
<td class="Rank Cell sorted"><?php echo "$i"+1;
 ?></td>
 <div style="position: relative;">
<td class="demo3" align="left" ><?php print '<image src="http://ddragon.leagueoflegends.com/cdn/6.19.1/img/champion/'.$cname[$i].'.png" width="50" height="50"></image>';
 ?><?php echo $cname[$i]; ?></td>
<td class="Rank Cell sorted">
		
		<span style="position: absolute; top: 500px; left: 250px; ">
     <?php echo (($totalSessionsWon1[$i]."勝".$totalSessionsLost1[$i]."敗")."  ".
round($totalSessionsWon1[$i]/$totalSessionsPlayed1[$i]*100 )."%"); ?>
   </span>
	
<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100">
    <rect x="5" y="5" width="250" height="80" rx="50" ry="5" fill="#3498db" stroke="#333333" />
</svg>
</td>
</div>
<td class="Rank Cell sorted" data-value="<?php
echo number_format(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalSessionsPlayed1[$i],1);
?>"><?php
echo number_format(($totalChampionKills1[$i]/$totalSessionsPlayed1[$i]),1);
echo '/';
echo number_format(($totalDeathsPerSession1[$i]/$totalSessionsPlayed1[$i]),1);
echo '/';
echo number_format(($totalAssists1[$i]/$totalSessionsPlayed1[$i]),1);
?>
<span class="br"><?php/* echo number_format(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i],2);
echo ':1'*/; 

if(($totalDeathsPerSession1[$i]/$totalSessionsPlayed1[$i]) == 0){
echo '<FONT COLOR="YELLOW"> '."perfect".' </FONT>';
}else if(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i] < 3 ){
	echo '<FONT COLOR="GREY"> '. number_format(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i],2) .":1".' </FONT>';
}else if(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i] < 4 ){
echo '<FONT COLOR="BLUE"> '. number_format(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i],2) .":1".' </FONT>';
}else if(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i] < 5 ){
echo '<FONT COLOR="#2daf7f"> '. number_format(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i],2) .":1".' </FONT>';
}else if(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i] < 6 ){
echo '<FONT COLOR="orange"> '. number_format(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i],2) .":1".' </FONT>';
}else if(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i] >= 6 ){
echo '<FONT COLOR="#e19205"> '. number_format(($totalChampionKills1[$i]+$totalAssists1[$i])/$totalDeathsPerSession1[$i],2) .":1".' </FONT>';
}
?></span>
</td>
<td class="Rank Cell sorted"><?php echo number_format($totalGoldEarned1[$i]/$totalSessionsPlayed1[$i],0); ?></td>
<td class="Rank Cell sorted"><?php echo number_format($totalTurretsKilled1[$i]/$totalSessionsPlayed1[$i],2); ?></td>
<td class="Rank Cell sorted"><?php echo $maxChampionsKilled1[$i]; ?></td>
<td class="Rank Cell sorted"><?php echo $maxNumDeaths1[$i]; ?></td>
<td class="Rank Cell sorted"><?php echo number_format($totalDamageDealt1[$i]/$totalSessionsPlayed1[$i],0); ?></td>
<td class="Rank Cell sorted"><?php echo number_format($totalDamageTaken1[$i]/$totalSessionsPlayed1[$i],0); ?></td>
<td class="Rank Cell sorted"><?php echo $totalDoubleKills1[$i]; ?></td>
<td class="Rank Cell sorted"><?php echo $totalTripleKills1[$i]; ?></td>
<td class="Rank Cell sorted"><?php echo $totalQuadraKills1[$i]; ?></td>
<td class="Rank Cell sorted"><?php echo $totalPentaKills1[$i]; ?></td>

<?php
}
?>

</tr>
</tbody>
</table>

        </div>
        <!-- #main -->

        <div id="footer">Copyright 2016, feederjp.com</div>

    </div>
    <!-- #container -->
  <script src="../main.js"></script>

</body>

</html>