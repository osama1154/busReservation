<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bus Schedule</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="fsp.css">

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
<!--        <li class="nav-item" style="list-style: none">-->
<!--            <a class="nav-link"  style="margin-top: 5px;color: white"  href="#"><i class="fas fa-user-plus"></i> Sign Up</a>-->
<!--        </li>-->

    </div>
</nav>

<div class="container-fluidImg m-5">
    <img src="Images/busSchedule.jpg" alt="Snow" style="width:100%;height: 500px" class="mt-4">
    <div class="bottom-left">Bus Schedule</div>
</div>


<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="depart">Departure</label>
            <select name="depart" id="depart" class="form-control" required>
                <option  value="">Select Departure City..</option>
                <option  value="Faisalabad">Faisalabad</option>
                <option  value="Islamabad">Islamabad</option>
                <option  value="Lahore">Lahore</option>
            </select>
        </div>
        <div class="form-group">
            <label for="arrival">Arrival</label>
            <select name="arrival"  id="arrival" class="form-control" required>
                <option  value="">Select Arrival City..</option>
                <option  value="Faisalabad">Faisalabad</option>
                <option  value="Islamabad">Islamabad</option>
                <option  value="Lahore">Lahore</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div align="center">
            <button class="btn btn-primary mb-4" type="submit" value="submit" name="search_submit" style="width: 300px;height: 50px">Search Bus</button>
        </div>
    </form>
    <?php
    include "FSP_Database.php";

    date_default_timezone_set('Asia/Karachi');
    $curr = date('G:i:s');
    $data1='';
    $data1 = array();

    if (isset($_POST['search_submit'])) {
        $conn = new FSP_Database();
        $departure = $_POST['depart'];
        $arrival = $_POST['arrival'];
        $selected_Date = $_POST['date'];
        $curent_date = date('Y-m-d');
        $data1 = $conn->display_All($departure,$arrival,$curr,$selected_Date,$curent_date);

    }
    ?>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <th style="width: 20%">Departure</th>
            <th style="width: 20%">Arrival</th>
            <th style="width: 20%">Time</th>
            <th style="width: 20%">Fare</th>
            </thead>
            <tbody>
            <?php
            foreach ($data1 as $i => $da) {
                echo "
                         <tr>
                              <td style='width: 20%'>$da[0]</td>
                              <td style='width: 20%'>$da[1]</td>
                              <td style='width: 20%'>$da[2]</td>
                              <td style='width: 20%'>$da[3]</td>
                          </tr>
                        ";
            }
            ?>

            </tbody>
        </table>
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