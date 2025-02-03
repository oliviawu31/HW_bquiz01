<?php include_once "api/db.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>DINOTAENG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./imgs/index/01-logo.ico" type="image/x-icon" />
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>


<body>
    <div id="cover" style="display:none;">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
    <div id="main">
        <a title="" href="./index.php">
            <div class="ti"
                style="background:url('./upload/<?= $Title->find(['sh' => 1])['img']; ?>'); background-size:cover;">
            </div>
            <!--標題-->
        </a>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <span class="t botli">主選單區</span>
                    <div class="main_menu">
                        <a style="text-decoration: none;" href="?do=login">管理登入</a>
                        <div class="mw"></div>
                    </div>
                    <div class="main_menu">
                        <a style="text-decoration: none;" href="?do=main">
                            網站首頁
                        </a>
                        <div class="mw">
                            <a style="text-decoration: none;" href="?do=news">
                                <div class="mainmu2">更多資訊</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dbor" style="margin:3px; width:95%; height:21.5%; line-height:100px;">
                    <span class="t">進站總人數 : <?=$Total->find(1)['total'];?></span>
                </div>
            </div>
            <?php
            $do = $_GET['do'] ?? 'main';
            $file = "./front/{$do}.php";
            include (file_exists($file)) ? $file : "./front/main.php";
            ?>
            <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                <!--右邊-->
                <?php if(!isset($_SESSION['user'])):?>
                <button style="width:90%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="lo(&#39;?do=login&#39;)">管理登入</button>
                <?php else: ?>
                <button style="width:90%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
                    onclick="logout()">管理登出</button>
                <?php endif ?>
                <div style="width:80%; height:480px;" class="dbor">
                    <span class="t botli">校園映象區</span>
                    <div class='cent' id="up" onclick="pp(1)" style="margin-top:10px">
                        <img src="./icon/up.jpg" alt="" srcset="">
                    </div>
                    <?php
                    $images = $Image->all();
                    foreach ($images as $index => $image) {
                        echo "<div class='im' id='ssaa{$index}' style='display:flex; justify-content: center;'>";
                        echo "<img src='./upload/{$image['img']}' style='width:150px; height:103px; margin: 10px 0px '>";
                        echo "</div>";
                    }
                    ?>
                    <div class='cent' id="dn" onclick="pp(2)">
                        <img src="./icon/dn.jpg" alt="" srcset="">
                    </div>
                    <script>
                    var nowpage = 0,
                        num = 0;

                    function pp(x) {
                        var s, t;
                        if (x == 1 && nowpage - 1 >= 0) {
                            nowpage--;
                        }
                        if (x == 2 && (nowpage + 1) * 3 <= num * 1 + 3) {
                            nowpage++;
                        }
                        $(".im").hide()
                        for (s = 0; s <= 2; s++) {
                            t = s * 1 + nowpage * 1;
                            $("#ssaa" + t).show()
                        }
                    }
                    pp(1)
                    </script>

                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <div
            style="width:1024px; left:0px; position:relative; background:#ddb280; margin-top:4px; height:123px; display:block;">
            <span class="t" style="line-height:123px;"><?=$Bottom->find(1)['bottom'];?></span>
        </div>
    </div>

</body>

</html>