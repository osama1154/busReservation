<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 12</title>

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
                <a class="nav-link" href="online_booking.php" onclick="window.open(this.href,'_self')">Online Booking</a>
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
    <img src="Images/1628632.jpg" alt="Snow" style="width:100%;height: 500px" class="mt-4">
    <div class="bottom-left">Sign Up</div>
</div>
<div class="container mb-5 col-4 p-3" style="border: 1px solid darkgrey;border-radius: 20px">
    <form method="post">
        <?php
        $name_error = '';
        $email_err = '';
        $phn_err = '';
        $cnci_err = '';
        require_once ('FSP_Database.php');
        $db= new FSP_Database();

        if(isset($_POST['submit']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $cnic=$_POST['cnic'];
            $phn=$_POST['phn'];

            if(strlen($username)<4)
            {
                $name_error = 'username must be 4 or more Characters ';
            }
            if (!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $email_err="Invalid Email Format";
            }
            if (!ctype_digit($phn))
            {
                $phn_err = "Only Numbers Are Allowed";
            }
            if (!ctype_digit($cnic))
            {
                $cnci_err = "Only Numbers Are Allowed";
            }
            if (empty($name_error) && empty($email_err) && empty($phn_err) && empty($cnci_err)) {
                $query = $db->signUp($username, $password, $email, $cnic, $phn);
            }
        }
        ?>
        <div class="container mt-4">
            <div align="center" class="mt-4 mb-4">
                <h1>Sign Up Here</h1>
            </div>
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required value="<?php if (isset($_POST['username'])) {echo $_POST['username'];} ?>"  class="form-control" style="border-radius: 10px">
                <span class="text text-danger"><?php echo $name_error?></span><br>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required class="form-control" style="border-radius: 10px"><br>
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="Email" class="form-control"  value="<?php if (isset($_POST['email'])){echo $_POST['email'];} ?>" style="border-radius: 10px">
                <span class="text text-danger"><?php echo $email_err;?></span> <br>
            </div>
            <div class="form-group">
                <input type="text" name="cnic" placeholder="CNIC (without dashes)" required value="<?php if (isset($_POST['cnic'])){echo $_POST['cnic'];} ?>" class="form-control" style="border-radius: 10px">
                <span class="text text-danger"><?php echo $cnci_err;?></span> <br>
            </div>
            <div class="form-group">
                <input type="text" name="phn" placeholder="Phone Number" required value="value="<?php if (isset($_POST['phn'])){echo $_POST['phn'];} ?>"" class="form-control" style="border-radius: 10px"><br>
                <span class="text text-danger"><?php echo $phn_err;?></span>
            </div>
            <div align="center" class="mb-3">
                <button type="submit" name="submit" class="btn btn-primary" style="width: 250px;height: 50px">Sign Up</button><br>
            </div>
            <div align="center" class="mb-5">
                <a href="login.php" class="text text-danger" style="font-weight: bold;font-size: 25px>">Already have an Account?Sign In</a>
            </div>
        </div>
    </form>

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

