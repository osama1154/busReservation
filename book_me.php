<?php
session_start();
$depart_date ='';
$depart_date = $_REQUEST['depart_date'];
$exolded_Array= explode(",",$depart_date);
$_SESSION['ex'] = $exolded_Array;

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Book Me</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="fsp.css">
    <script src="Library.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        if ($('#1').is(":checked"))
        {
            $('#1').removeClass('checker');
        }
        if ($('#2').is(":checked"))
        {
            $('#2').removeClass('checker');
        }
        if ($('#3').is(":checked"))
        {
            $('#3').removeClass('checker');
        }
        if ($('#4').is(":checked"))
        {
            $('#4').removeClass('checker');
        }
        if ($('#5').is(":checked"))
        {
            $('#5').removeClass('checker');
        }
        if ($('#6').is(":checked"))
        {
            $('#6').removeClass('checker');
        }
        if ($('#7').is(":checked"))
        {
            $('#7').removeClass('checker');
        }
        if ($('#8').is(":checked"))
        {
            $('#8').removeClass('checker');
        }
        if ($('#9').is(":checked"))
        {
            $('#9').removeClass('checker');
        }
        if ($('#10').is(":checked"))
        {
            $('#10').removeClass('checker');
        }
        if ($('#11').is(":checked"))
        {
            $('#11').removeClass('checker');
        }
        if ($('#12').is(":checked"))
        {
            $('#12').removeClass('checker');
        }
        if ($('#13').is(":checked"))
        {
            $('#13').removeClass('checker');
        }
        if ($('#14').is(":checked"))
        {
            $('#14').removeClass('checker');
        }
        if ($('#15').is(":checked"))
        {
            $('#15').removeClass('checker');
        }
        if ($('#16').is(":checked"))
        {
            $('#16').removeClass('checker');
        }
        if ($('#17').is(":checked"))
        {
            $('#17').removeClass('checker');
        }
        if ($('#18').is(":checked"))
        {
            $('#18').removeClass('checker');
        }
        if ($('#19').is(":checked"))
        {
            $('#19').removeClass('checker');
        }
        if ($('#20').is(":checked"))
        {
            $('#20').removeClass('checker');
        }
        if ($('#21').is(":checked"))
        {
            $('#21').removeClass('checker');
        }
        if ($('#22').is(":checked"))
        {
            $('#22').removeClass('checker');
        }
        if ($('#23').is(":checked"))
        {
            $('#23').removeClass('checker');
        }
        if ($('#24').is(":checked"))
        {
            $('#24').removeClass('checker');
        }
        if ($('#25').is(":checked"))
        {
            $('#25').removeClass('checker');
        }
        if ($('#26').is(":checked"))
        {
            $('#26').removeClass('checker');
        }
        if ($('#27').is(":checked"))
        {
            $('#27').removeClass('checker');
        }
        if ($('#28').is(":checked"))
        {
            $('#28').removeClass('checker');
        }
        if ($('#29').is(":checked"))
        {
            $('#29').removeClass('checker');
        }
        if ($('#30').is(":checked"))
        {
            $('#30').removeClass('checker');
        }
        if ($('#31').is(":checked"))
        {
            $('#31').removeClass('checker');
        }
        if ($('#32').is(":checked"))
        {
            $('#32').removeClass('checker');
        }
        if ($('#33').is(":checked"))
        {
            $('#33').removeClass('checker');
        }
        if ($('#34').is(":checked"))
        {
            $('#34').removeClass('checker');
        }
        if ($('#35').is(":checked"))
        {
            $('#35').removeClass('checker');
        }
        if ($('#36').is(":checked"))
        {
            $('#36').removeClass('checker');
        }
        if ($('#37').is(":checked"))
        {
            $('#37').removeClass('checker');
        }
        if ($('#38').is(":checked"))
        {
            $('#38').removeClass('checker');
        }
        if ($('#39').is(":checked"))
        {
            $('#39').removeClass('checker');
        }
        if ($('#40').is(":checked"))
        {
            $('#40').removeClass('checker');
        }

        $('.checker').click(function () {
            var text="" ;
            var id = $(this).attr('id');
            $('.checker:checked').each(function () {
                    text+=","+$(this).val();
            });
            text=text.substring(4,text.length);
            $("#text").val(text);
            $(".seatVal").val(text);
            var v =$("[type='checkbox']:checked").not(':disabled').length;
            $("#count").val(v);
            $("#",id).removeClass('checker');

        });
    })
