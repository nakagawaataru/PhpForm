<form action = "contact.phpresult.php" method="post">

<center>
    <span style="font-size:18px;">
    <h1>お問い合わせ</h1>

    <link rel = "stylesheet" href = "test.css">
    <div>姓:<input type="text" name="k" ></div>
    <div>名:<input type="text" name="n"></div>

    性別:<input type="radio" name="rdo" value="男">男性
    <input type="radio" name="rdo" value="女">女性:
    <input type="radio" name="rdo" value="不明">不明<br>
    <div>住所:<input type="text" name="adress" ><br></div>
    <div>電話番号:<input type="text" name="tell" >-<input type="text" name="tell2" >-<input type="text" name="tell3" ><br></div>
    <div>メールアドレス:<input type="text" name="mail" >@<input type="text" name="mail2" ><br></div>
    どこで知ったか:<input type="checkbox" name="cbx" value="雑誌">雑誌
    <input type="checkbox" name="cbx" value="インターネット">インターネット
    <input type="checkbox" name="cbx" value="学校">学校<br>
    質問のカテゴリ:<select name="slt">
        <option>クレーム</option>
        <option>相談</option>
        <option>感想</option>
        <option>その他</option>
    </select><br>
    質問内容:<textarea rows="4" cols="40" name="question"></textarea><br>

    <input type="submit">
    <input type="reset" >

</span>
</center>
</form>
