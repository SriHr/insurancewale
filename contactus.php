<?php
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['mail'];

    $conn = mysqli_connect("localhost","root","","phahila");
$sql = mysqli_query($conn,"insert into userrs(name,subject,mssg,email) values ('$name','$subject','$message','$email')");

if($sql){
    ?>
<script type="text/javascript">
alert("Thankyou for contacting, We will be back you soon !");
window.location.href = "contact.html";
</script>
<?php
}

else{
    ?>
    <script type="text/javascript">
alert("Something went wrong !");
window.location.href = "contact.html";
</script>
    <?php

}
?>
