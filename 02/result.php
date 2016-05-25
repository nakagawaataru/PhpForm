<?php
/*エラー回避*/
error_reporting(E_ALL & ~E_NOTICE);
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $rdo = $_POST["rdo"];
    $adress = $_POST["adress"];
    $tell = $_POST["tell"];
    $tell2 = $_POST["tell2"];
    $tell3 = $_POST["tell3"];
    $mail = $_POST["mail"];
    $mail2 = $_POST["mail2"];
    $cbx = $_POST["cbx"];
    $slt = $_POST["slt"];
    $question = $_POST["question"];
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "test.css">
<title>送信確認画面</title>
<meta charset = "utf-8">

<body>

    <div id = "flame">

        <h1>送信確認画面</h1>

        <div id = "name_left">姓名</div>
        <div id = "name_right">
            <?php echo $surname . '&nbsp;&nbsp;' . $name; ?>
        </div>
        <div class = "clear_box"></div>

        <div id = "name_left">性別</div>
        <div id = "name_right">
            <?php

            /*男性*/
            if ($_POST["rdo"] == 0) {
                print "男性";
                }

           /*女性*/
           elseif ($_POST["rdo"] == 1) {
                 print "女性";
                }

             /*不明*/
            else {
                print "不明";
            }

         ?>

         </div>
            <div class = "clear_box"></div>

            <div id = "name_left">住所</div>
            <div id = "name_right">
                <?php echo $adress; ?>
            </div>
            <div class = "clear_box"></div>

            <div id = "name_left">電話番号</div>
            <div id = "name_right">
                <?php echo $tell . "-" . $tell2 . "-" . $tell3; ?>
            </div>
                <div class = "clear_box"></div>

                <div id = "name_left">メールアドレス</div>
                <div id = "name_right">
                    <?php echo $mail . "@" . $mail2; ?>
                </div>
                    <div class = "clear_box"></div>

                    <div id = "name_left">どこで知りましたか</div>
                    <div id = "name_right">
                        <?php
                            if(isset($_POST["cbx"])){
                                /*変数$cbxに格納*/
                                $cbx = $_POST["cbx"];
                            }
                            if(isset($cbx[0])){
                                print "雑誌";
                            }
                            if(isset($cbx[1])){
                                print "インターネット";
                            }
                            if(isset($cbx[2])){
                                print "学校";
                            }
                         ?>
                     </div>
                     <div class = "clear_box"></div>

                     <div id = "name_left">質問カテゴリ</div>
                     <div id = "name_right">
                         <?php
                            if ($_POST["slt"] == "3") {
                                print "クレーム";
                            }
                            elseif ($_POST["slt"] == "4") {
                                print "相談";
                            }
                            elseif ($_POST["slt"] == "5") {
                                print "感想";
                            }
                            else {
                                print "その他";
                            }
                            ?>
                        </div>
                        <div class = "clear_box"></div>

                        <div id = "name_left">質問内容</div>
                        <div id = "name_right">
                            <div id = "a">
                            <?php print $question; ?>
                        </div>
                        </div>
                        <div class = "clear_box"></div>
</body>
</head>
</html>
