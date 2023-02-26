

<?php
function authenticate_user(){
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Secret stash"');
    
    exit();
}
/*
if(! isset($_SERVER('PHP_AUTH_USER'))){
    authenticate_user();
}else{
    mysqli_connect("localhost", "brook", "") or die("Can't connect to database server!");
    mysqli_select_db("databaseName") or die("Can't select authentication database!");
    $sql = "SELECT username, pwds FROM user WHERE username='$_SERVER[PHP_AUTH_USER]' AND pwds = MD5('$_SERVER[PHP_AUTH_PW]')";
    $result = mysqli_query($sql);
    if(mysqli_num_rows($result) == 0){
        authenticate_user()
    }

}   
*/
  $valid_passwords = array ("brook" => "passw0rd");
  $valid_users = array_keys($valid_passwords);
  
  $user = $_SERVER['PHP_AUTH_USER'];
  $pass = $_SERVER['PHP_AUTH_PW'];
  
  $validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);
  
  if (!$validated) {
     authenticate_user();
  }
  
  // If arrives here, is a valid user.
  echo "<p>Welcome $user.</p>";
  echo "<p>Congratulation, you are into the system.</p>";
?>