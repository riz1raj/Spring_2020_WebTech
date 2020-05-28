<?php   
    session_start();
    if(!isset($_SESSION['id'])){  
        header("location: login.php");
    }
?>


<html>
    <head>
        <title>Exam Schedule</title>
    </head>

        <center>
    <fieldset>
        
        <legend><h1><span>MY EXAM SCHEDULE</span></h1></legend>
    
    
    <table border="1" width="500px">
        <tr><b>
            <th>Day</th>
            <th>9:00-11:00</th>
            <th>12:00-2:00</th>
            <th>03:00-05:00</th>
            </tr>
        <tr>
            <td>Saturday</td>
            <td>AAA</td>
            <td></td>
            <td></td>
        </tr>
                    

        <tr>
            <td>Sunday</td>
            <td>BBB</td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            <td>Monday</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td></td>
            <td>CCC</td>
            <td></td>
        </tr>
        <tr>
            <td>Wedneday</td>
            <td></td>
            <td></td>
            <td>BBB</td>
            
        </tr>
        <tr>
            <td>Thurusday</td>
            <td></td>
            <td>CCCC</td>
            <td></td>
        </tr>
    </table>
    <br>
    <br>
    <a href="student.php">Student Page</a>
    </center>
    
        
    </fieldset>
    
</html>