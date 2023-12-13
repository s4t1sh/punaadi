<?php
    include 'db.php';

    if (isset($_POST['update'])) {

        $week = mysqli_real_escape_string($con, $_POST['week']);
        $nwup = mysqli_real_escape_string($con, $_POST['nwup']);
        $pulls = mysqli_real_escape_string($con, $_POST['pulls']);
        $drags = mysqli_real_escape_string($con, $_POST['drags']);

   
        $update_query = "UPDATE updates SET week='$week', nwup='$nwup', pulls='$pulls', drags='$drags'";
        $update_result = mysqli_query($con, $update_query);

        if ($update_result) {
            echo "Update successful! <a href='javascript:history.back()'>ok</a>";
        } else {
            echo "Update failed: " . mysqli_error($con);
        }
        mysqli_close($con);
    }
else{

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (mysqli_connect_errno()) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $hashed_password = md5($password);

        $query = "SELECT * FROM login_details WHERE username='$username' AND pass='$hashed_password'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $update_details_query = "SELECT * FROM updates";
            $update_result = mysqli_query($con, $update_details_query);
            $update_details = mysqli_fetch_array($update_result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punaadi | Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class='container'>
    <h4 class='text-center mt-3'>UPDATE DETAILS</h4>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm">
            <form action="update-form.php" method="POST" class='mt-4'>
                <label for="week" class='fw-bold'>UPDATE WEEK</label>
                <input type="text" name="week" id="week" class="form-control" value=<?php echo $update_details['week'] ?>>
                <label for="nwup" class='fw-bold mt-3'>NW UP BY</label>
                <input type="text" id="nwup" name="nwup" class="form-control" value=<?php echo $update_details['nwup'] ?>>
                <label for="pulls" class='fw-bold mt-3'>PULLS</label>
                <textarea name="pulls" id="pulls" cols="30" rows="7" class='form-control' ><?php echo $update_details['pulls'] ?></textarea>
                <label for="drags" class='fw-bold mt-3'>DRAGS</label>
                <textarea name="drags" id="drags" cols="30" rows="7" class='form-control'><?php echo $update_details['drags'] ?></textarea>
                <button type="submit" name='update' class='btn btn-success form-control mt-3 fw-bold'>UPDATE</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
        } else {
            header("Location: admin.php?message=Incorrect username or password");
        }
    }
    else{
        header("Location: admin.php");
    }
        mysqli_close($con);
}
?>

