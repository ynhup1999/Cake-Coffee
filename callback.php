
 
<?php
    session_start();
    include_once("Model/User.php");

    
    $app_id = "4044348592261306";
    $app_secret = "6f2fc06887fdbdc8e1d21fdf3ad8c74b";
    $redirect_uri = urlencode("http://localhost:8080/Web1/callback.php");    
    
    // Get code value
    $code = $_GET['code'];
    
    // Get access token info
    $facebook_access_token_uri = "https://graph.facebook.com/v2.8/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code";    
    
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
        
    $response = curl_exec($ch); 
    curl_close($ch);

    // Get access token
    $aResponse = json_decode($response);
    $access_token = $aResponse->access_token;
    
    // Get user infomation
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/me?access_token=$access_token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
        
    $response = curl_exec($ch); 
    curl_close($ch);
    
    $user = json_decode($response);

    // Log user in
    $_SESSION['user_login'] = true;
    $_SESSION['user_name'] = $user->name;
    $_SESSION['user_id'] = $user->id;
   
   
   $userName= $user->name;
    
   $message = "Chào mừng bạn đến với Cake Coffee, ". $user->name."!";
     
     
           
         $userr = new User();
          $res = $userr->createNewUserFB($userName,$user->id);
           
                 echo "<script type='text/javascript'>alert('$message');</script>";
              
     
?>
      
<head>
<title>Vui lòng đợi ...</title>
<meta http-equiv="refresh" content="5;http://localhost:8080/Web1/index.php">
</head>

<!-- echo "Wellcome ". $user->name ."!";  