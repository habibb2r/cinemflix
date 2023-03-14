<?php   
 $conn=mysqli_connect("localhost","root","","cinemaflix"); //database connection  
 //hostname, username, password, database name  
 if ($conn) {  
      echo "";  
 }else{  
      echo "Error";  
 }  
 //check database connect or not  
 $query="select * from movie_request";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not 
 
 if(isset($_POST['clear-data'])) {

     // Delete all data from my_table
     $sql = "DELETE FROM movie_request";
     if ($conn->query($sql) === TRUE) {
          header("location:../admin/dashboard.php");
     } else {
       echo "Error deleting data: " . $conn->error;
     }
   }
   $conn->close();
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title></title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color: black;  
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
               background-color: #8bca09;
               color: #000;
               padding: 10px; 
           }  
           table td{  
                padding: 12px;  
                color: gold;  
                font-size: 1em;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color: #797676;
                color: gold;
           }
           tbody{
               border: 2px gold solid;
           }  
           .heading{
               color: gold;
               margin: 20px 0;
               text-align:center;
           }
           #clear-data{
               padding: 10px 15px;
               border-radius: 15px;
               background: black;
               color: gold;
               border: 2px lightslategray solid;
               margin: 20px 0;
               text-align: center;
               position: absolute;
               top: 50px;
               right: 100px;
           }
           #clear-data:hover{
               padding: 10px 15px;
               border-radius: 15px;
               background: #e80808;
               color: #fdfdfd;
               border: 2px lightslategray solid;
               margin: 20px 0;
               text-align: center;
               position: absolute;
               top: 50px;
               right: 100px;
           }
      </style>  
 </head>  
 <body>  
 <div class="container">
           <h1 class="heading"> Movie Request List </h1>
      <table border="1">  
           <tr>  
                <th>Movie Name</th>  
                <th>Email</th>  
                  
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>   
                               <td>".$data['movie_name']."</td>  
                               <td>".$data['email']."</td>  
                                 
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>
      <form method="post">
          <button type="submit" name="clear-data" id="clear-data">Clear Requests</button>
     </form>  
 </div>  
 </body>  
 </html>  