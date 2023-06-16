<?php
    // $uName = $_POST['username'];
    // $password = $_POST['pass'];

    // $hostname = 'localhost'; 
    // $username = 'root'; 
    // $userpass = ''; 
    // $dbname = 'test'; 
    
    // $conn = mysqli_connect($hostname,$username,$userpass,$dbname);
    // if (!$conn) {
    //     die ("Connection Failed: ". mysqli_connect_error());
    // }
    // $sql = "select userName, pass FROM student";
    // $result = mysqli_query($conn,$sql);
    // if (mysqli_num_rows($result) > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         if ($row['userName'] == $uName && $row['pass'] == $password) {
    //             echo "Login Successful";
    //             header("location: home.html"); 
    //             exit(); 
    //         } 
    //     }
    // } else {
    //     echo "Username & password are wrong";
    // }
?>
<?php
    session_start();
?>
<?php
    $msg = '';
            
    if (isset($_POST['login']) && !empty($_POST['username']) 
       && !empty($_POST['pass'])) {
        
       if ($_POST['username'] == 'admin' && 
          $_POST['pass'] == 'admin') {
          $_SESSION['valid'] = true;
          $_SESSION['timeout'] = time();
          $_SESSION['username'] = 'admin';
          
          echo "Login Successful";
          header("location: home1.html"); 
          exit(); 

       }else {
          $msg = 'Wrong username or password';
       }
    }
?>
