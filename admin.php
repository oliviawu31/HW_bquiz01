<?php include_once "api/db.php";
session_start();

if (!isset($_SESSION['login'])) {
    to("index.php");
    echo "請從登入頁登入<a href='index.php?do=login'>管理登入</a>";
    exit();
}
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>卓越科技大學校園資訊系統</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
    <iframe style="display:none;" name="back" id="back"></iframe>
    <div id="main">
        <a title="<?= $Title->find(['sh' => 1])['text']; ?>" href="index.php">
            <div class="ti"
                style="background:url('./upload/<?= $Title->find(['sh' => 1])['img']; ?>'); background-size:cover;">
            </div>
            <!--標題-->
        </a>
        <div id="ms">
            <div id="lf" style="float:left; ">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <span class="t botli">後台管理選單</span>
                    <a style="text-decoration: none; " href="?do=title">
                        <div class="main_menu">網站標題管理 </div>
                    </a>
                    <a style="text-decoration: none; " href="?do=ad">
                        <div class="main_menu">動態文字廣告管理 </div>
                    </a>
                    <a style="text-decoration: none; " href="?do=mvim">
                        <div class="main_menu">動畫圖片管理 </div>
                    </a>
                    <a style="text-decoration: none; " href="?do=image">
                        <div class="main_menu">輪播圖管理 </div>
                    </a>
                    <a style="text-decoration: none; " href="?do=total">
                        <div class="main_menu">進站總人數管理 </div>
                    </a>
                    <a style="text-decoration: none; " href="?do=bottom">
                        <div class="main_menu">頁尾版權資料管理 </div>
                    </a>
                    <a style="text-decoration: none; " href="?do=news">
                        <div class="main_menu">最新消息資料管理 </div>
                    </a>
                    <a style="text-decoration: none; " href="?do=admin">
                        <div class="main_menu">管理者帳號管理 </div>
                    </a>
                </div>
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 :
                        1 </span>
                </div>
            </div>
            <?php
            $do = $_GET['do'] ?? 'main';
            $file = "./backend/{$do}.php";
            include (file_exists($file)) ? $file : "./backend/title.php";
            ?>
        </div>
        <div id=" alt"
            style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
        </div>
        <script>
            $(".sswww").hover(
                function() {
                    $("#alt").html("" + $(this).children(".all").html() + "").css({
                        "top": $(this).offset().top - 50
                    })
                    $("#alt").show()
                }
            )
            $(".sswww").mouseout(
                function() {
                    $("#alt").hide()
                }
            )
        </script>
    </div>
    <div style="clear:both;"></div>
    <div
        style="width:1024px; left:0px; position:relative; background:#ddb280; margin-top:4px; height:123px; display:block;">
        <span class="t" style="line-height:123px;"></span>
    </div>
    </div>

</body>

</html>