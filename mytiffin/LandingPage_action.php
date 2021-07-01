
<?php
include('Include/config.php');


$em=$_POST['email'];
$pwd=$_POST['password'];

if(isset($_POST['submit']))

{

$conn = new mysqli($DBserver,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
	trigger_error('Database connection failed: '. $conn->connect_error,E_USER_ERROR);
}
$sql='SELECT  * from customer where Email=?';

$stmt=$conn->prepare($sql);
if($stmt==false)
{
	trigger_error('Wrong SQL '. $sql.'Error'.$conn->error,E_USER_ERROR);
}

$stmt->bind_param('s', $em);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows>0)
{
$stmt->bind_result($id,$firstname,$lastname,$email,$password,$type);
while($stmt->fetch()){

if($pwd==$password)
		{
			$_SESSION["Loggedin"]=true;
			$_SESSION["customerid"]=$id;
$_SESSION["customerfirstname"]=$firstname;
$_SESSION["customerlastname"]=$lastname;
$_SESSION["customeremail"]=$email;
$_SESSION["customertype"]=$type;
setcookie("customeremail",$email,time()+60*60*24*30);

	}
	if($pwd==$password)
	{
		
		if ($type == "A") {
				
				header("Location:adminhome.php");
			}
			else if ($type == "C") {
				
				header("Location:welcome.php");	
			}
			else{
				header("Location:unauthorizeduser.php");
			}

}

else
	header("Location:LandingPage.php?status=PNM");


}
}
}

?>