<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Admin</title>
    <link rel="shortcut icon" href="./image/TJ-Logo1.png">
	<link rel="stylesheet" href="./Style.css">
    
</head>
<body>
    <header>
    <a href="#" class="logo"><img src="./images/High-Quality Transparent File-02.png" alt="" /></a>
        <h1>BEGAVENTURES</h1>
        <h2>Genaral <span>Details</span></h2>
       
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="booking.php">Booking</a>
        <a href="products.php">Our Services</a>
        <!-- <a href="message.php">Messege</a> -->
        <a href="custom1.php">Custom Home</a>
    </nav>

    <div class="container">
        <div class="dashboard-section">
            <h2>Contact Us</h2>
            
            <?php
            
            //  include 'conn.php';
           

            // // SQL query to retrieve data from the table
            // $sql = "SELECT * FROM contact";
            // $result = $con->query($sql);

            // if ($result->num_rows > 0) {
            //     echo "<table>";
            //     echo "<tr><th>Id</th><th>name</th><th>email</th><th>email_subject</th><th>tel</th><th>messege</th></tr>";
            //     while ($row = $result->fetch_assoc()) {
            //         echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['email_subject']}</td><td>{$row['tel']}</td><td>{$row['messege']}</td></tr>";
            //     }
            //     echo "</table>";
            // } else {
            //     echo "0 results";
            // }

            // // Close the database connection
            // $con->close();
            ?>
        </div>
        <form action="custom.php" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="del_cont">Delete Data</button>
                    </div>
                </form>

<hr>
        <div class="dashboard-section">
            <h2>Registed contscts</h2>

            <?php
            // Include the database connection file
           
            // include 'conn.php';
            include_once './connection.php';

            // SQL query to retrieve data from the table
            $sql = "SELECT * FROM signup";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>id</th><th>name</th><th>tel</th><th>email</th><th>password</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['contact']}</td><td>{$row['email']}</td><td>{$row['password']}</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            // Close the database connection
            //$conn->close();
            ?>
        </div>
        <form action="custom.php" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="del_reg">Delete Data</button>
                    </div>
                </form>
<hr>

       
        
        <section class="portfolio" id="portfolio">
                <div class="dashboard-section">
                    <h2>Email & Location Details</h2>
                    <!-- Add content for top products -->
                        <?php

                        include_once 'connection.php';

                        // SQL query to retrieve data from the table
                        $sql = "SELECT * FROM details";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table>";
                            echo "<tr><th>Id</th><th>Email</th><th>Address</th></tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>{$row['id']}</td><td>{$row['email']}</td><td>{$row['addrss']}</td></tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }

                        // Close the database connection
                        $conn->close();
                        ?>
                    
                </div>
                <form action="custom.php" method="post">
                    <label for="id">new mail :</label>
                    <input type="number" name="id" required>
                    <label for="id">new Location :</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="update">UPDATE DATA</button>
                    </div>
                </form>

    </section>
<hr>

        <div class="dashboard-section1">
            <h2>Ordered Item Details</h2>
            <!-- Add content for top products -->
            <?php
            // Include the database connection file
            // include 'conn.php';
            // // include 'db.php';

            // // SQL query to retrieve data from the table
            // $sql = "SELECT * FROM orders";
            // $result = $con->query($sql);

            // if ($result->num_rows > 0) {
            //     echo "<table>";
            //     echo "<tr><th>Order_Id</th><th>User_Id</th><th>Username</th><th>Address</th><th>Email</th><th>Item-Name</th><th>Quantity</th><th>Price</th></tr>";
            //     while ($row = $result->fetch_assoc()) {
            //         echo "<tr><td>{$row['id']}</td><td>{$row['user_id']}</td><td>{$row['username']}</td><td>{$row['address']}</td><td>{$row['email']}</td><td>{$row['i_name']}</td><td>{$row['quantity']}</td><td>{$row['total_price']}</td></tr>";
            //     }
            //     echo "</table>";
                
            // } else {
            //     echo "0 results";
            // }

            // // Close the database connection
            // $con->close();
            ?>
            
        </div>
<nav></nav>
       

    </div>
    
    <footer>
        <p>&copy; 2024 BEGAVENTURES</p>
    </footer>
</body>
</html>
