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
        <p class="t cent botli">網站標題管理</p>
        <form method="post" target="back" action="./api/edit.php">
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="40%">網站標題</td>
                        <td width="30%">替代文字</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                        <td></td>
                    </tr>
                    <?php
                    $rows = $Title->all();
                    foreach ($rows as $row) {
                    ?>
                        <tr>
                            <td>
                                <img src="./upload/<?= $row['img']; ?> " style="width: 300px;height: 30px;">
                            </td>
                            <td>
                                <input type="text" name="text[]" value="<?= $row['text']; ?>">
                            </td>
                            <td>
                                <input type="radio" name="sh" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                            </td>
                            <td>
                                <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                            </td>
                            <td>
                                <input type="button"
                                    onclick="op('#cover','#cvr','./modal/upload_<?= $do; ?>.php?id=<?= $row['id']; ?>&table=<?= $do; ?>')"
                                    value="更新圖片">
                            </td>
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
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
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?= $do; ?>.php?table=<?= $do; ?>&#39;)"
                                value="新增網站標題圖片">
                        </td>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?= $do; ?>">
                            <input type="submit" value="修改確定">
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>