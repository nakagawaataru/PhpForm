<meta charset="utf-8">
<link rel = "stylesheet" href = "test.css">
<body>
<div id="flame">

<form action = "contact.phpresult.php" method="post">

    <h1>お問い合わせ</h1>
    <div id = "name_left">姓<div id=br>必須</div></div>
    <div id = "name_right">
        <input type="text" name="k" placeholder = "例）山田" value="" required="required">
        <div id="errormsg_姓" class="mfp_err"></div>
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">名<div id=br>必須</div></div>
    <div id = "name_right">
        <input type="text" name="n" placeholder = "例）太郎" value="" required="required">
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">性別<div id=br>必須</div></div>
    <div id = "name_right">
    <input type="radio" name="rdo" value="男">男性
    <input type="radio" name="rdo" value="女">女性
    <input type="radio" name="rdo" value="不明">不明
    </div>
    <div class="clear_box"></div>


    <div id = "name_left">住所<div id=br>必須</div></div>
    <div id = "name_right">
    <input type="text" name="adress" placeholder = "例）東京都〇〇区〇-〇-〇" value=""　required="required">
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">電話番号<div id=br>必須</div></div>
    <div id = "name_right">
    <input type="text" name="tell" placeholder = "例）090" value="" required="required">-

    <input type="text" name="tell2" placeholder = "例）000" value="" required="required">-

    <input type="text" name="tell3" placeholder = "例）000" value="" required="required">
    </div>

    <div id = "name_left">メールアドレス<div id=br>必須</div></div>
    <div id = "name_right">
    <input type="text" name="mail" placeholder = "例）test" value="" required="required">@
    <input type="text" name="mail2" placeholder = "例）gmail.com" value="" required="required">
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">どこで知ったか<div id=br>必須</div></div>
    <div id = "name_right">
    <input type="checkbox" name="cbx" value="雑誌">雑誌
    <input type="checkbox" name="cbx" value="インターネット">インターネット
    <input type="checkbox" name="cbx" value="学校">学校
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">質問のカテゴリ<div id=br>必須</div></div>
    <div id = "name_right">
    <select name="slt">
        <option>クレーム</option>
        <option>相談</option>
        <option>感想</option>
        <option>その他</option>
    </select>
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">質問内容<div id=br>必須</div></div>
    <div id = "name_right">
    <textarea rows="2" cols="40" name="question" placeholder = "例）パソコンが壊れました" value="" required="required"></textarea>
    </div>
    <div class="clear_box"></div>

    <input type="submit">
    <input type="reset" >

</form>
</div>
</body>
