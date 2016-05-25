<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="form_testcss2.css">
    <title>お問い合わせ</title>
</head>
<body>

<form action="result.php" method="post">


    <!--題名-->
    <div id="boxA">
    <p><h1>お問い合わせ</h1></p>
</div>




<!-- 名前-->
<div id="wrappe">

<table class="form"
table-layout:fixed; style="width:800px;height:100px;"  >
    <tr>
<th scope="row" width="250"><label for="name">姓：<span>必須</span></label></th>


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
