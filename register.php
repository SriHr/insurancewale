<?php

session_start();

$conn = mysqli_connect("localhost","root","","phahila");


$name = $_POST['name'];
$pass = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$s = "select email from usertable where email = '$email'";
 
$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 0)
{


// header("location:sbdhg.html");

$ins = mysqli_query($conn,"insert into usertable(name,phone,email,password) values('$name','$phone','$email','$pass')");
if($ins){
    ?>
    <script type="text/javascript">
alert("Registration Successfull You can login Now!");
window.location.href = "My Account.html";
</script>
    <?php
}
    else{
        ?>
        <script type="text/javascript">
        alert("Something error...Please try again later!");
        window.location.href = "My Account.html";
        </script>
        <?php
    }

}
else
{

    ?>
    <script type="text/javascript">
alert("This email is alredy registered Please try another or forgot password!");
window.location.href = "My Account.html";
</script>
    <?php
}











?>