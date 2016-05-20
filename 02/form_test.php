<form action = "contact.phpresult.php" method="post">
<head>
<center>
    <span style="font-size:18px;">
    <h1>お問い合わせ</h1>
    <link rel = "stylesheet" href = "test.css">
    姓:<input type="text" name="k" ><br>
    名:<input type="text" name="n"><br>

    男性:<input type="radio" name="rdo" value="男">
    女性:<input type="radio" name="rdo" value="女">
    不明:<input type="radio" name="rdo" value="不明"><br>
    住所:<input type="text" name="adress" ><br>
    電話番号:<input type="text" name="tell" >-<input type="text" name="tell2" >-<input type="text" name="tell3" ><br>
    メールアドレス:<input type="text" name="mail" >@<input type="text" name="mail2" ><br>
    どこで知ったか:<input type="checkbox" name="cbx" value="雑誌">雑誌
    <input type="checkbox" name="cbx" value="インターネット">インターネット
    <input type="checkbox" name="cbx" value="学校">学校<br>
    質問のカテゴリ:<select name="slt">
        <option>クレーム</option>
        <option>相談</option>
        <option>o</option>
        <option>ab</option>
    </select><br>
    質問内容:<textarea rows="4" cols="40" name="question"></textarea><br>

    <input type="submit">
    <input type="reset" >
</span>
</center>
</head>
</form>
