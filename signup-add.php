<?php
   include "config/conn.php";
  
   if(isset($_POST["signup"])){
      
          $first= mysqli_real_escape_string($conn,$_POST["first"]);
          $last= mysqli_real_escape_string($conn,$_POST["last"]);
          $gender= mysqli_real_escape_string($conn,$_POST["gender"]);
          $courses= mysqli_real_escape_string($conn,$_POST["courses"]);

          $sql= "INSERT INTO sign-up(names, Age,Gender,Course) VALUES('$first', '$last', '$gender', '$courses');";

          if(mysqli_query($conn, $sql)){
              echo "success";
           }

          else{
             echo "Query Error: ".mysqli_error($conn);
           }
        
       
   }

?>