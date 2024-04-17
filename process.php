<?php  
    include "conn.php";
    session_start();

    //this code is for registration scholar
    if(isset($_POST['register'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $student_name=$_POST['student_name'];
    $contact=$_POST['contact'];
    $id_no=$_POST['id_no'];
    $year_level=$_POST['year_level'];
    $course=$_POST['course'];
    $department=$_POST['department'];
    $status="New";

    
   $insertusers=mysqli_query($conn, "INSERT INTO scholars VALUES('0','$email','$password','$student_name','$contact','$id_no','$year_level','$course','$department','$status')");

   if($insertusers==true){
    ?>
    <script>
        alert("Your Registration was Succesful! Wait for atleast a few hours for confirmation.");
        window.location.href="index.php";
        
    </script>
<?php
  
}else{

    ?>
    <script>
        alert("Error Registration\nTry Again!");
        window.location.href="index.php";
    </script>
<?php
}
}
  

//Closing of Registration


  //this code is for registration faculty
  if(isset($_POST['register_faculty'])){


    $profile  = $_FILES['profile']['name'];
    $profile_tmp = $_FILES['profile']['tmp_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $fullname=$_POST['fullname'];
    $contact=$_POST['contact'];
    $id_num=$_POST['id_num'];
    $department=$_POST['department'];
    $address=$_POST['address'];
    $faculty_status="New";

   $insertusers=mysqli_query($conn, "INSERT INTO faculties VALUES('0','$profile','$fullname','$contact','$address','$email','$password','$id_num','$department','$faculty_status')");


   if($insertusers==true){
    move_uploaded_file($profile_tmp, 'uploads/'.$profile);
    ?>
    <script>
        alert("Your Registration was Succesful! Wait for atleast a few hours for confirmation.");
        window.location.href="index.php";
    </script>
<?php
  
}else{

    ?>
    <script>
        alert("Error Registration\nTry Again!");
        window.location.href="index.php";
    </script>
<?php
}

}
  

//Closing of Registration


//Code for login admin

if(isset($_POST['login_admin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $check=mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$password'");

    $num=mysqli_num_rows($check);   

                                                                       
    if($num >=1){
        $_SESSION['email'] = $email;
        ?>
        <script>
            alert("Account Accepted! Welcome Admin!");
            window.location.href="admin/index.php";     
        </script>
    <?php
    
    }else{
        ?>
        <script>
            alert("Email or Password not Found!");
            window.location.href="index.php";
        </script>
    <?php
    }
    
}
//Closing of login admin

//Code for login faculties

if(isset($_POST['login_faculties'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $acc_status="New";
    $check=mysqli_query($conn, "SELECT * FROM faculties WHERE email='$email' AND password='$password' AND account_status != '$acc_status'");

    $num=mysqli_num_rows($check);

                                                                       
    if($num >=1){
        $_SESSION['email'] = $email;
        ?>
        <script>
            alert("Account Accepted! Welcome Faculty!");
            window.location.href="faculty/index.php";     
        </script>
    <?php
    
    }else{
        ?>
        <script>
            alert("Account deactivated!");
            window.location.href="index.php";
        </script>
    <?php
    }
    
}
//Closing of login faculty

//Code for login Scholar!

if(isset($_POST['login_scholar'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $check=mysqli_query($conn, "SELECT * FROM scholars WHERE email='$email' AND password='$password' AND status !='New'");

    $num=mysqli_num_rows($check);
                                                                                    
    if($num >=1){
        $_SESSION['email']=$email;
        ?>
        <script>
            alert("Account Accepted! Welcome Scholar!");
            window.location.href="scholar/view.php";     
        </script>
    <?php
    
    }else{
        ?>
        <script>
            alert("Email or Password not Found!");
            window.location.href="index.php";
        </script>
    <?php
    }
}
  
//Closing of scholar

if (isset($_POST['announce'])) {
	$message = $_POST['message'];

	$sql = mysqli_query($conn,"INSERT into announcements values('','$message',current_timestamp)");
	?>
	<script>
		alert("Announcement Added..!");
		window.location.href = 'announcements.php';
	</script>
	<?php
}


//announce
if (isset($_POST['announce'])) {
	$message = $_POST['message'];

	$sql = mysqli_query($conn,"INSERT into announcements values('','$message',current_timestamp)");
	?>
	<script>
		alert("Announcement Added..!");
		window.location.href = 'announcement.php';
	</script>
	<?php
}

//update announcement
if (isset($_POST['updateAnnouncement'])) {
	$id = $_GET['id'];
	$message = $_POST['message'];

	$sql = mysqli_query($conn,"UPDATE announcements set message='$message' where id='$id'");
	?>
	<script>
		alert("Announcement Updated..!");
		window.location.href = 'announcement.php';
	</script>
	<?php
}

//delete announcement
if (isset($_GET['deleteAnnouncement'])) {
	$id = $_GET['id'];

	$sql = mysqli_query($conn,"DELETE from announcements where id='$id'");
	?>
	<script>
		alert("Announcement Deleted..!");
		window.location.href = 'announcement.php';
	</script>
	<?php
}


?>