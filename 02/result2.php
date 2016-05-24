<?php
//名前
$name1 = $_POST["name1"];
$name2 = $_POST["name2"];
echo $name1 . $name2 . "<br>";
//性別 ボタン２回で消えるようにする
if(isset($_POST["sex"])){
echo $_POST["sex"];
}else{
    echo "";
}
//住所
echo $_POST["addressnum"] . "<br>";
echo $_POST["address"] . "<br>";


//電話番号
echo $_POST["phone1"] .  $_POST["phone2"] . $_POST["phone3"] . "<br>";

//メールアドレス
if(isset($_POST["mail1"] ["mail2"])){
echo $_POST["mail1"] . "@";
echo $_POST["mail2"] . "<br>";
}else{
    echo "";
}
//どこで知ったか
foreach($_POST["cbx"] as $key => $value){
    echo $value . " " ;
}
echo  "<br>";
//質問カテゴリ
echo $_POST["category"] . "<br>";
//質問内容""
echo $_POST["comments"] . "<br>";
 ?>
