
<?php 
    //database connection code
    //$con =mysqli_connect('localhost', 'database_user', 'database_password', 'database');
	$con =mysqli_connect('localhost', 'root', '', 'htmlDB');
    //get the post record
    $firstName 	= $_POST['fName'];
    $lastName 	= $_POST['lName'];
    $userName 	= $_POST['userName'];    
    $pw 		= $_POST['PW'];
    $confirmPW 	= $_POST['confirmPW'];
    $email 		= $_POST['email'];
    $phone 		= $_POST['phone'];

    //$sql = "INSERT INTO `tbl_html`(`id`, `tblFirstName`, `tblLastName`, `tblUserName`, `tblPW`, `tblConfirmPW`, `tblEmail`, `tblPhone`) VALUES(1, $firstName, $lastName, $userName, $pw, $confirmPW, '$email',$phone)"; 		
	$sql = "INSERT INTO `tbl_html`(`id`, `tblFirstName`, `tblLastName`, `tblUserName`, `tblPW`, `tblConfirmPW`, `tblEmail`, `tblPhone`) VALUES('0', '$firstName','$lastName', '$userName', '$pw', '$confirmPW', '$email','$phone')"; 		
	 
	//inset into database
	$rs = mysqli_query($con, $sql);
    if($rs){
        echo "Contact Record Inserted";
    }
?>	