<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Youtong Contact</title>

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
<div class="container-fluid ">
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

<div class="container-fluid">
    <div class="container-fluidImg m-5">
        <img src="Images/contactus.jpg" width="100%" height="500px">
        <div class="bottom-left">Contact  Us</div>
    </div>
</div>
<div align="center" style="margin-top: 50px;margin-bottom: 70px">
    <h1 class="text-muted">Get In Touch</h1>
    <p style="font-size: 23px" class="mb-4">
        If you have any questions about the services we provide simply use the form below. We try and respond to all queries and comments within 24 hours.
    </p>

</div>

<form action="#" method="post" class="m-5 p-4">
        <?php
        $name_error='';
        $phn_error ='';
        $email_err='';
        $subject_err='';


        if(isset($_POST['submit']))
        {
        $name=$_POST['name'];
        if (strlen($name)<3)
        {
        $name_error = "Name must be 3 or more characters";
        }
        else if(!ctype_alpha($name))
        {
        $name_error = 'Only alphabets are Allowed';
        }
        if (!ctype_digit($_POST['phn']))
        {
        $phn_error = "Only Numbers are Allowed";
        }
        if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
        $email_err = "Invalid Email Format";
        }
        if(strlen($_POST['subject'])<1)
        {
        $subject_err = "Required";
        }

    if(empty($name_error) && empty($email_err) && empty($subject_err) && empty($phn_error)) {
        $c_Name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phn'];
        $company = $_POST['company'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        include 'FSP_Database.php';
        $connection = new FSP_Database();
        $connection->insert($_POST['name'], $_POST['email'], $_POST['phn'], $_POST['company'], $_POST['subject'], $_POST['message']);

        $_POST['name']='';
        $_POST['email']='';
        $_POST['phn']='';
        $_POST['company']='';
        $_POST['subject']='';
        $_POST['message']='';
    }
        }
    ?>
<div class="container-fluid row">
    <div class="col">
            <div class="form-group">
                <label for="nameForm" class="need-validated">Your Name:</label>
                <span class="text-danger">* <?php echo "<br>"?></span>
                <input type="text" class="form-control" name="name" id="nameForm" required value="<?php if (isset($_POST['name'])) {echo $_POST['name'];} ?>">
                <span class="error text-danger"><?php echo $name_error;?> </span>
            </div>
            <div class="form-group">
                <label for="emailForm" class="need-validated">Your Email:</label>
                <span class="text-danger">* <?php echo "<br>"?></span>
                <input type="text" class="form-control" name="email" id="emailForm" required value="<?php if (isset($_POST['email'])) {echo $_POST['email'];} ?>">
                <span class="error text-danger"><?php echo $email_err;?> </span>
            </div>
            <div class="form-group">
                <label for="phnForm" class="need-validated">Your Phone Number:</label>
                <input type="number" class="form-control" name="phn" id="phnForm"  value="<?php if (isset($_POST['phn'])) {echo $_POST['phn'];} ?>">
                <span class="error text-danger"><?php echo $phn_error;?> </span>
            </div>
            <div class="form-group">
                <label for="compForm" class="need-validated">Your Comapny:</label>
                <input type="text" class="form-control" name="company" id="compForm" value="<?php if (isset($_POST['company'])) {echo $_POST['company'];} ?>">
            </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="subjname" class="need-validated">Enter Subject</label>
            <span class="text-danger">* <?php echo "<br>"?></span>
            <input type="text" class="form-control" name="subject" id="subjname" required value="<?php if (isset($_POST['subject'])) {echo $_POST['subject'];} ?>">
            <span class="error text-danger"><?php echo $subject_err;?> </span>
        </div>
        <div class="form-group">
            <label for="msg" class="need-validated">Your Message</label>
            <span class="text-danger">* <?php echo "<br>"?></span>
            <textarea id="msg" class="form-control" name="message" rows="9" required value="<?php if (isset($_POST['message'])) {echo $_POST['message'];} ?>"></textarea>
        </div>

    </div>
</div>
    <div align="center">
    <button type="submit" name="submit" class="btn btn-primary " style="width: 500px;margin-bottom: 20px;height: 70px;font-size: 25px">Submit</button>
    </div>

</form>
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