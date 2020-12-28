<div class="container my-5">
<h2><span><a style="text-decoration: none" href="adminManager.php?mod=category&act=insert">Thêm thể loại</a></span></h2>

  	<form class="form" method="post" action="admin.php?mod=category&act=insert">
        <p><label  class="mr-3" style="font-weight: bold">Tên thể loại (*):</label><input type="text" name="txtCategoryName" id="txtCategoryName" /></p>
        <p><label  class="mr-3" style="font-weight: bold">Mã thể loại (*):</label><input type="text" name="txtPosition" id="txtPosition"/></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" class="btn btn-primary px-3"/></p>
        <p id="error" class="error"></p>
    </form>
</div>