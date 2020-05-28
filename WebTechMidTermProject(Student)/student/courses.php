<?php   
    session_start();
    if(!isset($_SESSION['id'])){  
        header("location: login.php");
    }
?>



<html>
    <head>
        <title>Courses</title>
    </head>


    <center> 

    <fieldset>


          <legend><h1><span>Selected Courses</span></h1></legend> 
          


    <table border="1" width="400px">

       
     <tr>
            <td><center>Bangla</center> </td>
         
     </tr>

     <tr>
            <td><center>English</center> </td>
         
     </tr>

     <tr>
            <td><center>Mathametics</center> </td>
         
     </tr>

     <tr>
            <td><center>ICT</center> </td>
         
     </tr>

     <tr>
            <td><center>Higher Mathematics</center> </td>
         
     </tr>

     <tr>
            <td><center>Grammer</center> </td>
         
     </tr>      

    </table>

                    <br>
                    <br>
        

    <a href="student.php">Student Page</a>
    </center>
    

    </fieldset>
    
</html>