</script>
</head>

<body>

<div class="container-fluid">

    <div class="row" style="background-color: dimgrey;color: white;padding: 5px;margin-bottom: 10px;font-size: 20px">

        <div class="col-sm-6" align="center">
            <p style="padding-left: 10px"><i class="fas fa-globe" style="font-size: 24px;margin-top: 8px;color: white" aria-hidden="true"></i> Faisalabad | Lahore | Islamabad | Multan | DG Khan |Karachi</p>
        </div>
        <div class="col-sm-6" align="center">
            <p style="padding-left: 10px"><span class="glyphicon glyphicon-map-marker"></span> For Reservation Contact |<i class="fas fa-phone-alt" style="font-size: 24px;margin-top: 8px;color: white" aria-hidden="true"></i> Mobile:0311 224488 | UAN:111 222 888</p>
        </div>
    </div>
</div>

<div class="container-fluid mb-4" style="margin-bottom: 10px">
    <div class="row">
        <div class="col-sm-6">
            <img src="Images/logo.png" style="margin-left: 70px">
        </div>
        <div class="col-sm-6">
            <img src="Images/imgNumb.PNG" width="700px" style="float: right;margin-top: 10px">
        </div>
    </div>
</div>

<nav class=" col-xl-12 navbar navbar-expand-xl bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#" style="font-size: 30px">Youtong Travels</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar" style="font-size: 25px">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="Home.html" style="padding-left: 150px">Home</a>
            </li>

            <li class="nav-item dropdown" data-toggle="dropdown" id="About" style="padding-left: 20px">
                <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                    About
                </a>
                <div class="dropdown-menu" aria-labelledby="About">
                    <a class="dropdown-item" href="Company_Profile.html" onclick="window.open(this.href,'_self')">Company Profile</a>
                    <a class="dropdown-item" href="Chairman%20Message.html" onclick="window.open(this.href,'_self')">Chairman Message</a>
                </div>
            </li>
            <li class="nav-item dropdown" data-toggle="dropdown" id="cs" style="padding-left: 20px">
                <a class="nav-link dropdown-toggle" href="#" id="navbardropServices" data-toggle="dropdown">
                    Core Services
                </a>
                <div class="dropdown-menu" aria-labelledby="cs">
                    <a class="dropdown-item" href="Youtong_Express.html" onclick="window.open(this.href,'_self')">Youtong Express</a>
                    <a class="dropdown-item" href="Youtong_Logistics.html" onclick="window.open(this.href,'_self')">Youtong Logistics</a>
                    <a  class="dropdown-item" href="Youtong_Tour.html" onclick="window.open(this.href,'_self')">Youtong Tour</a>

                </div>
            </li>
            <li class="nav-item" style="padding-left: 20px">
                <a class="nav-link" href="Bus_Schedule.php" onclick="window.open(this.href,'_self')">Bus Schedule</a>
            </li>
            <li class="nav-item" style="padding-left: 20px">
                <a class="nav-link" href="pr.php" onclick="window.open(this.href,'_self')">Online Booking</a>
            </li>
            <li class="nav-item" style="padding-left: 20px">
                <a class="nav-link" href="Contact.php" onclick="window.open(this.href,'_self')">Contact</a>
            </li>
        </ul>
