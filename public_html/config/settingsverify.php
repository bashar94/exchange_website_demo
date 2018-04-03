<?php
if(isset($_SESSION['username'])){
	$user = mysqli_fetch_assoc(data_user($dbc, $_SESSION['username']));
	
	if(isset($_GET['profile'])){
		$profileid = $_GET['profile']; # Getting 'Profile ID' from URL
	}else{
		$profileid = 'profile';  # Setting 'Profile ID' when not found in URL
	}
	

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $user['username'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
	  
	  if(!getimagesize($file_tmp)){
 		 $errors[] = 'Please ensure you are uploading an image.';
	  }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"C:\Users\Bashar\Desktop\\".$file_name.'.'.$file_ext);
		 data_update($dbc, 'users', "pp_url = 'file:///C:/Users/Bashar/Desktop/$file_name.$file_ext'", "username = '$user[username]'");
      }
   }

}else{
	header("Location: ?page=default");
}
?>