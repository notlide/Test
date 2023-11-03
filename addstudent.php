<?php include "db.php" ?>
<html>
    <head>
        <h1>ADD STUDENTS</h1>
    </head>
    <button><a href="index.php">BACK TO DASHBOARD</a></button>
    <body>
        <?php
            if(isset($_POST['save'])){
            $firstname = $_POST['firstname'];    
            $lastname = $_POST['lastname'];
            $course = $_POST['course'];
            $level = $_POST['level'];
            
            
            $sql = "INSERT INTO students(firstname,lastname,course,level) VALUES('$firstname','$lastname','$course','$level')";
            $query = mysqli_query($connection,$sql);

            
            }
            
        ?>
        <form action="" method="POST">
            <input type="text" name="firstname" placeholder="Enter firstname">
            <br>
            <input type="text" name="lastname"  placeholder="Enter lasttname">
            <br>
            <input type="text" name="course" placeholder="Enter course">
            <br>
            <input type="text" name="level" placeholder="Enter level">
            <br>
            <button type="submit" name="save">SAVE</button>
        </form>
    </body>
</html>