<div class="di"
    style="height:540px; border:#8c632d 1px solid; width:53.5%; margin:2px 0px 0px 0px;  float:left; position:relative; left:30px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
    </marquee>
    <div style="height:32px; text-align:center; display:block; background-color:#0C3;">跑馬燈區</div>
    <!--正中央-->
    <script>
        var lin = new Array();
        var now = 0;

        if (lin.length > 1) {
            setInterval("ww()", 3000);
            now = 1;
        }

        function ww() {
            $("#mwww").html("<embed loop=true src='" + lin[now] + "' style='width:99%; height:100%;'></embed>")
            //$("#mwww").attr("src",lin[now])
            now++;
            if (now >= lin.length)
                now = 0;
        }
    </script>
    <div style="width:99%; height:50%; position:relative;" class="cent">無任何資料</div>
    <div style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px;  position:relative;">
        <span class="t botli">最新消息區</span>
        <div style="width:100%; padding:2px; height:290px;">
            <div id="mwww" loop="true" style="width:100%; height:100%;">
                <div>
                    <?php
                    $div = 5;
                    $total = $News->count();
                    $pages = ceil($total / $div);
                    $now = $_GET['p'] ?? 1;
                    $start = ($now - 1) * $div;
                    $rows = $News->all(" limit $start,$div");
                    echo "<ol start='" . ($start + 1) . "'>";

                    foreach ($rows as $row) {
                        echo "<li class='ssaa'>";
                        echo mb_substr($row['text'], 0, 20);
                        echo "<span class='all' style='display:none'>";
                        echo $row['text'];
                        echo "</span>";
                        echo "</li>";
                    }
                    ?>
                    <div class="cent">
                        <?php
                        if (($now - 1) > 0) {
                            $prev = $now - 1;
                            echo "<a href='?do=$do&p=$prev' style='color:block; text-decoration:none';> < </a>";
                        }

                        for ($i = 1; $i <= $pages; $i++) {
                            $size = ($i == $now) ? "20px" : "16px";
                            echo "<a href='?do=$do&p=$i' style='font-size:$size; color:block; text-decoration:none';> ";
                            echo $i;
                            echo " </a>";
                        }

                        if (($now + 1) <= $pages) {
                            $next = $now + 1;
                            echo "<a href='?do=$do&p=$next' style='text-decoration:none; color:block;'> ></a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="altt"
            style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
        </div>
        <script>
            $(".ssaa").hover(
                function() {
                    $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                    $("#altt").show()
                }
            )
            $(".ssaa").mouseout(
                function() {
                    $("#altt").hide()
                }
            )
        </script>
    </div>
</div>