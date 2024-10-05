<?php
// Include DB connection
require_once './connection.php';

// Check if the delete_advertiseName parameter exists in the URL
if (isset($_GET['delete_advertiseName'])) {
    $deleteadvertiseName = $_GET['delete_advertiseName'];

    // Prepare the DELETE query
    $sql = "DELETE FROM advertise_details WHERE advertiseName = ?";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the parameter to the SQL query
        $stmt->bind_param("s", $deleteadvertiseName);

        // Execute the query
        if ($stmt->execute()) {
            echo "<script>alert('User Account Deleted');</script>";
            echo "<script>window.location.href='insert.php';</script>";
        } else {
            echo "Account deletion failed: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Failed to prepare the SQL statement: " . $conn->error;
    }
} else {
    echo "Delete advertiseName parameter not found.";
}

// Close the connection
$conn->close();
