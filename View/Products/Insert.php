<div style="margin-left: 50px; margin-top: 40px">
<h2><span><a href="adminManager.php?mod=products&act=insert" style="text-decoration: none; margin-bottom: 30px">Thêm sản phẩm</a></span></h2>

    <form class="form" method="post" action="adminManager.php?mod=products&act=insert" enctype="multipart/form-data">
        <p><label style="font-weight: bold">Tên sản phẩm (*)</label><input type="text" name="txtProductName" id="txtProductName" style="margin-left: 20px" /></p>
        <p><label style="font-weight: bold">Nhà cung cấp (*)</label>
        <select name="slManufacturer" style="margin-left: 18px">
            <option value="0">Chọn nhà cung cấp</option>
            <?php
                foreach($manu as $row)
                {
                    echo "<option value=\"$row[ManufacturerID]\" >$row[ManufacturerName]</option>";
                }
            ?>
        </select></p>
        <p><label style="font-weight: bold">Thể loại (*)</label>
        <select name="slCategory" style="margin-left: 62px">
            <option value="0">Chọn thể loại</option>
            <?php
                foreach($cate as $row)
                {
                    echo "<option value=\"$row[CategoryID]\" >$row[CategoryName]</option>";
                }
            ?>
        </select></p>
        
        <p><label style="font-weight: bold">Giá (*)</label><input type="text" name="txtPrice" id="txtPrice" value="0" style="margin-left: 98px"  /></p>
        <p><label style="font-weight: bold">Số lượng (*)</label><input type="text" name="txtQuantity" id="txtQuantity" value="0" style="margin-left: 55px" /></p>
        <p><label style="font-weight: bold">Ảnh hiển thị  </label><input type="file" name="txtImageUrl" id="txtImageUrl" value=" Chọn file"/></p>
        <p><label style="margin-bottom: 0px; font-weight: bold;" >Mô tả</label></p>
        <textarea name="txtDescription" ></textarea>
        <p style="font-weight: bold">Chi tiết</p>
        <textarea id="txtBody" name="txtBody" cols="70" rows="5"></textarea>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" style="text-decoration: none" class= "btn btn-primary" /></p>
        
        <p id="error" class="error"></p>
    </form>
</div>