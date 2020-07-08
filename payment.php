<?php
session_start();
$count ='';
$Fare = '';
$id = '';
$name='';
$phone ='';
$user_email = '';
$user_cnic = '';
$var = $_SESSION['ex'];
if (isset($_POST['seat']))
{
    $seat = $_POST['seat'];
}
if (isset($_POST['fare']))
{
    $Fare = $_POST['fare'];
}
if (isset($_POST['number']))
{
    $count = $_POST['number'];
}
$total = (int)$Fare * (int)$count;

include_once 'FSP_Database.php';
$userConn = new FSP_Database();
$qu = $userConn->user_info($var[5]);
foreach ($qu as $qa)
{
    $name = $qa['username'];
    $phone = $qa['Phone'];
    $user_email = $qa['Email'];
    $user_cnic = $qa['CNIC'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Summary</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="fsp.css">
    <script src="Library.js"></script>

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
    <img src="Images/1628632.jpg" alt="Snow" style="width:100%;height: 500px" class="mt-4">
    <div class="bottom-left">Payment Summary</div>
</div>

<div class="container mb-5 mt-5"  >
        <div class="col-11 col-sm-11 col-lg-12 col-xl-12 ml-4 p-4" style="border: 1px solid gainsboro;border-radius: 10px">
            <form method="post">

                <?php
                include_once "FSP_Database.php";
                if (isset($_POST['checkout']))
                {
                    $name = $_POST['name'];
                    $phn = $_POST['phn'];
                    $email = $_POST['email'];
                    $cnic = $_POST['cnic'];
                    $depa = $var[2];
                    $arri = $var[3];
                    $date = $var[0];
                    $time = $var[1];
                    $seat = $_POST['S_seats'];
                    $Fare = $_POST['Fare'];
                    $t = $_POST['total'];

                    $conn = new FSP_Database();
                    $q = $conn->insert_booking($name,$phn,$email,$cnic,$depa,$arri,$date,$time,$seat,$Fare,$t);
                    if ($q)
                    {
                        ?>
                        <script type="text/javascript">
                            alert("Succesfuly Booked");
                            window.location.href = "online_booking.php";
                        </script>
                        <?php

                    }

                }
                ?>
                <h1 class="text text-primary ">Payment Summary</h1>
            <div class="row mt-2">
                <div class="col-6" align="left"><h5 class="text text-muted">Service</h5></div>
                <div class="col-6" align="right"><h5 class="text text-muted">Youtong Travels</h5></div>
            </div>
            <div class="row mt-1">
                <div class="col-6" align="left"><h5 class="text text-muted">Route</h5></div>
                <div class="col-6" align="right"><h5 class="text text-muted"><?php echo $var[2]."-".$var[3]?></h5></div>
            </div>
            <div class="row mt-1">
                <div class="col-6" align="left"><h5 class="text text-muted">Deparure Date</h5></div>
                <div class="col-6" align="right"><h5 class="text text-muted"><?php echo $var[0]; ?></h5></div>
            </div>
            <div class="row mt-1">
                <div class="col-6" align="left"><h5 class="text text-muted">Deparure Time</h5></div>
                <div class="col-6" align="right"><h5 class="text text-muted"><?php echo $var[1]; ?></h5></div>
            </div>
            <div class="row mt-1">
                <div class="col-6" align="left"><h5 class="text text-muted">Seats</h5></div>
                <div class="col-6" align="right"><input type="text" name="S_seats" class="text-muted border1"
                    value="<?php  if (isset($seat))
                    {echo $seat;}?>"></div>
            </div>
                <div class="row mt-1" style="border-bottom: 1px solid darkgrey">
                    <div class="col-6" align="left"><h5 class="text text-muted">Fare</h5></div>
                    <div class="col-6" align="right"><input type="text" name="Fare" class="text-muted border1"
                                                            value="<?php  if (isset($Fare))
                                                            {echo $Fare;}?>"></div>
                </div>
            <div class="form-group mt-3">
                <label>Name:</label>
                <span class="text-danger">* <?php echo "<br>"?></span>
                <input type="text" class="form-control" name="name"readonly value="<?php echo $name;?>" required >
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <span class="text-danger">* <?php echo "<br>"?></span>
                <input type="number" class="form-control" name="phn" readonly value="<?php echo $phone?>" required >
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email"  readonly value="<?php echo $user_email?>" required>
            </div>
            <div class="form-group">
                <label>CNIC:</label>
                <span class="text-danger">* <?php echo "<br>"?></span>
                <input type="number" class="form-control" name="cnic"  readonly value="<?php echo $user_cnic?>" readonly required>
            </div>

            <div class="row mt-1">
                <div class="col-6" align="left"><h5 class="text text-muted">Total</h5></div>
                <div class="col-6" align="right"><h5><input type="text" name="total" class="border text-danger" readonly value="<?php
                        if (isset($Fare) && isset($count)) {
                            echo $total;
                        }
                        ?>" </h5></div>
            </div>
        <div align="center">
            <button  data-toggle="modal" data-target="#myModal" class="btn btn-primary mt-5 mb-3" name="checkout" type="submit" value="submit" style="width: 350px;height: 70px">Checkout</button>
        </div>

            </form>
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
                    <a style="font-size: 20px;color: white;padding: 10px 50px 10px 90px" class="mb-4" href="Youtong_Express.html">YT Express</a>
                </div>

                <div class="row" style="border-bottom: 0.5px solid slategrey">
                    <a style="font-size: 20px;color: white;padding: 10px 50px 10px 90px" class="mb-4" href="Youtong_Logistics.html">YT Logistics</a>
                </div>
                <div class="row" >
                    <a style="font-size: 20px;color: white;padding: 10px 50px 10px 90px"  href="Youtong_Tour.html">YT Tour</a>
                </div>

            </div>

            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" style="border-right: 0.5px solid slategrey;padding: 20px">
                <h1 style="font-size: 25px;color: white;padding: 55px 55px 5px 55px">Get In Touch</h1>
                <div class="row" style="border-bottom: 0.5px solid slategrey">
                    <a style="font-size: 20px;color: white;padding: 30px 50px 30px 90px" class="mb-4" href="#"><i class="fas fa-map-marker-alt"style="
                    font-size: 45px"></i> Faisal Movers, Abdullah Travels Band Road Lahore, Pakistan</a>
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