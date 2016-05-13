<?php
include 'config.php';

$query = 'UPDATE memberinfo SET hours=(SELECT SUM(hours) FROM '.$username.'service WHERE status="Accepted") WHERE username=?';
if($stmt = $conn->prepare($query)) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
}

$query = 'UPDATE memberinfo SET attendance=(SELECT COUNT(CASE marked WHEN "Present" THEN 1 END) FROM '.$username.'attendance)+(SELECT COUNT(CASE marked WHEN "Excused" THEN 1 END) FROM '.$username.'attendance) WHERE username=?';
if($stmt = $conn->prepare($query)) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
}

$query = 'UPDATE memberinfo SET targetattendance=(SELECT COUNT(CASE marked WHEN "Present" THEN 1 END) FROM '.$username.'attendance)+(SELECT COUNT(CASE marked WHEN "Excused" THEN 1 END) FROM '.$username.'attendance)+(SELECT COUNT(CASE marked WHEN "Absent" THEN 1 END) FROM '.$username.'attendance) WHERE username=?';
if($stmt = $conn->prepare($query)) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
}

$query = 'UPDATE memberinfo SET dues=(SELECT SUM(amount) FROM '.$username.'dues WHERE recieved!="N/A") WHERE username=?';
if($stmt = $conn->prepare($query)) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
}

$query = 'UPDATE memberinfo SET targetdues=(SELECT SUM(amount) FROM '.$username.'dues) WHERE username=?';
if($stmt = $conn->prepare($query)) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
}

$query = 'SELECT hours, targethours, dues, targetdues, attendance, targetattendance FROM memberinfo WHERE username = ?';
if($stmt = $conn->prepare($query)) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $count = $stmt->num_rows;
    $stmt->bind_result($_SESSION['hours'], $_SESSION['targethours'], $_SESSION['dues'], $_SESSION['targetdues'], $_SESSION['attendance'], $_SESSION['targetattendance']);
    $stmt->fetch();
}
?>

var hours = <?php echo $_SESSION['hours'];?>;
var targethours = <?php echo $_SESSION['targethours'];?>;
var dues = <?php echo $_SESSION['dues'];?>;
var targetdues = <?php echo $_SESSION['targetdues'];?>;
var attendance = <?php echo $_SESSION['attendance'];?>;
var targetattendance = <?php echo $_SESSION['targetattendance'];?>;
var percentattendance = Math.floor(Math.min(attendance/targetattendance, 1) * 100);