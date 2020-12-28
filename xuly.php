
<?php
 session_start();
 
include_once("Model/User.php");
  
    // Nếu không phải là sự kiện đăng ký thì không xử lý
     
    //Nhúng file kết nối với database
   
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
     $fullName   = addslashes($_POST['txtFullname']);
    $userName   = addslashes($_POST['txtUsername']);
    $passWord   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
   
   
   
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$userName || !$passWord || !$email || !$fullName)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $passWord = md5($passWord);
            

            if($fullName!="" && $userName!="" && $passWord!="" && $email!=""){
            echo"YES ne";
            $user = new User();
            $res = $user->createNewUser($fullName,$userName,$passWord,$email);
            echo $fullName;
echo $userName;
echo $passWord;
echo $email;
            if($res){
                header("location: index.php");
            }
            else{
                echo "<p class=\"error\">Tên đăng nhập bị trùng<p>";
            }
        }
        



       
                          
    //Thông báo quá trình lưu
    /*if ($addmember){ echo $fullName;echo $userName;echo $email; echo $passWord;
               
            }
            else{

                echo "<p class=\"error\">Tên đăng nhập bị trùng<p><a href='FB.php'>Thử lại</a>";
            }*/
?>