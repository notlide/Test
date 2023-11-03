<?php include "db.php"; ?>
<?php ob_start(); ?>
<html>
    <head>
    <h1>WELCOME STUDENTS</h1>
    <button><a href="addstudent.php">ADD STUDENTS</a></button>
    <button><a href="searchstudent.php">SEARCH STUDENTS</a></button>
    </head>
    
    <body >
        <table border="5">
            <tr>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>COURSE</th>
                <th>LEVEL</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            <tr>
                <?php
                  $sql = "select * from students";
                  $query = mysqli_query($connection,$sql);
                  while($row = mysqli_fetch_assoc($query)){
                    $id = $row['id'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $course = $row['course'];
                    $level = $row['level'];
                    echo "<td>$firstname</td>";
                    echo "<td>$lastname</td>";
                    echo "<td>$course</td>";
                    echo "<td>$level</td>";
                    echo "<td><a href='updatestudent.php?s_id={$id}'>EDIT</a></td>";
                    echo "<td><a href='index.php?d_id={$id}'>DELETE</a></td>";
                  }  
                ?>
            </tr>
        </table>
        <?php
            if(isset($_GET['d_id'])){
                $d_id = $_GET['d_id'];
                $sql = "DELETE FROM students WHERE id = {$d_id}";
                $query = mysqli_query($connection,$sql);
                header("Location:index.php");
            }
        ?>
    </body>
</html>