<?php
include('dbc.php'); // Include database connection

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete the contact message with the given ID from the database
    $sql = "DELETE FROM contact_us WHERE ID = $id";
    if ($conn->query($sql) === TRUE) {
        // Deletion successful
        header("Location: adminpage4.php"); // Redirect back to the admin page
        exit();
    } else {
        // Error occurred during deletion
        echo "Error: " . $conn->error;
    }
} else {
    // Invalid or missing ID parameter
    echo "Invalid request";
}

$conn->close();
?>
