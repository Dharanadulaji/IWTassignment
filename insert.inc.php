<?php
// Include Connection PHP File
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $advertiserName = $_POST["advertiserName"];
    $publisher = $_POST["publisher"];
    $adContent = $_POST["adContent"];
    $adBudget = $_POST["adBudget"];

    // Insert data into the database
    $sql = "INSERT INTO advertise_details(advertiseName, selectpublisher, adcontent, Budget) 
            VALUES ('$advertiserName', '$publisher', '$adContent', '$adBudget')";

    // Check if the insert was successful
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Added Successfully')</script>";
        echo "<script>window.location.href='Display.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the Connection
    $conn->close();
}
