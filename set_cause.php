<?php 
include 'db.php';

if (isset($_POST['cause'])) {
    $_SESSION['selected_cause'] = $_POST['cause'];
}

header("Location: Donate");
exit;
?>