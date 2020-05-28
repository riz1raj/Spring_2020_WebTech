<?php   
    session_start();
    if(!isset($_SESSION['id'])){  
        header("location: login.php");
    }
?>




<html>
    <head>
        <title>class routine</title>
    </head>

    <center>

    <fieldset>
        
       <legend><h1><span>CLASS ROUTINE</span></h1></legend>  
    
    
    <table border="1" width="500px">
        <tr><b>
            <th>Day</th>
            <th>9:10</th>
            <th>10:50</th>
            <th>12:30</th>
            <th>2:30</th>
            </tr>
        <tr>
            <td>Sat</td>
            <td>Bangla</td>
            <td>English</td>
            <td></td>
            <td>Math</td>
        </tr>
                    

        <tr>
            <td>Sun</td>
            <td>Bangla 2nd</td>
            <td>English 2nd</td>
            <td></td>
            <td>Higher Math</td>
        </tr>
        <tr>
            <td>Mon</td>
            <td>Bangla</td>
            <td>English</td>
            <td></td>
            <td>Math</td>
        </tr>
        <tr>
            <td>Tues</td>
            <td>Physics/Economics</td>
            <td>Chem/Accouting</td>
            <td></td>
            <td>EU</td>
        </tr>
        <tr>
            <td>Wed</td>
            <td>ICT</td>
            <td>AAA</td>
            <td>BBB</td>
            <td></td>
        </tr>
        <tr>
            <td>Thur</td>
            <td></td>
            <td>CCCC</td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <br>
    <br>
    <a href="student.php">Student Page</a>
    </center>
   

    </fieldset>
    
</html>