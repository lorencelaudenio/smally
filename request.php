<?php
include("header.php");
include("nav.php");
$id = $_GET['id'];


if(isset($_POST['request'])){
    $ida = $_POST['ida'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];
    $details = $name ."\n". $email . "\n" . $reason;

    $sql_request = mysqli_query($conn,"UPDATE link SET request='$details' WHERE id=$ida");

    //redirecting to the display page (index.php in our case)
    echo '<script>alert("Request sent!");</script>';
    header("Location: view.php");
}
?>

<center>
<div class="container shadow">
    <h3>Request for deletion</h3>
    <form method="POST" action="request.php">
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <input type="hidden" name="ida" class="form-control"  value="<?php  echo $id;?>"  >
        <input type="text" name="name" class="form-control"  placeholder="Name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword"  class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text" name="email" class="form-control"  placeholder="Email" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Reason</label>
        <div class="col-sm-10">
        <input type="text" name="reason" class="form-control"  placeholder="Reason" required>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Submit" name="request">
    </form>
</div>
<?php
    include("footer.php");
?>
