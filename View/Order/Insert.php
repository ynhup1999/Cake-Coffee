<div class="container">
  <p>
  	<form class="form" method="post" action="index.php?mod=order&act=add" onSubmit="return IsInsertOrder()">
  		
<div style="border: solid;margin-top: 1rem">
	<div style="margin: 20px; text-align: center;">
    <div class="alert alert-success">
  <strong style="font-size: 30px;">Đặt Hàng!</strong>
</div>
	</div>
	<div class="progress">
  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:40%">
    Chọn Món
  </div>
  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:30%">
    Đặt hàng
  </div>
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:30%">
    Thanh Toán
  </div>
	</div>
	<div style="margin: 20px; margin-left: 30%">
		
	 <form class="form-inline" >
	 	<label  class="mb-2 mr-sm-2">Họ Tên(*): </label>
    <input type="text" class="form-control mb-2 mr-sm-2" type="text" name="txtName" id="txtName" placeholder="Nhập Họ Tên"  style="width: 30rem" >
    <label  class="mb-2 mr-sm-2">Địa chỉ nhận hàng(**): </label>
    <input type="text" class="form-control mb-2 mr-sm-2" type="text" name="txtAddress" id="txtAddress" placeholder="Nhập Địa Chỉ"  style="width: 30rem" >
    <label class="mb-2 mr-sm-2">Số điện thoại(***):</label>
    <input type="text" class="form-control mb-2 mr-sm-2" type="text" name="txtPhone" id="txtPhone" placeholder="Nhập SĐT" style="width: 30rem">
		    <form>
		  <div class="custom-control custom-switch">
		    <input type="checkbox" class="custom-control-input" id="cash">
		    <label class="custom-control-label" for="cash">Thanh toán khi nhận hàng!!</label>
		    
		  </div>
		    </form>
		</div>
    <p><label>&nbsp;</label> <div style="margin-bottom: 10px;">
    	<nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item" style="margin-left: 1px;">
          	<input type="button" value="<<- Quay Lại"  class="btn btn-outline-primary" onclick="goBack()" /></p>
    </li>
    <li class="nav-item" style="margin-left: 10rem;">
            <input type="submit" value="Thanh Toán ->>" name="btnSave" id="btnSave" class="btn btn-outline-primary" onclick="Complete()"  /></p>
    </li>
    
  </ul>
</nav>
    	
    </div>
     
</div>
</div>
</div>    
        <p id="error" class="error"></p>
     <!--
        <p><label>Địa chỉ nhận hàng (*)</label><input type="text" name="txtAddress" id="txtAddress" /></p>
        <p><label>Số điện thoại (*)</label><input type="text" name="txtPhone" id="txtPhone" /></p>
        <p><label>&nbsp;</label>  <input type="submit" value="Thanh Toán" name="btnSave" id="btnSave" class="btn btn-outline-primary" /></p>
        <p id="error" class="error"></p>-->
    </form>
  </p>
  <script>
	  	function goBack() {
	      window.history.back()
	    }
		function Complete() {
		  alert("Bạn đã đặt hàng thành công!");
		}
</script>
</div>