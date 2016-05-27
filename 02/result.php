

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="form_testcss.css">
    <title>お問い合わせ確認</title>
</head>
<body>

<form action="contact.php" method="post">


    <!--題名-->
    <div id="boxA">
    <p><h1>お問い合わせ確認</h1></p>
</div>




<!-- 名前-->


<div id="wrappe">

<table class="form"
table-layout:fixed; style="width:800px;height:100px;"  >
    <tr>
<th scope="row" width="250">名前：</th><td>
<?php
$name = $_POST['name1'] . ' ' . $_POST['name2'];
echo  $name . "<br>";?>
</td>


</table>
<!--性別-->
<table
table-layout:fixed; style="width:800px;height:100px;">
    <tr>
<th scope="row" width="250">性別：
<td>    <?php
if(isset($_POST["sex"])){
$sex = $_POST["sex"];
}else{
}
echo  $sex . "<br>";?></td>
</tr>

</table>


<!--住所-->
<table
table-layout:fixed;  style="width:800px;height:100px;">
<tr>
<th scope="row" width="250">郵便番号:</th><td><?php
$addressnum = $_POST["addressnum"] . "<br>";
echo  $addressnum . "<br>";?></td>
    </tr>
<tr>
<th scope="row">住所：</th><td><?php

$address =  $_POST["address"] . "<br>";
 echo  $address . "<br>";?></td></tr>



</table>

<!--電話暗号-->
<table
table-layout:fixed; style="width:800px;height:100px;">
<tr>
    <th scope="row" width="250">電話番号：</th><td><?php
    $phone =  $_POST["phone1"] .  $_POST["phone2"] . $_POST["phone3"] . "<br>";
    echo  $phone . "<br>";?></td>
    </tr>

</table>

<!--メールアドレス-->
<table
table-layout:fixed; style="width:800px;height:100px;">
<tr>
    <th scope="row" width="250">メールアドレス：</th><td><?php
    $mail = $_POST["mail1"] . "@" . $_POST["mail2"] . "<br>";

    echo  $mail . "<br>";?></td></tr>

</table>


<!--　どこで知ったか-->
<table
table-layout:fixed; style="width:800px;height:100px;">
<tr>
<th scope="row" width="250">どこで知りましたか？</th>
<td>
    <?php
    foreach($_POST["cbx"] as $key => $value){
        echo $value . " " ;
    }
    echo  "<br>";?>
</td>
</tr>


</table>


<!--質問カテゴリ-->
<table
table-layout:fixed; style="width:800px;height:100px;">
<tr>
    <th scope="row" width="250"> 質問カテゴリ</th>
<td width="550"><?php
echo $_POST["category"] . "<br>";
?>
</td>
</tr>
</table>



<!--質問-->
<table
table-layout:fixed; style="width:800px;height:100px;">
<tr>
    <th scope="row" width="250">質問：</th>
    <td width="550">
<?php
echo $_POST["comments"] . "<br>";
 ?>


</td>
</tr>
</table>





</div>
</form>

</body>
</html>

    <input type="submit"　>
    <?php
$name = $_POST['name1'] . ' ' . $_POST['name2'];
    // ファイルのパスを変数に格納
    $filename = 'form.txt';

    // fopenでファイルを開く（'w'は上書きモードで開く）
    $fp = fopen($filename, 'a+');

    // fwriteで文字列を書き込む
    fwrite($fp, $_POSt["name"]);

    // ファイルを閉じる
    fclose($fp);

    // ファイルを出力する


    if (isset($_POST['message'])) {

        if ($_POST['message'] != "") {

            $fp = fopen("form.txt", "a+");
            fwrite($fp, $_POST['message']);
            fclose($fp);

        }

    }



    ?>
