<?php   
    session_start();
    if(!isset($_SESSION['id'])){  
        header("location: login.php");
    }
?>

<html>
    <head>
        <title>Contact Teacher</title>
    </head>
     <center>
    <fieldset>
        
       <legend><h1><span>Teacher's  Emails and Phone Number's</span></h1></legend>
    
    
    <table border="1" width="500px">
        <tr><b>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            </tr>
        <tr>
            <td>MR.X</td>
            <td>abc@rcc.edu</td>
            <td>01777777777</td>
            
        </tr>
                    

        <tr>
            <td>MR.A</td>
            <td>abc@rcc.edu</td>
            <td>01777777777</td>
            
        </tr>
        <tr>
            <td>MR.B</td>
            <td>abc@rcc.edu</td>
            <td>01777777777</td>
            
        </tr>
        <tr>
            <td>MR.C</td>
            <td>abc@rcc.edu</td>
            <td>01777777777</td>
            
        </tr>
        <tr>
            <td>MR.D</td>
            <td>abc@rcc.edu</td>
            <td>01777777777</td>
            
        </tr>
        <tr>
            <td>MR.E</td>
            <td>abc@rcc.edu</td>
            <td>01777777777</td>
            
        </tr>
    </table>

    <br>
    <br>
    <a href="student.php">Student Page</a>
    </center>
    

    </fieldset>
    
</html>