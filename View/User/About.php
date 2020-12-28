<div class="container">
	<center><h2 style="margin: 30px;">Thông tin cá nhân</h2></center>
	<table  class="table table table-bordered  table-hover">
		<thead class="thead-light">
	  <?php
echo" 
      <tr>
        <th>Tên Đăng Nhập</th>
        <th>Họ Tên</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>".$row['UserName']."</td>
        <td>". $row['FullName']."</td>
        <td>".$row['Email']."</td>
      </tr>
      
    </tbody>"

	  ?>
  	</table>
</div>
<hr/>
<!--echo "<tr><td>Tên đăng nhập:</td><td>".$row['UserName']."</td></tr>";
	  	echo "<tr><td>Họ tên:</td><td>". $row['FullName']. "</td></tr>";
		
		echo "<tr><td>Email:</td><td>".$row['Email']."</td></tr>";-->