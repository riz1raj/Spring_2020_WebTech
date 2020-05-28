<?php   
    session_start();
    if(!isset($_SESSION['id'])){  
        header("location: login.php");
    }
?>

<html>
    <head>
        <title>Grades</title>
    </head>
      <center>
    <fieldset>
        
     <legend><h1><span>Grade Given By Teachers</span></h1></legend> 
    
    
    <table border="1" width="500px">
        <tr><b>
            <th>Subject</th>
            <th>Total Number</th>
            <th>You Got</th>
            <th>GPA</th>
            </tr>
        <tr>
            <td>AAA</td>
            <td>100</td>
            <td>88/+2</td>
            <td>A+</td>
            
        </tr>
                    

        <tr>
            <td>BBB</td>
            <td>100</td>
            <td>92</td>
            <td>A+</td>
            
        </tr>
        <tr>
            <td>CCC</td>
            <td>100</td>
            <td>76/+4</td>
            <td>B+</td>
            
        </tr>
        <tr>
            <td>DDD</td>
            <td>100</td>
            <td>83</td>
            <td>B+</td>
            
        </tr>
        <tr>
            <td>EEE</td>
            <td>50</td>
            <td>45</td>
            <td>A+</td>
            
        </tr>
        <tr>
            <td>FFF</td>
            <td>100</td>
            <td>75</td>
            <td>B</td>
    
        </tr>
    </table>
    <br>
    <a href="student.php">Student Page</a>
    </center>
    

    </fieldset>
    
</html>