<meta charset="utf-8">
<link rel = "stylesheet" href = "test.css">
<body>
<div id="flame">

<form action = "contact.phpresult.php" method="post">

    <h1>お問い合わせ</h1>

    <div id = "name_left">姓</div>
    <div id = "name_right">
        <input type="text" name="k" >
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">名</div>
    <div id = "name_right">
        <input type="text" name="n" >
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">性別</div>
    <div id = "name_right">
    <input type="radio" name="rdo" value="男">男性
    <input type="radio" name="rdo" value="女">女性
    <input type="radio" name="rdo" value="不明">不明
    </div>
    <div class="clear_box"></div>


    <div id = "name_left">住所</div>
    <div id = "name_right">
    <input type="text" name="adress" >
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">電話番号</div>
    <div id = "name_right">
    <input type="text" name="tell" >-
    <input type="text" name="tell2" >-
    <input type="text" name="tell3" >
    </div>

    <div id = "name_left">メールアドレス</div>
    <div id = "name_right">
    <input type="text" name="mail" >@
    <input type="text" name="mail2" >
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">どこで知ったか</div>
    <div id = "name_right">
    <input type="checkbox" name="cbx" value="雑誌">雑誌
    <input type="checkbox" name="cbx" value="インターネット">インターネット
    <input type="checkbox" name="cbx" value="学校">学校
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">質問のカテゴリ</div>
    <div id = "name_right">
    <select name="slt">
        <option>クレーム</option>
        <option>相談</option>
        <option>感想</option>
        <option>その他</option>
    </select>
    </div>
    <div class="clear_box"></div>

    <div id = "name_left">質問内容</div>
    <div id = "name_right">
    <textarea rows="2" cols="40" name="question"></textarea>
    </div>
    <div class="clear_box"></div>

    <input type="submit">
    <input type="reset" >

</form>
</div>
</body>
