<?php include_once "logout.php";?>
<div class="di">
    <!--正中央-->
    <table width="100%">
        <tbody>
            <tr>
                <td style="width: 90%; height:50px; font-weight:800; border:rgb(109, 64, 32) 1px solid; border-radius:3px;" class="cent"><a
                        href="?do=admin" style="color: rgb(109, 64, 32); text-decoration:none;">後台管理區</a>
                </td>
                <td>
                    <button style="width:90%; height:50px;" onclick="logout()">登出</button>
                </td>
            </tr>
        </tbody>
    </table>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:rgb(109, 64, 32) 1px solid; border-radius:3px;">
        <p class="t cent botli">進站總人數管理</p>
        <form method="post" action="./api/update_data.php">
            <table width="50%" style="margin:auto">
                <tbody>
                    <tr class="yel">
                        <td width="50%">進站總人數：</td>
                        <td width="50%"><input type="number" name="total" value="<?=$Total->find(1)['total'];?>"></td>
                    </tr>
                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px">
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
</div>