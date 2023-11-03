<?php include "db.php" ?>
<HTML>
    <head>
        SEARCH STUDENTS
    </head>
    <button><a href="index.php">BACK TO DASHBOARD</a></button>
    <body>
    <form action="" method="GET">
            <input type="text" name="keyword" placeholder="Enter a keyword">
            <button type="submit" name="search" >SEARCH</button>
    </form>
 
   
    <?php
    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        $sql = "SELECT * FROM students 
        WHERE id LIKE '%$keyword%' 
        OR firstname LIKE '%$keyword%' 
        OR lastname LIKE '%$keyword%' 
        OR course LIKE '%$keyword%' 
        OR level LIKE '%$keyword'";
        $query = mysqli_query($connection,$sql);
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Course</th>";
            echo" <th>Level</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['course'] . "</td>";
            echo "<td>" . $row['level'] . "</td>";
            echo "</tr>";
            echo "</table>";
        }

    }
   
    ?>

        
        
    </body>
</HTML>