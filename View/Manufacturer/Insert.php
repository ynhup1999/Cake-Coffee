<div class="container my-5">
    <h2><span><a href="adminManager.php?mod=manufacturer&act=insert" style="text-decoration: none">Thêm nhà cung cấp</a></span></h2>
  	<form class="form" method="post" action="adminManager.php?mod=manufacturer&act=insert">
        <p><label class="mr-3" style="font-weight: bold">Tên nhà cung cấp (*):</label><input type="text" name="txtManufacturerName" id="txtManufacturerName" /></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" class="btn btn-primary px-3"/></p>
        <p id="error" class="error"></p>
    </form>
</div>