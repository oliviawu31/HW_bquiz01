<div class="di">
    <!--正中央-->
    <table width="100%">
        <tbody>
            <tr>
                <td style="width:100%; height:50px; font-weight:800; border:rgb(109, 64, 32) 1px solid; border-radius:3px;" class="cent"><a
                        href="?do=admin" style="color: rgb(109, 64, 32); text-decoration:none;">後台管理區</a>
                    </td>
            
            </tr>
        </tbody>
    </table>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:rgb(109, 64, 32) 1px solid; border-radius:3px;">
        <p class="t cent botli">最新消息資料管理</p>
        <form method="post" target="back" action="./api/edit.php">
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="80%">最新消息資料內容</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                    </tr>
                    <?php
                    $rows=$News->all();
                    foreach($rows as $row){
                        ?>
                    <tr>
                        <td>
                            <textarea name="text[]" style="width:95%;height:60px"><?=$row['text'];?></textarea>
                        </td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?=$row['id'];?>"
                                <?=($row['sh']==1)?'checked':'';?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </tr>
                    <?php    


                }
                ?>



                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px"><input type="button"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                                value="新增最新消息資料">
                        </td>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="submit" value="修改確定">
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>