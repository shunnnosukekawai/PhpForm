<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="form_testcss.css">
    <title>お問い合わせ</title>
</head>
<body>

<form action="result.php" method="post">


    <!--題名-->
    <div id="boxA">
    <p><h1>お問い合わせ</h1></p>
</div>
<!-- 名前-->
<div id="wrapper">

<p class="name"><label for="name">姓：<span>必須</span></label>
<input type="textbox" name="name1"　></p>
<p>名：<span>必須</span><input type="textbox" name="name2"></p>
<!--性別-->
<div class="sex1">
<p>性別：<span>必須</span>
男性  <input type="radio" name="sex" value="男性"　>女性   <input type="radio" name="sex" value="女性"　>不明   <input type="radio" name="sex" value="不明"　></p>
<!--住所-->
<p>郵便番号：<span>必須</span><input type="textbox" name="addressnum"　></p>
<p>住所：<span>必須</span><input type="textbox" name="address"　></p>
</div>
<!--電話暗号-->
<p>電話番号：<span>必須</span><input type="textbox" name="phone1"　class="phone">-<input type="textbox" name="phone2" class="phone">-<input type="textbox" name="phone3" class="phone"></p>
<!--メールアドレス-->
<p>メールアドレス：<span>必須</span><input type="textbox" name="mail1">@<input type="textbox" name="mail2"></p>

<!--　どこで知ったか-->
<p>どこで知りましたか？<span>必須</span></p>
<p>テレビ：<input type="checkbox" name="cbx[]" value="テレビ"></p>
<p>インターネット：<input type="checkbox" name="cbx[]" value="インターネット"></p>
<p>雑誌：<input type="checkbox" name="cbx[]" value="雑誌"></p>
<p>友達：<input type="checkbox" name="cbx[]" value="友達"></p>

<!--質問カテゴリ-->
<p> 質問カテゴリ</p>
<div><select name="category">
    <option>インターネット回線</option>
    <option>キャンペーン</option>
</select>

<!--質問-->

<p>質問：</p>
<textarea cols="30" rows="5"   name="comments" style="width:500px;">


</textarea>

    <p><input type="submit"　></p>




</div>
</div>

</form>
</body>
</html>
