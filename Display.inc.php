<?php

require_once './connection.php'; // Make sure the correct file path for the connection is used

// Retrieve data from the database
$sql = "SELECT * FROM advertise_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) { // Corrected `run_rows` to `num_rows`
    while ($row = $result->fetch_assoc()) { // Corrected `fethch_assoc` to `fetch_assoc`
        echo "<tr>";
        echo "<td>" . $row["advertiseName"] . "</td>"; // Fixed string concatenation
        echo "<td>" . $row["selectpublisher"] . "</td>"; // Fixed string concatenation
        echo "<td>" . $row["adcontent"] . "</td>"; // Fixed string concatenation
        echo "<td>" . $row["Budget"] . "</td>"; // Fixed string concatenation
        echo "<td>";

        // Corrected incorrect concatenation in the onClick event
        echo "<button onClick=\"redirectToUpdateForm('" . $row['advertiseName'] . "')\">Update</button>";
        echo "<a href=\"delete.php?delete_advertiseName=" . $row["advertiseName"] . "\"> Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "No data available";
}

// Close the connection
$conn->close();
