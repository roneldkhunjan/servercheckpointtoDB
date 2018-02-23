<?php


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sun";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection 
$sql5 = mysqli_query($conn, "SELECT websitename FROM webservices ");
while ($row=mysqli_fetch_array($sql5)) {
echo nl2br("\n\n");
       
       
       $string_version = implode('-->', $row);
       
 
    $websitename= $row['websitename'];
    
    $url2 = $websitename;
    echo nl2br("\n\n");
    print_r("$url2");
    echo nl2br("\n\n");
    
    
    
    $ch = curl_init($url2);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if($data = curl_exec($ch)){
    //require 'smsbigperllive.php';
    echo "SERVER is LIVE";
    echo nl2br("\n\n");
       
        
        
   $sql = "INSERT INTO serverstatus (website_name, status, date) VALUES ('$url2', 'SERVER-LIVE', CURDATE())";
    
    if($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }  
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

else{
    
    echo "SERVER is DOWN";
    echo nl2br("\n\n");
    require 'smsbigperldown.php';
    echo nl2br("\n\n");
    
    
     $sql = "INSERT INTO serverstatus (website_name, status, date) VALUES ('$websitename', 'SERVER-DOWN', CURDATE())";
    
    if($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }  
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
//    mail('roneld@bigperl.in',
//         'HELLO SERVER DOWN',
//         'SERVER IS DOWN',
//         'From: xxx@gmail.com');
    
    echo " SERVER DOWN!!!";
}

}
//Email complete Table
 $query1 = mysqli_query($conn, "SELECT * FROM serverstatus ");

   while ($row=mysqli_fetch_array($query1)) {
       
       echo nl2br("\n\n");
      
       
       $string_version = implode('-->', $row);
       
       $message .=("\n\n").
("ID  ")  .$row['id']
           .
("  ")
.$row['website_name']
           .
("  STATUS   ")
.$row['status']
                 .
("  DATE   ")
.$row['date'];
;
       
       

}
mail('roneld@bigperl.in',
         'SERVER STATUS',
          $message,
         'From: roneldkhunjan@gmail.com');





 

 


?>


