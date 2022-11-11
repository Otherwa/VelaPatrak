<?php
include("../../config/connect.php");
ob_start();
session_start();

if (!isset($_SESSION['name']) && !isset($_SESSION['type'])) {
    // redirect if not set
    header("Location:../account/login.php");
} else {
    $type = $_SESSION['type'];
    if ($type == "member") {
        header("Location:../account/login.php");
    }
}
//durvesh
// session passes id
$id = $_SESSION['id'];

// insert
if (isset($_POST['save'])) {
    $timeslot =  $_POST['TimeSlot'];
    $starttime =  $_POST['StartTime'];
    $memberid =  $id; //is member id of login generated at login
    $endtime =  $_POST['EndTime'];
}

// insert in subjects



// list the subjects in db
function subjects()
{

    // boiler plate
    // $con = get_con();
    // $con = get_con();
    // $sql = "SELECT * FROM timeslot";
    // $result = $con->query($sql);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while ($row = $result->fetch_assoc()) {
    //         echo "<li>" . "Timeslot: " . $row["TimeSlot"] . " -Start-Time: " . $row["StartTime"] . " -End-Time: " . $row["EndTime"] . " -Member-id: " . $row["MemberId"] . " &nbsp;&nbsp" . "<a style=\"color:#131352 \" href=\"action\\admin_timeslot_update.php\\?UpdateId=" . $row["TimeSlot"] . "\">Update</a>" . "&nbsp;<a style=\"color:red \" href=\"action\\admin_timeslot_delete.php\\?DeleteId=" . $row["TimeSlot"] . "\">Delete</a></li>";
    //     }
    // } else {
    //     echo "No Timeslot";
    // }
    // $con->close();
}
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" sizes="96x96" rel="icon"
        href="https://img.icons8.com/external-soft-fill-juicy-fish/60/000000/external-appointment-online-services-soft-fill-soft-fill-juicy-fish.png">
    <!-- basic html required -->
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/select_subject.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Time-Table</title>
</head>

<body>

    <div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
        <?php include('./partial/nav.php'); ?>
    </div>
    <!-- Page Content -->
    <div class="">
        <button class="w3-button w3-xlarge" onclick="w3_open()">☰</button>
    </div>

    <code class="txt">
        <?php echo $_SESSION['name']; ?>
        <?php echo $_SESSION['id']; ?>
    </code>

    <div class="con_head">
        <p> Select Subjects </p>
    </div>

    <div class="container">
        <div class="list">
            <p style="float:left">Select Subjects</p>
            <div id="_list" class="form  w3-margin w3-whitesmoke w3-bar-block">
            </div>
        </div>
        <br>
        <div class="l-form">
            <form method="POST" class="form  w3-margin w3-whitesmoke" style="width:24rem;height:auto">
                <div class="context">
                    <img src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo"
                        style="height:3rem">
                    <p>Select Subjects</p>
                </div>
                <br>
                <br>
                <div class="form__div">
                    <input type="number" class="form__input" name="TimeSlot" id="TimeSlot" placeholder="e.g xyz"
                        autocomplete="off">
                    <label for="" class="form__label">Time-Slot</label>
                </div>
                <br>
                <div class="form__div">
                    <input type="time" class="form__input" name="StartTime" id="StartTime" placeholder="e.g xyz@123"
                        autocomplete="off">
                    <label for="" class="form__label">Start-Time</label>
                </div>
                <br>
                <div class="form__div">
                    <input type="time" class="form__input" name="EndTime" id="EndTime"
                        placeholder="e.g someone@gmail.com" autocomplete="off">
                    <label for="" class="form__label">End-Time</label>
                </div>
                <br>
                <input class="button-primary w3-button w3-border w3-hover-blue w3-round" type="submit" value="Save"
                    name="save" style="float:right">
        </div>
        </form>
    </div>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/select_subject.js"></script>
</body>

</html>