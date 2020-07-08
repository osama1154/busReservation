<?php


class FSP_Database
{
    public function insert($name,$email,$phn,$company,$subject,$message)
    {
        $conn = new PDO("mysql:host=localhost;dbname=fsp","root", "");
        $insert = $conn->exec("Insert into contact_us (C_name,Email,phone,company,subject,Message) values('$name','$email','$phn','$company','$subject','$message')");
    }

    public function display_All($departure,$arrival,$curr,$sDate,$cDate)
    {
        $conn = new PDO("mysql:host=localhost;dbname=fsp", "root", "");
        if ($sDate == $cDate) {

            $query = $conn->query("select * From bus_schedule where Departure='$departure' and Arrival='$arrival' and Bus_Time > '$curr' ");
            return $query;
        }
        else{
            $query = $conn->query("select * From bus_schedule where Departure='$departure' and Arrival='$arrival'");
            return $query;
        }
    }
    public function insert_booking($name,$phone,$email,$cnic,$departure,$arrival,$date,$time,$seat,$fare,$total)
    {
        $conn = new PDO("mysql:host=localhost;dbname=fsp", "root", "");
        if ($conn)
        {
            $query = $conn->exec("Insert into booking_info (C_Name,Email,phone,Cnic,Departure,Arrival,B_Date,B_Time,Seat,Fare,Total) values('$name','$email','$phone','$cnic','$departure','$arrival','$date','$time','$seat','$fare','$total')");
                return $query;
        }
        else{
            echo "No Connection";
        }
    }
    public function dispaly_seats($departure,$arrival,$selected_date,$time)
    {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fsp";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "Select Seat from booking_info where Departure = '$departure' AND Arrival ='$arrival' AND B_Date = '$selected_date' AND B_Time = '$time'";
        $result = $conn->query($sql);

            // output data of each row
            $i =0;
            $cc='';
            while($row = $result->fetch_assoc()) {
                $cc =$cc.",".$row["Seat"];

            }

        return $cc;
    }

    public $dbconn;

    function __construct()
    {
        $this->dbconn = new PDO("mysql:host=localhost;dbname=fsp", 'root', '');
        if (!$this->dbconn) {
            die('Connection Failed');
        }

    }
    public function login($dArray)
    {
        $query = $this->dbconn->prepare("select user_id from users where Username=? and password=?");
        $query->execute($dArray);
        if ($query->rowCount()>0)
        {
            $row =  $query->fetch();
            return $row[0];
        }
        else
        {
            return false;
        }
    }
public function user_info($id)
{
    $conn = new PDO("mysql:host=localhost;dbname=fsp", "root", "");
    if ($conn)
    {
        $query = $conn->query("select username,Email,CNIC,Phone From users where user_id ='$id'");
        return $query;
    }
}

public function signUp($username,$password,$email,$cnic,$phone){
        $conn = new PDO("mysql:host=localhost;dbname=fsp",'root',"");
        if ($conn)
        {
            $query = $conn->exec("Insert Into users (username,password,Email,CNIC,Phone) values 
            ('$username','$password','$email','$cnic','$phone')");
        }
}
public function display_user($id)
{
    $conn = new PDO("mysql:host=localhost;dbname=fsp",'root',"");
    if ($conn){
        $query = $conn->query("select username,password,Email,CNIC,Phone from users where user_id='$id'");
        return $query;
    }
}

public function display_Booking($name,$cnic,$departure,$arrival,$selected_Date)
{
    $conn = new PDO("mysql:host=localhost;dbname=fsp",'root',"");
    if ($conn){
        $query = $conn->query("select Departure,Arrival,B_Date,B_Time from booking_info where C_Name='$name' and Cnic ='$cnic' and Departure ='$departure' and Arrival='$arrival' and B_Date ='$selected_Date'");
        return $query;
    }
}
public function cancelBooking($name,$cnic,$departure,$arrival,$bookingDate,$bookingTime)
{
    $conn = new PDO("mysql:host=localhost;dbname=fsp", 'root', "");
    if ($conn) {
        echo $name;echo $cnic;echo $departure;echo $arrival;echo $bookingDate;echo $bookingTime;
        $query = $conn->exec("Delete From booking_info where C_Name = '$name' and Cnic = '$cnic' and Departure = '$departure' and Arrival = '$arrival'and B_Date = '$bookingDate' and B_Time = '$bookingTime'");
        return $query;

    }
}
}