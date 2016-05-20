<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="form_testcss.css">
    <title>お問い合わせ</title>
</head>
<body>
    <div id="wrapper">
<form action="form_test2.php" method="post">

    <!--題名-->
    <p><h1>お問い合わせ</h1></p>
<!-- 名前-->
<pre>姓  <input type="textbox" name="name1"　></pre>
<pre>名  <input type="textbox" name="name2"　></pre>
<!--性別-->
<p>性別
男性   <input type="radio" name="sex" value="男性"　>女性   <input type="radio" name="sex" value="女性"　>不明   <input type="radio" name="sex" value="不明"　></p>
<!--住所-->
<p>郵便番号：<input type="textbox" name="addressnum"　></p>
<p>住所：<input type="textbox" name="address"　></p>

<!--電話暗号-->
<p>電話番号<input type="textbox" name="phone1">
<input type="textbox" name="phone2"><input type="textbox" name="phone3">
<!--メールアドレス-->
<p>メールアドレス<input type="textbox" name="mail1">@<input type="textbox" name="mail2"></p>

<!--　どこで知ったか-->
<p>どこで知りましたか？</p>
<p>テレビ：<input type="checkbox" name="cbx[]" value="テレビ"></p>
<p>インターネット：<input type="checkbox" name="cbx[]" value="インターネット"></p>
<p>雑誌：<input type="checkbox" name="cbx[]" value="雑誌"></p>
<p>友達：<input type="checkbox" name="cbx[]" value="友達"></p>

<!--質問カテゴリ-->
<div><select name="category">
    <option>インターネット回線</option>
    <option>キャンペーン</option>
</select>

<!--質問-->

<p>質問：</p>
<textarea cols="30" rows="5" name="comments">


</textarea>

    <p><input type="submit"　></p>



</div>
</div>
</form>
</body>
</html>
