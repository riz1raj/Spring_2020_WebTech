<?php   
    session_start();
    if(!isset($_SESSION['id'])){  
        header("location: login.php");
    }
?>


<html>
    <head>
        <title>Library</title>
    </head>
        <center>

    <fieldset>
        
        <legend><h1><span>Regestered Boooks In Library</span></h1></legend>
            

    <table border="1" width="400px">

       
     <tr>
            <td><center>1.AAAA</center></td>
         
     </tr>

     <tr>
            <td><center>2.BBBB</center></td>
         
     </tr>

     <tr>
            <td><center>3.CCCC</center> </td>
         
     

    </table>

        
                    <br>
                    <br>
    <a href="student.php">Student Page</a>
    </center>
    

    </fieldset>
    
</html>