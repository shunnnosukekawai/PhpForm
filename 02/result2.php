<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="form_testcss2.css">
    <title>お問い合わせ確認</title>
</head>
<body>

<form action="contact2.php" method="post">


    <!--題名-->
    <div id="boxA">
    <p><h1>お問い合わせ確認</h1></p>
</div>




<!-- 名前-->
<div id="wrappe">

<table class="form"
table-layout:fixed; style="width:800px;height:100px;"  >
    <tr>
<th scope="row" width="250">姓：</th><td><?php echo h($name);?>
</td>
</tr>


<td><input type="textbox" name="name1" required　></td>
</tr>
<tr>
    <th scope="row" width="250">名：<span>必須</span></th>
    <td width="550"><input type="textbox" name="name2" required></td>
</tr>

</table>
<!--性別-->
<table
table-layout:fixed; style="width:800px;height:100px;">
    <tr>
<th scope="row" width="250">性別：<span>必須</span><th>
<td width="550">男性  <input type="radio" name="sex" value="男性"　required>女性   <input type="radio" name="sex" value="女性"　required>不明   <input type="radio" name="sex" value="不明"　required></td>
</tr>

</table>


<!--住所-->
<table
table-layout:fixed;  style="width:800px;height:100px;">
<tr>
<th scope="row" width="250">郵便番号：<span>必須</span><th><td width="550"><input type="textbox" name="addressnum"　required></td></tr>
    <tr>
<th scope="row">住所：<span>必須</span><th><td width="550"><input type="textbox" name="address" required　></td></tr>



</table>

<!--電話暗号-->
<table
table-layout:fixed; style="width:800px;height:100px;">
<tr>
    <th scope="row" width="250">電話番号：<span>必須</span><th><td width="550"><input type="textbox" name="phone1"　class="phone" required>-<input type="textbox" name="phone2" class="phone" required>-<input type="textbox" name="phone3" class="phone" required></td></tr>

</table>

<!--メールアドレス-->
<table
table-layout:fixed; style="width:800px;height:100px;">
<tr>
    <th scope="row" width="250">メールアドレス：<span>必須</span><th><td width="550"><input type="textbox" name="mail1" required>@<input type="textbox" name="mail2"></td></tr>

</table>


<!--　どこで知ったか-->
<table
table-layout:fixed; style="width:800px;height:100px;">
<tr>
<th scope="row" width="250">どこで知りましたか？<span>必須</span></th>
<td width="550">
テレビ：<input type="checkbox" name="cbx[]" value="テレビ" >

インターネット：<input type="checkbox" name="cbx[]" value="インターネット">

雑誌：<input type="checkbox" name="cbx[]" value="雑誌">

友達：<input type="checkbox" name="cbx[]" value="友達">
</td>
</tr>


</table>


<!--質問カテゴリ-->
<table
table-layout:fixed; style="width:800px;height:100px;">
<tr>
    <th scope="row" width="250"> 質問カテゴリ</th>
<td width="550"><select name="category">
    <option>インターネット回線</option>
    <option>キャンペーン</option>
</select>
</td>
</tr>
</table>



<!--質問-->
<table
table-layout:fixed; style="width:800px;height:100px;">
<tr>
    <th scope="row" width="250">質問：</th>
    <td width="50">
<textarea cols="30" rows="5"   name="comments" style="width:500px;">


</textarea>
</td>
</tr>
</table>

    <input type="submit"　>





</div>
</form>
</body>
</html>










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
