<div class="container my-5">
<h2><span><a style="text-decoration: none" href="adminManager.php?mod=category&act=edit&id=<?php echo $id; ?>">Chỉnh sửa thể loại</a></span></h2>

<form action="adminManager.php?mod=category&act=edit&id=<?php echo $id; ?>" method="post" class="form">
	<p><label class="mr-3" style="font-weight: bold">Tên thể loại:</label><input type="text" name="txtCategoryName" id="txtCategoryName" value="<?php echo $row['CategoryName']; ?>"/></p>
    <p><label style="font-weight: bold; margin-right: 65px">Vị trí:</label><input type="text" name="txtPosition" id="txtPosition" value="<?php echo $row['Position'] ?>" /></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" class="btn btn-primary px-3"/></p>
</form>

</div>