<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientName = $_POST['patient_name'];
    $patientAge = $_POST['patient_age'];
    $doctorName = $_POST['doctor_name'];
    $doctorContact = $_POST['doctor_contact'];

    // You can perform actions with this data, such as storing it in a database or notifying hospital staff.

    // Example: Storing data in a text file
    $data = "Patient's Name: $patientName\n";
    $data .= "Patient's Age: $patientAge\n";
    $data .= "Doctor's Name: $doctorName\n";
    $data .= "Doctor's Contact: $doctorContact\n";
    
    file_put_contents("emergency_data.txt", $data);

    // Provide a confirmation message
    echo "<h2>Thank you for submitting the emergency application.</h2>";
}
?>
