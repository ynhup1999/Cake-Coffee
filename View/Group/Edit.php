<div class="container my-5">
<h2><span><a style="text-decoration: none" href="adminManager.php?mod=group&act=edit&id=<?php echo $id; ?>">Chỉnh sửa nhóm thành viên</a></span></h2>

<form action="adminManager.php?mod=group&act=edit&id=<?php echo $id; ?>" method="post" class="form">
	<p><label class="mr-3" style="font-weight: bold">Tên nhóm:</label><input type="text" name="txtGroupName" id="txtGroupName" value="<?php echo $row['GroupName']; ?>"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" class="btn btn-primary px-3" /></p>
</form>

</div>