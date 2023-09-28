<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Application Form</title>
    <style>
        /* Add your CSS styles here */
        /* Example CSS styles for reference */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Light gray background */
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .emergency-content {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .emergency-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .emergency-label {
            display: block;
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .emergency-input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .emergency-button {
            background-color: #333;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="emergency-content">
        <h2 class="emergency-title">Emergency Application Form</h2>
        <form action="emergency_process.php" method="POST" class="emergency-form">
            <label for="patient_name" class="emergency-label">Patient's Name:</label>
            <input type="text" id="patient_name" placeholder="Enter Patient's Name" name="patient_name" class="emergency-input" required>

            <label for="patient_age" class="emergency-label">Patient's Age:</label>
            <input type="text" id="patient_age" placeholder="Enter Patient's Age" name="patient_age" class="emergency-input" required>

            <label for="doctor_name" class="emergency-label">Doctor's Name:</label>
            <input type="text" id="doctor_name" placeholder="Enter Doctor's Name" name="doctor_name" class="emergency-input" required>

            <label for="doctor_contact" class="emergency-label">Doctor's Contact:</label>
            <input type="text" id="doctor_contact" placeholder="Enter Doctor's Contact" name="doctor_contact" class="emergency-input" required>

            <input type="submit" value="Submit" class="emergency-button">
        </form>
    </div>
</body>
</html>