<!--        <li class="nav-item ml-auto" style="list-style: none" >-->
<!--            <a class="nav-link" style="margin-top: 5px;color: white" href="#"><i class="fas fa-user"></i> Log In</a>-->
<!--        </li>-->
        <li class="nav-item ml-auto" style="list-style: none">
            <a class="nav-link"  style="margin-top: 5px;color: white"  href="signOut.php"><i class="fas fa-sign-out"></i> Sign Out</a>
        </li>

    </div>
</nav>

<div class="container-fluidImg m-5">
    <img src="Images/bookme.jpg" alt="Snow" style="width:100%;height: 500px" class="mt-4">
    <div class="bottom-left">Book Me</div>
</div>

<div class="container-fluid mb-5 mt-5" >
<div class="row mb-5 ml-3 mr-2" >
    <div class="col-10 col-sm-10 col-md-6 col-lg-4 ml-5 "align="center" style="border-radius: 10px;background-color: aliceblue;border: 1px solid gainsboro">
        <form method="post"  action="#">
        <div class="row mt-4" >
            <div class="col" align="right">
            <div class="col">
                    <div class="form-group mt-5">
                    <input type="checkbox" name="first" disabled id="dri" class="checker"  checked align="right">
                    <label for="dri"><img src="Images/driver.PNG"></label>
                    </div>
            </div>
        </div>
        </div>
        </form>
        <?php
        include_once "FSP_Database.php";
        $dta = '';
        $dta =array();
        $conn = new FSP_Database();
        $dta = array();

        $val = $conn->dispaly_seats($exolded_Array[2],$exolded_Array[3],$exolded_Array[0],$exolded_Array[1]);
        if (!empty($val)){
        $dta = explode(",",$val);
        }
        else{

        }

        ?>
        <div class="row mt-2">
            <div class="col" align="right">
                <input type="checkbox" name="four" value="4" id="4" class="checker" <?php if (in_array('4',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="4"><img src="Images/seat%204.PNG"></label>
            </div>
            <div class="col" align="left">
                <input type="checkbox" value="3" id="3" class="ml-2 checker" <?php if (in_array('3',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="3">3</label>
            </div>
            <div class="col" align="right">
                <input type="checkbox" id="2" value="2" class="ml-3 checker" <?php if (in_array('2',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="2"><img src="Images/seat%202.PNG"></label>
            </div>
            <div class="col">
                <input type="checkbox" value="1" id="1" class="ml-2 checker" <?php if (in_array('1',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="1"><img src="Images/seat%201.PNG"></label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col" align="right">
                <input type="checkbox" value="8" id="8" class="checker" <?php if (in_array('8',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="8"><img src="Images/se.PNG"></label>
            </div>
            <div class="col" align="left">
                <input type="checkbox" value="7" id="7" class="ml-2 checker" <?php if (in_array('7',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="7"><img src="Images/seat%207.PNG"></label>
            </div>
            <div class="col" align="right">
                <input type="checkbox" value="6" id="6" class="ml-3 checker" <?php if (in_array('6',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="6"><img src="Images/seat%206.PNG"></label>
            </div>
            <div class="col">
                <input type="checkbox" value="5" id="5" class="ml-2 checker" <?php if (in_array('5',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="5"><img src="Images/seat%205.PNG"></label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col" align="right">
                <input type="checkbox" value="12" id="12" class="checker" <?php if (in_array('12',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="12"><img src="Images/seat%2012.PNG"></label>
            </div>
            <div class="col" align="left">
                <input type="checkbox" value="11" id="11" class="ml-2 checker" <?php if (in_array('11',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="11"><img src="Images/seat%2011.PNG"></label>
            </div>
            <div class="col" align="right">
                <input type="checkbox" value="10" id="10" class="ml-3 checker" <?php if (in_array('10',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="10"><img src="Images/seat%2010.PNG"></label>
            </div>
            <div class="col">
                <input type="checkbox" value="9" id="9" class="ml-2 checker" <?php if (in_array('9',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="9"><img src="Images/seat%209.PNG"></label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col" align="right">
                <input type="checkbox" value="16" id="16" class="checker" <?php if (in_array('16',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="16"><img src="Images/seat%2016.PNG"></label>
            </div>
            <div class="col" align="left">
                <input type="checkbox" value="15" id="15" class="ml-2 checker" <?php if (in_array('15',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="15"><img src="Images/seat%2015.PNG"></label>
            </div>
            <div class="col" align="right">
                <input type="checkbox" value="14" id="14" class="ml-3 checker" <?php if (in_array('14',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="14"><img src="Images/seat%2014.PNG"></label>
            </div>
            <div class="col">
                <input type="checkbox" value="13" id="13" class="ml-2 checker" <?php if (in_array('13',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="13"><img src="Images/seat%2013.PNG"></label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col" align="right">
                <input type="checkbox" value="20" id="20" class="checker" <?php if (in_array('20',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="20"><img src="Images/seat%2020.PNG" </label>
            </div>
            <div class="col" align="left">
                <input type="checkbox" value="19" id="19" class="ml-2 checker" <?php if (in_array('19',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="19"><img src="Images/seat%2019.PNG"></label>
            </div>
            <div class="col" align="right">
                <input type="checkbox" value="18" id="18" class="ml-3 checker" <?php if (in_array('18',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="18"><img src="Images/seat%2018.PNG"></label>
            </div>
            <div class="col">
                <input type="checkbox" value="17" id="17" class="ml-2 checker" <?php if (in_array('17',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="17"><img src="Images/seat%2017.PNG"></label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col" align="right">
                <input type="checkbox" value="24" id="24" class="checker" <?php if (in_array('24',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="24"><img src="Images/seat%2024.PNG" </label>
            </div>
            <div class="col" align="left">
                <input type="checkbox" value="23" id="23" class="ml-2 checker" <?php if (in_array('23',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="23"><img src="Images/seat%2023.PNG"></label>
            </div>
            <div class="col" align="right">
                <input type="checkbox" value="22" id="22" class="ml-3 checker" <?php if (in_array('22',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="22"><img src="Images/seat%2022.PNG" </label>
            </div>
            <div class="col">
                <input type="checkbox" value="21" id="21" class="ml-2 checker" <?php if (in_array('21',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="21"><img src="Images/seat%2021.PNG"></label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col" align="right">
                <input type="checkbox" value="28" id="28" class="checker" <?php if (in_array('28',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="28"><img src="Images/seat%2028.PNG" </label>
            </div>
            <div class="col" align="left">
                <input type="checkbox" value="27" id="27" class="ml-2 checker" <?php if (in_array('27',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="27"><img src="Images/seat%2027.PNG" </label>
            </div>
            <div class="col" align="right">
                <input type="checkbox" value="26" id="26" class="ml-3 checker" <?php if (in_array('26',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="26"><img src="Images/seat%2026.PNG"></label>
            </div>
            <div class="col">
                <input type="checkbox" value="25" id="25" class="ml-2 checker" <?php if (in_array('25',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="25"><img src="Images/seat%2025.PNG"></label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col" align="right">
                <input type="checkbox" value="32" id="32" class="checker" <?php if (in_array('32',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="32"><img src="Images/seat%2032.PNG" </label>
            </div>
            <div class="col" align="left">
                <input type="checkbox" value="31" id="31" class="ml-2 checker" <?php if (in_array('33',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="31"><img src="Images/seat%2031.PNG" </label>
            </div>
            <div class="col" align="right">
                <input type="checkbox" value="30" id="30" class="ml-3 checker" <?php if (in_array('34',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="30"><img src="Images/seat%2030.PNG"></label>
            </div>
            <div class="col">
                <input type="checkbox" value="29" id="29" class="ml-2 checker" <?php if (in_array('29',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="29"><img src="Images/seat%2029.PNG" </label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col" align="right">
                <input type="checkbox" value="36" id="36" class="checker" <?php if (in_array('6',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="36"><img src="Images/seat%2036.PNG" </label>
            </div>
            <div class="col" align="left">
                <input type="checkbox" value="35" id="35" class="ml-2 checker" <?php if (in_array('35',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="35"><img src="Images/seat%2035.PNG"></label>
            </div>
            <div class="col" align="right">
                <input type="checkbox" value="34" id="34" class="ml-3 checker" <?php if (in_array('34',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="34"><img src="Images/seat%2034.PNG"></label>
            </div>
            <div class="col">
                <input type="checkbox" value="33" id="33" class="ml-2 checker" <?php if (in_array('33',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="33"><img src="Images/seat%2033.PNG" </label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col" align="right">
                <input type="checkbox" value="40" id="40" class=" checker" <?php if (in_array('40',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="40"><img src="Images/seat%2040.PNG" </label>
            </div>
            <div class="col" align="left">
                <input type="checkbox" value="39" id="39" class=" checker" <?php if (in_array('39',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="39"><img src="Images/seat%2039.PNG" </label>
            </div>
            <div class="col" align="right">
                <input type="checkbox" value="38" id="38" class="checker" <?php if (in_array('38',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="38"><img src="Images/seat%2038.PNG"></label>
            </div>
            <div class="col">
                <input type="checkbox" value="37" id="37" class=" checker" <?php if (in_array('37',$dta)){
                    echo "checked='checked'";
                    echo "disabled='disabled'";
                } ?>>
                <label for="37"><img src="Images/seat%2037.PNG"></label>
            </div>

        </div>
</div>

<div class="col-10 col-sm-10 col-md-6 col-lg-6 ml-4" style="border: 1px solid gainsboro;border-radius: 15px">
    <h1 class="text text-primary p-2">Booking Detail</h1>
    <div class=" row">
        <div class="col-6 mt-3" align="center" style="border-right: 1px solid gray"><img src="Images/logo.png" height="100px"></div>
        <div class="col-6 mt-4" align="center" style="height: 30px">
            <form method="post">
                <?php
                date_default_timezone_set('Asia/Karachi');
                $vd = date("d-m-y");
                $vt = date("G:i:s");
                ?>
                <h6><b>Service:</b> Youtong Travels</h6>
                <h6><b>Departure Date:</b> <?php echo $exolded_Array[0]; ?></h6>
                <h6><b>Departure Time:</b> <?php echo $exolded_Array[1]; ?></h6>
            </form>
        </div>

    </div>
    <h2 class="text text-primary mt-3" style="vert-align: middle">Route:</h2>
    <div class="row mt-2">
        <div class="col-4" style="height: 100px;border-right: 1px solid gray">
            <h5 style="margin-top:40px" align="center" ><?php echo $exolded_Array[2]?></h5>
        </div>
        <div class="col-4" style="height: 100px;border-right: 1px solid gray">
            <img src="Images/route.PNG" style="margin-top: 10px" width="160px" height="100px">
        </div>
        <div class="col-4" style="height: 100px;border-right: 1px solid gray">
            <h5 style="margin-top:40px" align="center" ><?php echo $exolded_Array[3]?></h5>
        </div>
    </div>
<form method="post" action="payment.php">
    <div class="row mt-2">
        <h2 class="text text-primary mt-3" style="vert-align: middle">Fare:</h2>
        <div class="col-6 mt-3" align="right"><input type="text" readonly name="fare" class="text text-danger border" value="<?php echo $exolded_Array[4];?>"></div>
    </div>

    <h5 class="text text-primary mt-3">Please select Your Seats:</h5>
    <div class="row mt-4">
        <div class="col-2">
            <label class="ml-4"><img src="Images/booked.PNG" width="75px" height="75px"><br><b>Booked</b> </label>
        </div>
        <div class="col-2">
            <label class=""><img src="Images/Available.PNG" width="75px" height="75px"><br><b>Available</b> </label>
        </div>
        <div class="col-2">
            <label class=""><img src="Images/ladies.PNG" width="75px" height="75px"><br><b>Ladies</b> </label>
        </div>
        <div class="col-2">
            <label class=""><img src="Images/driver.PNG" width="75px" height="55px"><br><b>Reserved For Driver</b> </label>
        </div>
    </div>
    <div class="row mt-3" >

            <div class="col-6"><label class="text text-primary"><b>Selected:</b><input type="text" id="count" name="number" required style="height: 40px;border-radius: 10px" readonly></label></div>
            <div class="col-6"><form action="payment.php" method="post"> <label class="text text-primary"><b>Seats No.</b><input type="text" id="text" name="seat"   style="height: 40px;border-radius: 10px" required></label></form></div>
        <div align="center">
            <button class="btn btn-primary mt-3 mb-3" name="sub" type="submit" value="submit" style="width: 350px;height: 70px">Confirm Booking</button>
        </div>
        </div>
</form>
</div>
</div>
</div>
<footer>
    <div class="container-fluid bg-dark mb-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" style="border-right: 0.5px solid slategrey;padding: 30px">
                <h1 style="font-size: 25px;color: white;padding: 55px 55px 5px 55px">About Us</h1>
                <p style="font-size: 20px;color: white;padding: 4px 30px 4px 55px">Youtong Travels provide transportation and logistics services all over Pakistan with a track record of outstanding comfort, security and responsibility, playing a vital role in economic growth of country.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" style="border-right: 0.5px solid slategrey;padding: 20px">
                <div class="row" style="border-bottom: 0.5px solid slategrey">
                    <h1 style="font-size: 25px;color: white;padding: 55px 55px 5px 55px">Latest News</h1>
                    <a style="font-size: 20px;color: white;padding: 4px 30px 6px 79px">Youtong Travels Online Booking</a>
                    <div class="post-meta m-2 text-muted mb-5" style="font-size: 20px;color: white;padding-left: 76px">Feb 12, 2020</div>
                </div>

                <div class="row" >
                    <a style="font-size: 20px;color: white;padding: 40px 30px 6px 79px">Youtong Travels Starting Naran Kaghan Route</a>
                    <div class="post-meta m-2 text-muted " style="font-size: 20px;color: white;padding-left: 76px">March 12, 2020</div>
                </div>

            </div>

            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" style="border-right: 0.5px solid slategrey;padding: 20px">
                <h1 style="font-size: 25px;color: white;padding: 55px 55px 5px 55px">Services</h1>
                <div class="row" style="border-bottom: 0.5px solid slategrey">
                    <a style="font-size: 20px;color: white;padding: 10px 50px 10px 90px" class="mb-4" href="#">YT Logistics</a>
                </div>

                <div class="row" style="border-bottom: 0.5px solid slategrey">
                    <a style="font-size: 20px;color: white;padding: 10px 50px 10px 90px" class="mb-4" href="#">YT Tours</a>
                </div>
                <div class="row" >
                    <a style="font-size: 20px;color: white;padding: 10px 50px 10px 90px"  href="#">YT Cargo</a>
                </div>

            </div>

            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" style="border-right: 0.5px solid slategrey;padding: 20px">
                <h1 style="font-size: 25px;color: white;padding: 55px 55px 5px 55px">Get In Touch</h1>
                <div class="row" style="border-bottom: 0.5px solid slategrey">
                    <a style="font-size: 20px;color: white;padding: 30px 50px 30px 90px" class="mb-4" href="#"><i class="fas fa-map-marker-alt"style="
                    font-size: 45px"></i> Youtong Travels Band Road Lahore, Pakistan</a>
                </div>

                <div class="row" s>

                    <h1 style="font-size: 20px;color: white;padding: 30px 50px 0px 90px" class="text-muted" href="#"> <i class="fas fa-phone-alt" style="
                font-size: 35px;color: white;margin-right: 15px"></i>We are Available</h1>
                    <p style="font-size: 25px;color: white;padding: 5px 50px 5px 90px">UAN: 111-22-44-88
                        MOB: 03 111 22 44 88</p>
                </div>

            </div>
        </div>
    </div>
</footer>
</body>
</html>