<?php   
    session_start();
    if(!isset($_SESSION['id'])){  
        header("location: login.php");
    }
?>

<html>
    <head>
        <title>Attendence Info</title>
    </head>
    <center>
    <fieldset>
      
     <legend><h1><span>Attendence Infromation</span></h1></legend> 
    
    
   
    <table border="1" width="700px">
        <tr><b>
            <th>Teacher</th>
            <th>Course</th>
            <th>Attendence</th>
            
            </tr>
        <tr>
            <td>MR.A</td>
            <td>AAA</td>
            <td>4/10</td>
            
            
        </tr>
                    

        <tr>
            <td>MR.B</td>
            <td>BBB</td>
            <td>5/10</td>
            
            
        </tr>
        <tr>
            <td>MR.C</td>
            <td>CCC</td>
            <td>5/10</td>
        
            
        </tr>
        <tr>
            <td>MR.D</td>
            <td>DDD</td>
            <td>5/10</td>
        </tr>

        <tr>
            <td>MR.E</td>
            <td>EEE</td>
            <td>5/10</td>
        </tr> 
        <tr>
            <td>MR.F</td>
            <td>FFF</td>
            <td>5/10</td>
        </tr>
            
        
    </table>
    <br>
    <br>
    <a href="student.php">Student Page</a>
    </center>
      

    </fieldset>
    
</html>