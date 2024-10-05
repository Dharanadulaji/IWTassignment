
<?php
// Include DB connection
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the POST data is received correctly
    if (isset($_POST['advertiseName'], $_POST['selectpublisher'], $_POST['adContent'], $_POST['Budget'])) {

        $advertiserName = $_POST['advertiseName'];
        $publisher = $_POST['selectpublisher'];
        $adContent = $_POST['adContent'];
        $adBudget = $_POST['Budget'];

        // Update data in the database
        $sql = "UPDATE advertise_details 
                SET advertiseName = '$advertiserName', 
                    selectpublisher = '$publisher', 
                    adcontent = '$adContent', 
                    Budget = '$adBudget' 
                WHERE advertiseName = '$advertiserName'";

        // Check if the update was successful
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User Details Updated Successfully');</script>";
            echo "<script>window.location.href='Display.php';</script>";
            exit();
        } else {
            // Output SQL error for debugging
            echo "Details Update Failed: " . $conn->error;
        }
    } else {
        // Output error message if required POST data is missing
        echo "Error: Missing required form data.";
    }
}

// Close the connection
$conn->close();
?>
