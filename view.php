<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\view.css">
    <title>Address Book Cs(172120)</title>
</head>

<body>

<div class=tbl> 
            <h2>Address Book Record<h2>
            <table >
              <tr>
                    <!-- <th>id</th> -->
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Delete</th>

                </tr>
                <div>
<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL */
    $link = mysqli_connect("localhost", "root", "", "address_book");
     
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     
    // Attempt select query execution
    $sql = "SELECT * FROM data_table";

    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

             // this code is now on above
            // echo "<div class=tbl> 
            // <h2>Address Book Record<h2>
            // <table >";
                // echo "<tr>";
                //     echo "<th>id</th>";
                //     echo "<th>First Name</th>";
                //     echo "<th>Last Name</th>";
                //     echo "<th>Email</th>";
                //     echo "<th>Birthday</th>";
                //     echo "<th>Address</th>";
                //     echo "<th>Contact</th>";
                // echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    // echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['Birth'] . "</td>";
                    echo "<td>" . $row['Comp_Address'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    ?>  
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    <?php
                
    echo "</tr>";
            }
            echo "</table> <div>";
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);
    ?>

</body>

<!-- Asim Javed CS-172120 -->
</html>