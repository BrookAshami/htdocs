<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'regester');
    define('TB_NAME', 'reg');
 
    function ConnectDB(){
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
        if($link == false){
            die("Error: could not connect." . mysqli_connect_error());
        }
        echo "connect susccessfully. Host info: " . mysqli_get_host_info($link);
        return $link;
    }
    function Connect_createdDB(){
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);
        if($link == false){
            die("Error: could not connect." . mysqli_connect_error());
        }
        return $link;
    }
    function CreateDB(){
        $link = ConnectDB();
        $sql = "CREATE DATABASE DB_NAME";
        if(mysqli_query($link, $sql)){
            echo "Database created successfully";     
        }else{
            echo "Error: Could not able to execute $sql. " . mysqli_error($link);
        }
        mysqli_close($link);
    }
    function createTable(){
        $link = Connect_createdDB();
        $sql = "CREATE TABLE TB_NAME(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            first_name VARCHAR(30) NOT NULL,
            last_name VARCHAR(30) NOT NULL,
            email VARCHAR(70) NOT NULL UNIQUE
            )";
        if(mysqli_query($link, $sql)){
            echo "Table created successfully. ";
        }else{
            echo "Error: Could not able to execute $sql. " . mysqli_error($link);
        }
        mysqli_close($link);
    }

    function insert_Data(){
        $link = Connect_createdDB();
        $sql = "INSERT INTO TB_NAME( first_name, last_name, email) VALUES 
        ('brook', 'ashami', 'gashami@yahoo.coom')";
        if(mysqli_query($link, $sql)){
            echo "Record inserted successfully. ";
        }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        mysqli_close($link);
    }

    function formData_Insert(){
        $link = Connect_createdDB();
        
        $sql = "INSERT INTO reg( first_name, last_name, email) VALUES  (?, ? ,?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
            $first_name = $_REQUEST['first_name'];
            $last_name = $_REQUEST['last_name'];
            $email = $_REQUEST['email'];

            if(mysqli_stmt_execute($stmt)){
                echo "Records inserted successfully. ";
            }else{
                echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    }

    function seletctDB(){
        $link = Connect_createdDB();
        $sql = "SELECT * FROM TB_NAME";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>first_name</th>";
                    echo "<th>last_name</th>";
                    echo "<th>email</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }    
        // Close connection
        mysqli_close($link); 
	}



    //Validating Form data using AJAX
	function ajaxData(){		
		if($_SERVER["REQUEST_METHOD"] == "POST"){			
			$formInfo = array("fName", "lName", "userName","PW", "confirmPW","email", "phone",	"comment");
			for($i = 0; $i < count($formInfo); $i++){            
				$formInfo[$i] = htmlspecialchars(trim($_POST[$formInfo[$i]]));
				if(!empty($formInfo[$i])){
					echo  "<p> Hi <b> $formInfo[$i] </b>. Your comment has been received sussessfully. </p>";
				}else{
					echo "<p>Please fill all the fields in the form!</p>";
				}
			}

		}else{
			echo "<p> Something went wrong. Please try again. </p>";
		} 
	}
	function actionPage(){
		//database connection code
		//$con =mysqli_connect('localhost', 'database_user', 'database_password', 'database');
		$con =mysqli_connect('localhost', 'root', '', 'htmlDB');
		//get the post record
		/*
		$formName = aray('fName', 'lName', 'userName', 'PW', 'confirmPW', 'email', 'phone');
		for($i = 0; $i < count(formName); $i++){
			$formName[$i] = $_POST[$i];
		}
		*/
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
	}
    
?>