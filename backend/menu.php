<div class="di">
    <!--正中央-->
    <table width="100%">
        <tbody>
            <tr>
                <td style="width:90%; height:50px; font-weight:800; border:rgb(109, 64, 32) 1px solid; border-radius:3px;"
                    class="cent"><a href="?do=admin" style="color: rgb(109, 64, 32); text-decoration:none;">後台管理區</a>
                </td>
                <td>
                    <button style="width:90%; height:50px;" onclick="logout()">登出</button>
                </td>
            </tr>
        </tbody>
    </table>
    <div
        style="width:99%; height:87%; margin:auto; overflow:auto; border:rgb(109, 64, 32) 1px solid; border-radius:3px;">
        <p class="t cent botli"> 選單管理</p>
        <form method="post" target="back" action="./api/edit.php">
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="30%">主選單名稱</td>
                        <td width="30%">選單連結網址</td>
                        <td width="10%">次選單數</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                        <td></td>
                    </tr>
                    <?php
                    $rows = $Menu->all();
                    foreach ($rows as $row) {
                    ?>
                    <tr>
                        <td>
                            <input type="text" name="text[]" value="<?= $row['text']; ?>">
                        </td>
                        <td>
                            <input type="text" name="href[]" value="<?= $row['href']; ?>">
                        </td>
                        <td>

                        </td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?= $row['sh']; ?>"
                                <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <td>
                            <input type="button" value="編輯次選單">
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
                                onclick="op('#cover','#cvr','./modal/upload_<?= $do; ?>.php?id=<?= $row['id']; ?>&table=<? $do; ?>';)"
                                value="新增主選單">
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