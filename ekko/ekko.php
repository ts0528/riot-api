
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf8">
    <title>Ekko講座</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" href="ekkostyle.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <link href="modal-multi.css" rel="stylesheet">
    </head>

<body>
    <div id="container">
        <div id="header">
            <h1><a href="../index.php"><div class="asd"></div></a></h1></div>

        <div id="menu">
            <ul>
                <li><a href="../index.php">トップページ</a></li>
                <li><a href="../standard/standard.php">基本的なことについて</a></li>
               <!--   <li><a href="../gaido/gaido.php">チャンピオンガイド</a></li>-->
       	 <li><a href="../info/info.php">サモナーの情報</a></li>
                <!-- <li><a href="../meta/meta.php">メタ</a></li>-->
                <!-- <li><a href="../meta/meta.php">雑記</a></li>-->

            </ul>
        </div>


        <div id="main">
            <div id="contents">
                <div class="ekkobg">
                    <nav>
                        <ol>
                            <strong>目次</strong>
                            <!-- <li><a href="#now">今考えている運用2016.6.21</a></li> -->
                            <li><a href="#ekkotopatch">エコーとパッチ6.11での変更</a></li>
                            <li><a href="#why_tank_ekko">どうしてtank運用なのか</a></li>
                            <li><a href="#skill">スキルオーダー</a></li>
                            <li><a href="#mastery">マスタリー</a></li>
                            <li><a href="#rune">ルーン</a></li>
                            <li><a href="#build">ビルドパス</a></li>
                            <li><a href="#lane_fight">レーンでの動き</a></li>
                            <li><a href="#group_fight">集団戦での動き</a></li>
                            <li><a href="#counter">対面チャンプによる不利有利</a></li>
                        </ol>
                    </nav>
                </div>
                <!-- <p id="now">
                    <h2>今考えている運用2016.6.21</h2></p>
                マスタリー21/0/9が思った以上に強いのとlv1で最強なのでigniteもって行ったらわからん殺しが出来る
                <br>レーンでキルを取り相手がbotにtpをしたらタレントを折りその後はtopをほぼ放置してロームが強い -->
                <p id="ekkotopatch">
                    <h2>エコーとパッチ6.11での変更</h2></p>
                エコーは<a href="http://jp.leagueoflegends.com/ja/news/game-updates/patch/patch-611-notes" target="_blank">6.11のパッチ</a>で
                <ul class="products">
                    <li>
                        <a href="../img/ekkopatch.png"><img src="../img/ekkopatch.png" alt="ekkopatch" width="100" height="100"></a>
                        <p>passiveのクールダウン<s>3秒</s>→5秒</p>
                        <p>　Q　往路ヒット時の反映率　<s>0.1魔力</s>→0.2魔力</p>
                        <p>　W　スタン効果時間　<s>2.25秒</s>→1.75秒</p>
                        <p>　R　ダメージ<s>200/350/500</s>→150/300/450</p>
                        <p>　　　反映率　<s>1.3魔力</s>→1.5魔力</p>
                    </li>
                </ul>
                opから一気に勝率50↓になったので初心者にはお勧めはしませんがちゃんと使えるようになれば強いのと僕のお気に入りなので紹介したいと思います。操作も簡単だしね。
                <br>どうしてお気に入りなのかというと中の人が遊戯王zexalの主人公である遊馬の声優さんだからです<span class="katto">かっとビングだ俺！</span><img src="../img/uma.png" alt="uma" width="100" height="100">あと調べたら実装日が僕の誕生日と一緒だった。
                <br>このパッチ6.11での変更で何が変わるのかというとRiotはTank運用のエッコは想定外でそういった想定外の運用を無くす傾向にあります。
                <br>Riotは想定する運用（ap carry）に戻そうとQのスキルの基礎ダメージの低下、その代わりap rateの上昇といった変更をしました。これでtank運用ではダメージが出なくなり、ap運用ではダメージがゲーム終盤において上昇するようになりました。（tankはもちろんapも序盤においてはダメージ減少）
                <br>またpassiveにも変更が加わり、クールダウンが3秒→5秒になりました。追加ダメージ、ms上昇、slow付与これらの回数が減ることで張り付き性能にダメージ性能、逃げ性能、すべてのダウン。せめてslow削除ぐらいでとどめてくれればと思う。
                <br>wのccも0.5秒だけ減りました。これに関してはそこまで大きな変更ではないと思います（スタンが発動することなくただのシールドになることが多いし）。
                <br>ultも基礎ダメージが減りap rateが上昇しましたが、これもapなら大事なダメージソースでしたがtank運用だとただのhp回復スキルと化しているのでそこまで気にしなくていいと思います。
                <br>以上によりap carryのエッコが強くなったかといえば答えはもちろんNoです。

                <ul class="products">
                    <li>
                        <a href="../img/ekko_lowest.png"><img src="../img/ekko_lowest.png" alt="ekko_lowest" width="100" height="100"></a>
                        <p>mid勝率46％（48/48）</p>
                        <p>top勝率49%（35/61）</p>
                        <p>jungle勝率45%（45/46）</p>
                        <p>2016/6/6時点</p>
                    </li>
                </ul>
                まぁこれも当たり前なことでスキルのベースダメージがすべてダウンしているので装備を揃える前にやられ続けて（やられ続けないにしても対面に対してよっぽどのことがないとアドヴァンテージが取れない）集団戦ではダメージもccもtankもできない、何もできなくなっているのが現状です。
                <br>ですのでこのページではTank運用のエコーについて説明していきます。
                <p id="why_tank_ekko">
                    <h2>どうしてtank運用なのか</h2></p>
                大きな要素としてeのcdの短さがあります　これによって常に相手に張り付くことが出来ます  またすべてのスキルがdisengageするためにあるかのようなスキルなのでgankが来ても余裕をもって対処することが出来ます　ap極だとultをする前に倒されることがよくあるのでこれを無くすためにtankにします
                <br>要約するとtankにするこで倒されにくくなりccをばら撒きつつadcに貼り付け続けるという点でtank運用にします 欠点として相手に
                <img src="../img/3065.png" alt="sv" width="50" height="50">を積まれるとダメージが出なくなるのでtank同士の殴り合いはよく負けます
                <br>戦いの律動がよく合うのでそれを活かすという意味でもtankが強いです
                <p id="skill">
                    <h2>スキルオーダー</h2></p>
                R→Q→E→Wで上げていってください
                <br>lv3でQを上げるのが個人的には好きですがgank来たら死にます
                <img src="../img/skill.png" alt="skill">
                <p id="mastery">
                    <h2>マスタリー</h2></p>
                今選択肢として2つあります
                <br>12/0/18 or 18/0/12です
                <br>戦いの律動は相手がtankな時に
                <br>不死者の握撃は相手がtankじゃない時に
                <br>基本的に敵の構成で変えましょう
                <br> <img src="../img/mastery.png" alt="mastery"   width="50%" height="50%">
                <br><img src="../img/mastery1.png" alt="mastery1" width="50%" height="50%">
                <p id="rune">
                    <h2>ルーン</h2></p>
                汎用ルーンで大丈夫でしょう

                <br>変えるなら赤にas　黄色にar or hp per 青にcd per or mr 紫にap flat で
                <br> 個人的にすべてのルーンでしていることがありおすすめしたいことがあります
                <br> 赤に1つだけcrit chanceを入れるということです
                <br>

                <p id="build">
                    <h2>ビルドパス</h2></p>
                </a>
                対面がadなら<img src="../img/3068.png" alt="sunfire" width="50" height="50">次が基本的に<img src="../img/tri.png" alt="tri" width="50" height="50">なのだが味方の構成でtankが自分しかいない場合は<img src="../img/3065.png" alt="sv" width="50" height="50">
                <br>靴は相手のccが濃いなら
                <img src="../img/3111.png" alt="mar" width="50" height="50">adが多いなら<img src="../img/3047.png" alt="ninja" 　width="50" height="50">
                <br>これらを対面や相手の構成味方の構成などを考慮して順番を考えてみてください
                <br>あまり無いですが相手の構成がap寄りの場合は
                <img src="../img/3065.png" alt="sv" width="50" height="50">の後に<img src="../img/2011.jpg" alt="abisyaru" width="50" height="50">を積んでもいいでしょう
                <br>上記だと少し不親切なので簡単な例を出します
                <br> 対面がadの場合
                <small> <img src="../img/2033.png" alt="flast" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/1082.png" alt="darkseal" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/3068.png" alt="sunfire" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/tri.png" alt="tri" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/3047.png" alt="ninja" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/3065.png" alt="sv" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/3143.png" alt="omen" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/3026.png" alt="ga" width="50" height="50" class="fon"></small>
                <br>対面がapの場合
                <small>  <img src="../img/2033.png" alt="flast" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/1082.png" alt="darkseal" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/3065.png" alt="sv" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/3068.png" alt="sunfire" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/3111.png" alt="mar" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/tri.png" alt="tri" width="50" height="50" class="fon">&gt;</small>
                <!--   <small> <img src="../img/3065.png" alt="sv" width="50" height="50" class="fon"><small>&gt;</small> -->
                <small> <img src="../img/3143.png" alt="omen" width="50" height="50" class="fon">&gt;</small>
                <small> <img src="../img/3026.png" alt="ga" width="50" height="50" class="fon"></small>
                <br>1靴はダークシール買ったあとに積める場面で適当に買ってください
                <p id="lane_fight">
                    <h2>レーンでの動き</h2> </p>
                基本的に相手がcs取りに来るタイミングでqを投げてハラスや牽制
                <br>lv2先行するかどうかは相手のジャングルが近い場所で始めていたらしない
                <br>遠いところで始めたならミニオンの群れにqを投げてlv2先行しましょう
                <br>先行することによって相手はcsが取れなくなりもし取ろうとしたならばe →q→aa→passiveからの追撃で大ダメージを与えることが出来ます
                <br>lv6以降は対面が不利な相手もしくは相手のジャングルがキャンプをしてきた場合以外は常にプッシュしてプレッシャーを与えるようにしてください
                <br>エコーの強みとしてultでのgank回避能力があるので相手のジャングルを惹きつけまたそれをいなすようなプレイができればベストです
                <br>自分もよくやる間違いなのですが味方がgankするとピングをならされてそれに合わせようとwを展開してもまず当たらないので素知らぬ顔をして普段通りに闘いながらも引き付けるようなそんなプレイをしてください
                <br>何が言いたいのかというとwでスタンさせないとgankが決まらないようなそんなプレイは止めましょう
                <ul class="products">
                    <li>
                        <video controls width="640" height="360">
                            <source src="../movie/first.mp4">
                        </video>
                        <strong>invade</strong>

                        <p>lv1のエコーは最強なのでガンガン行きましょう</p>
                        <p>フラストポーションを飲むのを忘れずに</p>

                    </li>
                </ul>

                <ul class="products">
                    <li>
                        <video controls width="640" height="360">
                            <source src="../movie/hukuro.mp4">
                        </video>
                        <strong>qの復路の当て方</strong>

                        <p>qの往路をまず当てeでパッシブのスタックを2にしつつqの復路が当たるように動いてパッシブ発動</p>
                    </li>
                </ul>
                <ul class="products">
                    <li>
                        <video controls width="640" height="360">
                            <source src="../movie/gank1.mp4">
                        </video>
                        <strong>lv6前にgankを受けた時の動き</strong>
                        <p>敵の動きに少しでも違和感があるなら下がる</p>
                        <p>間に合わない場合キルを狙えそうなら逆に狙っていく</p>
                        <p>低レベル帯のgankはミニオンの攻撃をもろに受けるのでキルを取りやすいです</p>
                        <p>この動画では無理ですが後ろ入りのgankは敵のジャングルにスキルを当ててパッシブを発動させると逃げやすいです</p>
                        <p></p>

                    </li>
                </ul>

                <ul class="products">
                    <li>
                        <video controls width="640" height="360">
                            <source src="../movie/gank2.mp4">
                        </video>
                        <strong>lv6以降にgankを受けた時の動き1</strong>
                        <p>まずqを当てて敵をスローにしultで下がる</p>
                        <p>このあとeをすると基本的には逃げられますが敵のamumuがflashをしてきたので捕まっています</p>
                        <p>wのタイミングは敵のccや自分の動きに合わせて打てばこんな感じになります</p>
                        <p>eは基本的に壁を抜けるために使いましょう</p>
                        <p>この例の欠点はultをただのblinkスキルとしか使ってないのでもう少し余裕を持って最初に戦っていても良かったかもしれません</p>
                    </li>
                </ul>
                <ul class="products">
                    <li>
                        <video controls width="640" height="360">
                            <source src="../movie/gank3.mp4">
                        </video>
                        <strong>lv6以降にgankを受けた時の動き2</strong>
                        <p>冷静に自分のヘルスとultのホログラムを確認しながらダメージを出していく</p>
                        <p>敵がホログラムと同じ位置にいることを確認した後にultをすればeasyです</p>
                    </li>
                </ul>
                <ul class="products">
                    <li>
                        <video controls width="640" height="360">
                            <source src="../movie/tryn.mp4">
                        </video>
                        <strong>lv2離れてcsも15負けてる時</strong>

                        <p>パッシブとqとultを上手いこと使えば倒せる</p>


                    </li>
                </ul>
                <p id="group_fight">
                    <h2>集団戦での動き</h2></p>
                基本的に敵のadcを狙うようにしてください
                <br>どんなに敵のccが厚くても届くのがエコーです
                <br>低レベル帯の集団戦では相手のadcが育っていない場面が多々あるので無理せずピールに回ると良い場面もあります
                <br>wの使い方として1に敵のadcの逃げ道
                <br>2にエコーから入る場合は敵前衛の少し後ろなどがあります
                <br>草むらなど敵の視界外からwを使った場合直前まで気づかれないのでこれを駆使してスタンを当てれるようにしましょう
                <br>ultは死にそうになったら使いましょう　当てようとしなくていいです　便利な逃げスキルと割りきりましょう

                <p id="counter">
                    <h2>対面チャンプによる不利有利</h2></p>
                見たいチャンピオンのアイコンをクリックしてください
                <br>
                <br>
                <table>
                    <tbody>
                        <tr>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-01"><img src="../img/mal.png" alt="mal" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-02"><img src="../img/fizz.png" alt="fizz" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-03"><img src="../img/wu.png" alt="wu" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-04"><img src="../img/tryn.png" alt="tryn" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-05"><img src="../img/nauti.png" alt="nauti" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-06"><img src="../img/riven.png" alt="riven" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-07"><img src="../img/nasus.png" alt="nasus" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-08"><img src="../img/akali.png" alt="akali" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-09"><img src="../img/kennen.png" alt="kennen" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-10"><img src="../img/heca.png" alt="heca" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge1">有利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-11"><img src="../img/aa.png" alt="aa" width="50" height="50"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td class="abc">
                                <span class="badge3">五分</span>
                                <a class="modal-syncer button-link" data-target="modal-content-12"><img src="../img/vlad.png" alt="vlad" width="50" height="50"></a>
                            </td>


                            <td class="abc">
                                <span class="badge3">五分</span>
                                <a class="modal-syncer button-link" data-target="modal-content-13"><img src="../img/gnar.png" alt="gnar" width="50" height="50"></a>
                            </td>

                          <td class="abc">
                                <span class="badge3">五分</span>
                                <a class="modal-syncer button-link" data-target="modal-content-14"><img src="../img/trundle.png" alt="trundle" width="50" height="50"></a>
                            </td>

                            <td class="abc">
                                <span class="badge3">五分</span>
                                <a class="modal-syncer button-link" data-target="modal-content-15"><img src="../img/yasuo.png" alt="yasuo" width="50" height="50"></a>
                            </td>

                            <td class="abc">
                                <span class="badge3">五分</span>
                                <a class="modal-syncer button-link" data-target="modal-content-16"><img src="../img/renek.png" alt="renek" width="50" height="50"></a>
                            </td>

                            <td class="abc">
                                <span class="badge3">五分</span>
                                <a class="modal-syncer button-link" data-target="modal-content-17"><img src="../img/garen.png" alt="garen" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge3">五分</span>
                                <a class="modal-syncer button-link" data-target="modal-content-18"><img src="../img/rumble.png" alt="rumble" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge3">五分</span>
                                <a class="modal-syncer button-link" data-target="modal-content-19"><img src="../img/illaoi.png" alt="illaoi" width="50" height="50"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td class="abc">
                                <span class="badge2">不利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-20"><img src="../img/irelia.png" alt="irelia" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge2">不利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-21"><img src="../img/cho.jpg" alt="cho" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge2">不利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-22"><img src="../img/panth.png" alt="panth" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge2">不利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-23"><img src="../img/tham.png" alt="tham" width="50" height="50"></a>
                            </td>
                            <td class="abc">
                                <span class="badge2">不利</span>
                                <a class="modal-syncer button-link" data-target="modal-content-24"><img src="../img/lulu.png" alt="tham" width="50" height="50"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <div id="modal-content-01" class="modal-content">
                <br> <img src="../img/mal.png" alt="mal" width="100" height="100" id="mal">
                <br>有利
                <br> malはウェーブ処理が遅いので常にプッシュしてるだけでcs差が出来ます
                <br> また相手はQ以外では遠距離スキルがないのでaaでcsを取りに来ます
                <br> そのタイミングに合わせてqを当てて2回あたった場合eで追撃していきます
                <br> 集団戦で役立たずにするために常にプッシュしましょう
                <br> なお相手のジャングルが上手い場合はこっちが鴨になる可能性が高いので常にピンクを置きgankの可能性について考慮してプレイしてください
                <br>プッシュしすぎて暇な場合や相手のジャングルの動向がわからない場合は川の中央、相手の森にワードをおいたりmidにgankしに行くのも忘れずに
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-02" class="modal-content">
                <br> <img src="../img/fizz.png" alt="fizz" width="100" height="100" id="fizz">
                <br>有利
                <br> nerfされてもう弱くなった　相手のeのダメージに当たらないようにeをすれば負けない
                <br><a id="modal-close" class="button-link">閉じる</a>
				</div>
				<div id="modal-content-21" class="modal-content">
                <br> <img src="../img/cho.jpg" alt="cho" width="100" height="100" id="cho">
                <br>不利
                <br> 基本的に1v1では勝てないのでgankを待つかレーンが終わったあとの集団戦で挽回しましょう。 相手がtankの場合でもapの場合でも勝てません。
                <br> 殴ってcsを取ることすら不可能になるのでfirst recallでダークシールとドランズリングを買ってapとmana negを確保して最低限のcsだけ取ります。
                <br>その後はスピリットビサージュ買ってレーンを耐えて集団戦に望みましょう。
                <br> 覚えておいて欲しいのは1v1では絶対に勝てないということと集団戦ではekkoの方が強いということです。
                <br> そもそもchoはレーンにて最強。基本的にgankが来なければ勝てるチャンプなんていない。
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-20" class="modal-content">
                <br> <img src="../img/irelia.png" alt="irelia" width="100" height="100" id=irelia>
                <br>eがどうしてもスタンになるので不利
                <br>プッシュをしても相手に有利になるだけなのでハーフラインを意識した立ち回りをする
                <br>qでスタックを2にしたからといってaaやeで突っ込むのは止めましょう　スタンさせられて相手のほうがダメージが出るようになります
                <br> 相手のqを見たらこっちもqをして行きも帰りも当ててaa挟んでパッシブ発動させてeで少し逃げると相手のwの効果が切れるのでそこからeで追撃などをしてリターンを取れればいいなぁ
                <br>当たり前だが相手がcsを取るのに使うqを先読みしてqを投げるのを忘れずに
                <br><img src="../img/1111.jpg" alt="warden" width="50" height="50">を初手で買うと良いかもしれない
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-12" class="modal-content">
                <br> <img src="../img/vlad.png" alt="vlad" width="100" height="100" id="vlad">
                <br>五分かやや有利
                <br>相手のサステインがおかしいのでちまちましてたら負けます
                <br>常にプッシュする気持ちでガンガン行きましょう
                <br>ゲージが溜まったqさえ当たらなければダメージ負けすることはないです
                <br>qが当たってからのeが理想的だがeからのqでも良い
                <br>相手のwを見てからこっちのwを展開しましょう
                <br>というかw使わせたらそのあとはガンガンいきましょう　絶対に勝てます
                <br>スペクターカウル買ったあとはすごく楽になります
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-13" class="modal-content">
                <br> <img src="../img/gnar.png" alt="gnar" width="100" height="100" id="gnar">
                <br>五分
                <br> メガじゃない時にqを避けてから仕掛ける
                <br> 一回仕掛けてgnarがeを使ったらその後15秒はガンガン行きましょうgnarのeのcdは18秒もあります
                <br>メーターが溜まりそうな時とメガの時はcsだけ取るようにしましょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-03" class="modal-content">
                <br> <img src="../img/wu.png" alt="wu" width="100" height="100" id="wu">
                <br>有利
                <br> eしてきたらeしてきたら内容にしましょう
                <br>基本的にこっちから当たるようにしましょう
                <br>相手のwのクールダウンは長いのでガンガン行こう
                <br>殴り合ったら勝てます
                <br> ピンクは常に1個持ちましょう2個持ってても全然いいです
                <br> サンファイア初手で良いと思います
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-04" class="modal-content">
                <br> <img src="../img/tryn.png" alt="tryn" width="100" height="100" id="tryn">
                <br>有利
                <br>序盤から常に勝てます
                <br>相手のfaryが溜まっていない時に戦えばeasyです
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-15" class="modal-content">
                <br> <img src="../img/yasuo.png" alt="yasuo" width="100" height="100" id="yasuo">
                <br>五分
                <br>こっちにミニオンがいる場合スキルが当たらないので注意が必要
                <br>基本的には相手が仕掛けてきたのを見てからqを投げ下がりながらPassiveを発動して逃げましょう
                <br>序盤は勝てますが終盤になるに連れて勝てなくなります
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-05" class="modal-content">
                <br> <img src="../img/nauti.png" alt="nauti" width="100" height="100" id="nauti">
                <br>有利
                <br>lv5からはw展開されようが勝てるようになります
                <br>lv5まではおとなしくしましょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-14" class="modal-content">
                <br> <img src="../img/trundle.png" alt="trundle" width="100" height="100" id="trundle">
                <br>五分
                <br>敵がe使ってw使おうがこっちがq使ってaaしてeしてパッシブ発動したら逃げれます
                <br>csも互いに取れるしつまらないレーンになるでしょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-06" class="modal-content">
                <br> <img src="../img/riven.png" alt="riven" width="100" height="100" id="riven">
                <br>有利
                <br>相手がqで近づいてきたらqで応戦して引きつつ相手のqが終わるかqが2回あたったらeして追撃
                <br>基本的にこっちから仕掛ける場合は必ず勝てる状況だけですヘルス交換だけではマイナスにしかならないので止めましょう
                <br>サンファイア積むまで五分なら勝てるでしょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-16" class="modal-content">
                <br> <img src="../img/renek.png" alt="renek" width="100" height="100" id="renek">
                <br>五分
                <br>lv１は有利
                <br>lv6では不利
                <br>lv6までにキル取れれば勝てる
                <br>取れないならセーフプレイをしましょう
                <br> 時間が立つに連れて弱くなるのでlv13ぐらいになったら勝てるでしょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-07" class="modal-content">
                <br> <img src="../img/nasus.png" alt="nasus" width="100" height="100" id="nasus">
                <br>有利
                <br>igniteもってエクスキューショナーコーリングを買う
                <br>プッシュは良くないのでできるだけプッシュしないようにqを当てる（相手のnasusがranged minionの後ろにいる時にダメージトレードするなど
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-08" class="modal-content">
                <br> <img src="../img/akali.png" alt="akali" width="100" height="100" id="akali">
                <br>有利
                <br>アカリはlv6以降ダメージが出るようになりますが3回だけしか出来ないしeの気の消費量などを考慮して戦いましょう
                <br>守ったら負ける！攻めろ！
                <br>pinkを常に2個買うつもりで
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-17" class="modal-content">
                <br> <img src="../img/garen.png" alt="garen" width="100" height="100" id="garen">
                <br>五分
                <br>サイレンスにあたったとしてもパッシブをすぐに発動できればダメージトレードで勝てます
                <br>ultとサイレンスだけ気をつければ負けはないでしょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-09" class="modal-content">
                <br> <img src="../img/kennen.png" alt="kennen" width="100" height="100" id="kennen">
                <br>有利
                <br>相手のwのcdは長いので使ったら攻める
                <br>パッシブ付きのaaとqを避ければ勝てる　僕は0/5/0からソロキルしてそのあと12/7/6で勝った
                <br>持続的な展開には弱いのでそこを突く
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-10" class="modal-content">
                <br> <img src="../img/heca.png" alt="heca" width="100" height="100" id="heca">
                <br>有利
                <br>lvが上がるに連れて楽になっていく
                <br>基本的にPassiveを発動させて逃げるヒットアンドアウェイをすれば勝てるでしょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-22" class="modal-content">
                <br> <img src="../img/panth.png" alt="panth" width="100" height="100" id="panth">
                <br>不利
                <br>序盤は絶対に勝てないのでaaでcsを無理に取りに行かずにqでcsを最低限取る
                <br>panthは終盤にかけて弱体化していくので勝てるレベルを見極めましょう
                <br>個人的にはgankがあれば絶対に勝てるし一回キル取れればもう負けることはないと思います
                <br>キルが取れないならlv6までは土下座しながらそれ以降仕掛けてどんな感触か確かめながらダメージトレード出来るレベルを模索しましょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-11" class="modal-content">
                <br> <img src="../img/aa.png" alt="aa" width="100" height="100" id="aa">
                <br>有利
                <br>相手は多分e上げなのでeにさえ当たらなければ殴りあっても勝てる
                <br>ult使ってる時だけ引きましょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-23" class="modal-content">
                <br> <img src="../img/tham.png" alt="tham" width="100" height="100" id="tham">
                <br>不利
                <br>一対一でthamに勝てるチャンプ自体がそもそもいないのでcsだけ取りましょう
                <br>タワーに押し付けられると負けるのでそうならないように調整しましょう
                <br>基本的に相手から仕掛けてきても逃げることは容易なので放っときましょう
                <br>qに当たらないようにミニオンの後ろにいればまず負けないでしょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-24" class="modal-content">
                <br> <img src="../img/lulu.png" alt="lulu" width="100" height="100" id="lulu">
                <br>不利
                <br>低レベルはまず勝てません
                <br>スピリットヴィサージュとサンファイアとアイスボーンガントレット買ったら余裕で勝てるようになりますがそれ以前は悪夢でした
                <br>スペクターカウル買ってアイスボーンで良かったかもしれません
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-18" class="modal-content">
                <br> <img src="../img/rumble.png" alt="rumble" width="100" height="100" id="rumble">
                <br>五分
                <br>lv2で仕掛けたら負けたのでゲージ溜まってる時に低レベル帯で殴りあうと辛い模様です
                <br>lv6以降は勝てるので相手が何かしらスキルを使ったあとに仕掛けたら勝てます
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
                <div id="modal-content-19" class="modal-content">
                <br> <img src="../img/illaoi.png" alt="illaoi" width="100" height="100" id="illaoi">
                <br>五分
                <br>eに当たらないように常にミニオンを盾にする
                <br>出来ない状況なら無理にcsを取りに行かずにqだけで取るかeで反応できる距離を保つ
                <br>もしeにあたったとしてもヘルスがある状態ならば触手に当たらないように攻撃を仕掛けたりしましょう
                <br>基本的にキルは互いに取れない状態になると思うので大人しくジャングルを待ちましょう
                <br><a id="modal-close" class="button-link">閉じる</a>
                </div>
            </div>
            <!-- #contents-->

            <div id="sidebar">

                <div class="kategori">
                    <ul>
                        カテゴリー
                        <hr>
                        <li><a href="">エコー</a></li>
                        <li><a href="/trunk/panth/panth.php">パンテオン</a></li>
                       <!--  <li><a href="">雑記</a></li> -->
                       <!--  <li><a href="">チャンピオンガイド</a></li> -->
                       <!--  <li><a href="">メタ</a></li> -->
                       <!--  <li><a href="">パッチノート</a></li> -->
                    </ul>
                </div>
            </div>
            <!-- #sidebar -->

        </div>
        <!-- #main -->

        <div id="footer">Copyright 2016, feederjp.com</div>

    </div>
    <!-- #container -->
    <div id="back-to-top" style="position:fixed;right:15px;bottom:15px"><a href="#"><img src="../img/pagetop.png"></a></div>
    <script>
    $(function() {
        // #back-to-topを消す
        $('#back-to-top').hide();

        // スクロールが十分されたら#back-to-topを表示、スクロールが戻ったら非表示
        $(window).scroll(function() {
            if ($(this).scrollTop() > 700) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        // #back-to-topがクリックされたら上に戻る
        $('#back-to-top a').click(function() {
            $('body').animate({
                scrollTop:0
            }, 500);
            return false;
        });
    });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="modal-multi.js"></script>
</body>

</html>
