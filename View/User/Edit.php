<div class="container my-5">

<h2><span><a  style="text-decoration: none" href="admin.php?mod=user&act=edit&id=<?php echo $id; ?>">Chỉnh thành viên</a></span></h2>

	<form action="admin.php?mod=user&act=edit&id=<?php echo $id; ?>" method="post" class="form">
    <p><label class="mr-3" style="font-weight: bold">Tên đăng nhập:</label><input readonly="readonly" type="text" name="txtUserName" id="txtUserName" value="<?php echo $row['UserName']; ?>"/></p>
    <p><label  style="font-weight: bold; margin-right: 75px">Nhóm:</label>
        <select name="slGroup">
            <?php
				foreach($ret as $rowgroup)
				{
					if($rowgroup['GroupID']==$row['GroupID'])
					{
						echo "<option value=\"$rowgroup[GroupID]\" selected=\"selected\" >$rowgroup[GroupName]</option>";
					}
					else
						echo "<option value=\"$rowgroup[GroupID]\" >$rowgroup[GroupName]</option>";
				}
			?>
        </select></p>
        <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" class="btn btn-primary px-3"/></p>
    </form>

</div>