<?php
$delete_data = $_REQUEST['data'];
$del_exploded = explode(',',$delete_data);
include_once 'FSP_Database.php';
$conn = new FSP_Database();
$name = $del_exploded[0];
$cnic = $del_exploded[1];
$departure = $del_exploded[2];
$arrival = $del_exploded[3];
$bookingDate = $del_exploded[4];
$bookingTime = $del_exploded[5];
echo $name;echo $cnic;echo $departure;echo $arrival;echo $bookingDate;echo $bookingTime;
$q = $conn->cancelBooking($name,$cnic,$departure,$arrival,$bookingDate,$bookingTime);
if ($q)
{
    echo "Success";
    echo '
    <script type=text/javascript>
    var v = "Seat Cancelled Succesfully..!";
    alert(v);
    window.location.href = "cancel.php";
</script>
    ';

}
else
{
    echo "Error";
}
?>