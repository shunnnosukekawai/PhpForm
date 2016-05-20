<?php
//名前
$name1 = $_GET["name1"];
$name2 = $_GET["name2"];
echo $name1 . $name2 . "<br>";
//性別 ボタン２回で消えるようにする
if(isset($_GET["sex"])){
echo $_GET["sex"];
}else{
    echo "";
}
//住所
echo $_GET["addressnum"] . "<br>";
echo $_GET["address"] . "<br>";


//電話番号
echo $_GET["phone1"] .  $_GET["phone2"] . $_GET["phone3"] . "<br>";

//メールアドレス
if(isset($_GET["mail1"] ["mail2"])){
echo $_GET["mail1"] . "@";
echo $_GET["mail2"] . "<br>";
}else{
    echo "";
}
//どこで知ったか
foreach($_GET["cbx"] as $key => $value){
    echo $value . " " ;
}
echo  "<br>";
//質問カテゴリ
echo $_GET["category"] . "<br>";
//質問内容""
echo $_GET["comments"] . "<br>";
 ?>
