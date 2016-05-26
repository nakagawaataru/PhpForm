<!--文書型宣言-->
<!DOCTYPE html>
<html>
<head>
<!--HTML文書の文字コードがutf-8であることを示す-->
<meta charset="utf-8">
<!--link要素を用いて、別ファイルとして用意したスタイルシートと連携-->
<link rel = "stylesheet" href = "test.css">
<!--タブに表示-->
<title>お問い合わせ</title>
</head>

<body>
    <!--cssで指定-->
<div id = "flame">
    <!--送信先と送信形式の指定-->
<form action = "result.php" method="post">
    <!--見出し-->
    <h1>お問い合わせ</h1>
    <p>以下のフォームにご入力の上、「送信」ボタンをクリックしてください。</p>

    <div id = "name_left">姓<div id = br>必須</div></div>
    <div id = "name_right">

        <!--placeholderはダミーテキスト　薄グレーなやつ
        required="required"は値を入力せずに送信を押したときにエラーメッセージを出力する-->
        <input type="text" name="surname" placeholder = "例）山田" value="" required="required">
    </div>
    <!--スタイルシートで定義したクラスを適用-->
    <div class="clear_box"></div>

    <div id = "name_left">名<div id = br>必須</div></div>
    <div id = "name_right">
        <input type="text" name = "name" placeholder = "例）太郎" value="" required="required">
    </div>
    <!--cssで指定-->
    <div class="clear_box"></div>

    <div id = "name_left">性別<div id=br>必須</div></div>
    <div id = "name_right">
    <input type="radio" name = "rdo" value = "0"  checked id = "m">
    <!--labelでもできるようにした-->
    <label for = "m">男性</label>
    <input type = "radio" name = "rdo" value = "1" id = "w">
    <label for = "w">女性</label>
    <input type = "radio" name = "rdo" value = "2" id = "u">
    <label for= "u">不明</label>
    </div>
    <div class = "clear_box"></div>

    <div id = "name_left">住所<div id = br>必須</div></div>
    <div id = "name_right">
    <input type = "text" name = "adress" placeholder = "例）東京都〇〇区〇-〇-〇" value = "" required = "required">
    </div>
    <div class = "clear_box"></div>

    <div id = "name_left">電話番号<div id = br>必須</div></div>
    <div id = "name_right">
        <!--patternで数字と何文字か指定-->
    <input type = "text" pattern="^[0-9]{3,4}" name = "tell" placeholder = "例）090" value = "" required = "required" >-

    <input type = "text" pattern="^[0-9]{3,4}" name = "tell2" placeholder = "例）000" value = "" required = "required">-

    <input type = "text" pattern="^[0-9]{3,4}" name = "tell3" placeholder = "例）000" value = "" required = "required">
    </div>
    <div class = "clear_box"></div>

    <div id = "name_left">メールアドレス<div id = br>必須</div></div>
    <div id = "name_right">
        <!--patternで半角英数字指定-->
    <input type = "text" pattern="^[0-9A-Za-z]+$" name = "mail" placeholder = "例）test" value = "" required = "required">@
    <input type = "text" pattern="^[0-9A-Za-z-.]+$" name = "mail2" placeholder = "例）gmail.com" value = "" required = "required">
    </div>
    <div class = "clear_box"></div>

    <div id = "name_left">どこで知ったか(複数可)</div>
    <div id = "name_right">
    <input type = "checkbox" name = "cbx[0]" id = "c" value = "雑誌">
    <label for = "c">雑誌</label>
    <input type = "checkbox" name="cbx[1]" id = "b" value = "インターネット">
    <label for = "b">インターネット</label>
    <input type = "checkbox" name="cbx[2]" id = "x" value = "学校" >
    <label for = "x">学校</label>
    </div>
    <div class = "clear_box"></div>

    <div id = "name_left">質問カテゴリ<div id = br>必須</div></div>
    <div id = "name_right">
    <select name = "slt">
        <option value = "3">クレーム</option>
        <option value = "4">相談</option>
        <option value = "5">感想</option>
        <option value = "6">その他</option>
    </select>
    </div>
    <div class = "clear_box"></div>

    <div id = "name_left">質問内容<div id = br>必須</div></div>
    <div id = "name_right">
    <!--rowsは行数、colsは文字数-->
    <textarea rows = "2" cols = "40" name = "question"
    placeholder = "例）パソコンが壊れました" value = "" required = "required"></textarea>
    </div>
    <div class = "clear_box"></div>

    <input type = "submit">
    <input type = "reset" >

</form>
</div>
</body>
</html>
