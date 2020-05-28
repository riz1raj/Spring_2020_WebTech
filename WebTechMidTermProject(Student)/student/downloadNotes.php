<?php   
    session_start();
    if(!isset($_SESSION['id'])){  
        header("location: login.php");
    }
?>


<html>
    <head>
        <title>Notes</title>
    </head>
        <center>
    <fieldset>
        
<legend><h1><span>Note/HW Uploaded By Teachers</span></h1></legend>
    
    
    <table border="1" width="500px">
        <tr><b>
            <th>Subject</th>
            <th>Download</th>
            
            </tr>
        <tr>
            <td>Home Work</td>
            <td><a href="www.google.com">Home Work for chapter One</a></td>
            
            
        </tr>
                    

        <tr>
            
            <td>Home Work 1</td>
            <td><a href="www.google.com">Home Work for chapter Two</a></td>
            
        </tr>
        <tr>
            
            <td>Home Work 2</td>
            <td><a href="www.google.com">Home Work for chapter Three</a></td>
            
        </tr>
        <tr>
            
            <td>Chapter 1</td>
            <td><a href="www.google.com">Home Work for chapter Four</a></td>
            
        </tr>
        <tr>
            
            <td>Chapter 2</td>
            <td><a href="www.google.com">Home Work for chapter Five</a></td>
            
        </tr>
        <tr>
           
            <td>Chapter 3</td>
            <td><a href="www.google.com">Home Work for chapter Six</a></td>
        
        </tr>
    </table>
    <br>
    <br>
    <a href="student.php">Student Page</a>
    </center>

        
    </fieldset>
    
    
</html>