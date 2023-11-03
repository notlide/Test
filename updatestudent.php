<?php include "db.php" ?>
<html>
    <head>
        <h1>UPDATE STUDENTS</h1>
        
    </head>
    <button><a href="index.php">BACK TO DASHBOARD</a></button>
    <body>
        <?php
        if(isset($_GET['s_id'])){
            $the_s_id = $_GET['s_id'];
        }

        $sql = "SELECT * FROM students WHERE id =  $the_s_id";
        $query = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $course = $row['course'];
            $level = $row['level'];
        }

        if(isset($_POST['update'])){
            $firstname = $_POST['firstname'];    
            $lastname = $_POST['lastname'];
            $course = $_POST['course'];
            $level = $_POST['level'];

            $sql = "UPDATE students SET firstname='$firstname', 
            lastname='$lastname', 
            course='$course', 
            level='$level' WHERE id = {$the_s_id}";
            $query = mysqli_query($connection,$sql);
        }
        ?>
        <form action="" method="POST">
            
            <input type="text" name="firstname" value="<?php echo "$firstname"; ?>">
            <br>
            <input type="text" name="lastname"  value="<?php echo "$lastname"; ?>">
            <br>
            <input type="text" name="course" value="<?php echo "$course"; ?>">
            <br>
            <input type="text" name="level" value="<?php echo "$level"; ?>">
            <br>
            <button type="submit" name="update">UPDATE</button>
        </form>
    </body>
</html>