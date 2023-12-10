<?php 
include_once('functions/function.php');
needlogged();
if($_SESSION['role']=='1'){
get_header();
get_sidebar();

// $Edit=$_GET['E'];
// $sel="SELECT * FROM users WHERE user_id='$Edit'";
// $Q=mysqli_query($con,$sel);
// $E=mysqli_fetch_assoc($Q);

// if(!empty($_POST)){
//     $name=$_POST['name'];
//     $phone=$_POST['phone'];
//     $email=$_POST['email'];
//     $role=$_POST['role'];
//     $image=$_FILES['pic'];
//     $imageName="";
    
// $update="UPDATE users SET user_name='$name',user_phone='$phone',user_email='$email',role_id='$role' WHERE user_id='$Edit'";

//     if(!empty($name)){
//          if(!empty($email)){
//          if(!empty($role)){
//        if(mysqli_query($con,$update)){
        
//          if($image['name']!=''){
//     $imageName='user_'.time().rand(100,10000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
//     $updimg="UPDATE users SET user_photo='$imageName' WHERE user_id='$Edit'";
//     if(mysqli_query($con,$updimg)){
//        move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
//        header('Location: view-user.php?V='.$Edit); 
//     }else{
//         echo "Image Update Failed";
//     }

//     }
//         header('Location: view-user.php?V='.$Edit );
//             }else{
//             echo "User Update Failed";
//             }
//             }else{
//                 echo "Please Select Role";
//             }

//           }else{
//             echo "Please Enter Email Address.";
//           }

//     }else{
//         echo 'Please Enter Your Name.';
//     } 

//     }



?>
<div class="row">
<div class="col-md-12 ">
    <form method="post" action="" enctype="multipart/form-data">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
                <div class="col-md-8 card_title_part">
                    <i class="fab fa-gg-circle"></i> Update Banner
                </div>  
                <div class="col-md-4 card_button_part">
                    <a href="all-user.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Banner</a>
                </div>  
            </div>
          </div>
          <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label col_form_label">Title<span class="req_star">*</span>:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form_control" id="" name="title">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label col_form_label">Subtitle:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form_control" id="" name="subtitle" >
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label col_form_label">URL<span class="req_star">*</span>:</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control form_control" id="" name="url">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label col_form_label">Button<span class="req_star">*</span>:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form_control" id="" name="button" >
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label col_form_label">Image:</label>
                <div class="col-sm-4">
                  <input type="file" class="form-control form_control" id="" name="pic">
                </div>
                <div class="col-md-2">
                    <?php if($E['user_photo']!=''){ ?>
              <img height="60px" class="img200" src="uploads/<?= $E['user_photo'] ?>"  alt="user"/> 
           <?php }else{ ?>
            <img height="60px" src="images/avatar.jpg" alt="user"/> 
           <?php } ?> 
                </div>
              </div>
          </div>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-sm btn-dark">UPDATE</button>
          </div>  
        </div>
    </form>
</div>
</div>
<?php 
get_footer();
}
?>