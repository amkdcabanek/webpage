<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One-Page Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigation Menu -->
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Home Section -->
    <section id="home">
        <h1>Welcome to Our Website</h1>
        <p>This is the Home section. Introduce your website here.</p>
        <img src="https://images.vexels.com/content/148231/preview/ladderback-chair-black-icon-5c2678.png" alt="Home Image">
    </section>

    <!-- About Us Section -->
    <section id="about">
        <h1>About Us</h1>
        <p>This is the About Us section. Provide details about your company or project.</p>
    </section>

    <!-- Prices Section -->
    <section id="products">
        <h1>Products</h1>
        <p>
        <?php
            $conn = mysqli_connect("localhost", "admin", "admin", "items");

           // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

// Step 2: Write the query to fetch all items
            $query = "SELECT * FROM items";

// Step 3: Execute the query
            $result = $conn->query($query);

// Step 4: Check if there are results
            if ($result->num_rows > 0) {
    // Step 5: Loop through the results and display the 'name' column
                while($row = $result->fetch_assoc()) {
                    echo "Item Name: " . $row['name'] . "<br>";
                }
                } else {
                echo "No items found.";
                }

// Step 6: Close the database connection
            $conn->close();
            ?>
        </p>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h1>Contact</h1>
        <p>
            <br>Email: support@chairs-solutions.com 
            <br>Phone: +1 (800) 123-4567
            <br>Hours: Monday to Friday, 9:00 AM - 6:00 PM (EST)</p>
    </section>

</body>
</html>
