<?php 
include("index.php");
if(!($_SESSION && $_SESSION["email"])) {
    die("Please Login first");
}
$name = $city = $phone = "";
$sql2 = "SELECT * FROM `student` WHERE email = '".$_GET['email']."' ";
$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result2);
// echo "<pre>";
// print_r($sql2);
// echo "</pre>";
if(!empty($_POST)) {
    $name = $_POST['names'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $sql = "UPDATE `student` SET name = '".$_POST['names']."', city = '".$_POST['city']."', phone = '".$_POST['phone']."' WHERE email = '".$_GET['email']."' ";
    $result = mysqli_query($conn, $sql);
    header('Location: viewRec.php');
//echo "<pre>";
// print_r($sql);
// echo "</pre>";
}



?>
<div class = "container">
    <form id = "form1" method="post">
        <div class="col-md-3">
            <label for="name">Name</label>
            <input type = "text" class = "form-control" value = "<?php echo $row['name']; ?>" name = "names" id="name">
            <p id = "nameErr" class="text-danger" style="display:none">Please enter your name</p>
        </div></br>
        <div class="col-md-3">
            <label for="city">City</label>
            <input type = "text" class = "form-control" value = "<?php echo $row['city']; ?>" name = "city" id="city">
            <p id = "cityErr" class="text-danger" style="display:none">Please enter City</p>
        </div></br>
        <div class="col-md-3">
            <label for="phone">Phone No.</label>
            <input type = "number" class = "form-control" value = "<?php echo $row['phone']; ?>" name = "phone" id="phone">
            <p id = "phoneErr" class="text-danger" style="display:none">Please enter your phone number</p>
        </div></br>
            <button type = "submit" value = "submit" id = "submit" class = "btn btn-dark">Update</button>
        </div>
    </form>
</div>
<script>
    $(document).ready(function(){
        
    });
</script>
lputcpu