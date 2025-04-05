<?php
	

    $dbHost = "localhost";     // Replace with your database host
    $dbUser = "root";     // Replace with your database username
    $dbPassword = "";                  // Empty string for no password
    $dbName = "tool";     // Replace with your database name

    // Create a database connection
    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
                  
                   
    // Assuming you have stored the uploaded PDF file in a table named "pdf_files"
    $sql = "SELECT file_name, file_content, file_size, file_type FROM sr_assignment WHERE college_number = '1234'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fileName = $row["file_name"];
        $fileContent = $row["file_content"];
        $fileSize = $row["file_size"];
        $fileType = $row["file_type"];

        // Display the PDF content
        header("Content-type: $fileType");
        header("Content-length: $fileSize");
        header("Content-Disposition: inline; filename=$fileName");
        echo $fileContent;
    } else {
        echo "No PDF file found in the database.";
    }

    // Close the database connection
    $conn->close();
    ?>


