<?php   
    session_start();
    if(!isset($_SESSION['id'])){  
        header("location: login.php");
    }
?>

<html>
    <head>
        <title>Finance Info</title>
    </head>
    <center>
    <fieldset>
        
        <legend><h1>Your Financial Info</h1></legend>
    
    
    <table border="1" width="500px">
        <tr><b>
            <th>Reason</th>
            <th>Amount To Pay</th>
            <th>Due</th>
            <th>Status</th>
            
            </tr>
        <tr>
            <td>Mid Payment</td>
            <td>1000</td>
            <td>0</td>
            <td>Paid</td>
        
        </tr>
                    

        <tr>
           
            <td>Library fees</td>
            <td>100</td>
            <td>0</td>
            <td>Paid</td>
        </tr>
        <tr>
            
            <td>Sports</td>
            <td>100</td>
            <td>0</td>
            <td>Paid</td>
        </tr>
        <tr>
            
            <td>Transport</td>
            <td>500</td>
            <td>300</td>
            <td>Not Paid</td>
        </tr>
        <tr>
            
            <td>Penalty</td>
            <td>300</td>
            <td>300</td>
            <td>Due</td>
        </tr>
        
    </table>
    <br>
    <br>
    <a href="student.php">Student Page</a>
    </center>
    

    </fieldset>
    
</html>