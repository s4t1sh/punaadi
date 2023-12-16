<?php

include 'db.php';

$content = $_POST['html_content'];
$update_query = "UPDATE updates SET details = '$content'";

    if (mysqli_query($con, $update_query)) {
        echo "<script>alert('Updated Successfully');window.location.href='/punaadi/investment/admin.php'</script>";
        } else {
        echo "Error: " . $update_query . "<br>" . mysqli_error($con);
        }
    
        mysqli_close($con);

?>