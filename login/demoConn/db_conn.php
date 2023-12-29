
<?php 
$servername='localhost:4306'; 
$username = 'root'; 
$password = ''; 
$database = 'test_db'; 
  

$conn = new mysqli($servername, $username, $password, $database); 
  

if (!$conn){ 
    echo "Connection Unsuccessful!!!"; 
} 
echo "Connected!!";
  
// if($_SERVER["REQUEST_METHOD"] =="POST"){
//     $user=$_POST['uname'];
//     $pass = $_POST['upass'];
//     $country = $_POST['country'];

//     $sql = "INSERT INTO blogusers(uname, upass, ucountry) VALUES ('$user', '$pass', '$country')"  ;
//     $res = $conn->query($sql);
//     echo $res;
//     if($res){
//         echo "Login Successful";
        
//         header("Location: ./userSide/index.html"); 
        
//     }
//     else{
//         echo "Invalid username or passward";
//     }
//     echo $user;
// }

// $conn->close();

// 
?>