<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Hospital</title>
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

        .header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
        }

        .header-title {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .header-nav-list {
            list-style-type: none;
            padding: 0;
        }

        .header-nav-item {
            display: inline;
            margin-right: 20px;
        }

        .header-nav-link {
            text-decoration: none;
            color: #fff;
        }

        .hero {
            background-image: url('hospital-image.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        .hero-title {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-description {
            font-size: 1.5rem;
        }

        /* Add more CSS styles for other sections as needed */
    </style>
    <script>
        function toggleEmergencyForm() {
            var roomTypeSelect = document.getElementById("money");
            var emergencyForm = document.getElementById("emergency-form");

            if (roomTypeSelect.value === "1") { // If Emergency Care is selected
                emergencyForm.style.display = "block";
            } else {
                emergencyForm.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <header class="header">
        <h1 class="header-title">Welcome to Our Hospital</h1>
        <nav>
            <ul class="header-nav-list">
                <li class="header-nav-item"><a href="#home" class="header-nav-link">Home</a></li>
                <li class="header-nav-item"><a href="#contact" class="header-nav-link">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <h2 class="hero-title">Your Health, Our Priority</h2>
        <p class="hero-description">Experience world-class healthcare services in a caring environment.</p>
    </section>
    

    <section id="billing" class="billing">
        <div class="billing-content">
            <h2 class="billing-title">Billing Information</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="billing-form" onsubmit="toggleEmergencyForm()">
                <label for="name" class="billing-label">Your Name:</label>
                <input type="text" id="name" placeholder="Enter Name" name="name" class="billing-input">
                <label for="sr_name" class="billing-label">Sr. Name:</label>
                <input type="text" id="sr_name" placeholder="Sr. Name" name="sr_name" class="billing-input">
                <label for="money" class="billing-label">Room Type:</label>
                <select name='MONEY' id="money" class="billing-select" onchange="toggleEmergencyForm()">
                    <option value="1">ICU</option>
                    <option value="2">Normal Room</option>
                    <option value="3">ICCU</option>
                    <option value="4">OPD 1</option>
                    <option value="5">OPD 2</option>
                </select>
                <input type="submit" value="Calculate" class="billing-button">
            </form>
            <div id="emergency-form" style="display: none;">
                <h3 class="emergency-title">Emergency Care Form</h3>
                <form action="emergency_process.php" method="POST" class="emergency-form">
                    <!-- Add fields for the emergency form here -->
                </form>
            </div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['MONEY'])) {
                $Money = $_POST['MONEY'];
                $billAmount = 0;

                if ($Money == 1) { // ICU
                    $billAmount = 100000;
                } elseif ($Money == 2) { // Normal Room
                    $billAmount = 90000;
                } elseif ($Money == 3) { // ICCU
                    $billAmount = 80000;
                } elseif ($Money == 4) { // OPD 1
                    $billAmount = 70000;
                } elseif ($Money == 5) { // OPD 2
                    $billAmount = 60000;
                }

                echo "<div class='billing-result'>
                    <p class='billing-result-text'>Your per day bill is: <span class='billing-amount'>$billAmount</span></p>
                    <p class='billing-result-text'>THANK YOU!!!</p>
                </div>";
            }
            ?>
        </div>
    </section>

    <section id="about" class="about">
        <div class="about-content">
            <h2 class="about-title">About Us</h2>
            <p class="about-description">We are a leading hospital committed to providing high-quality healthcare services to our patients.</p>
        </div>
    </section>

    <section id="services" class="services">
        <div class="services-content">
            <h2 class="services-title">Our Services</h2>
            <ul class="services-list">
                <li class="services-item">Emergency Care</li>
                <li class="services-item">Surgery</li>
                <li class="services-item">Medical Imaging</li>
                <li class="services-item">Specialized Clinics</li>
            </ul>
        </div>
    </section>
    

    <!-- Add more sections as needed -->

    <footer class="footer">
        <p class="footer-text">&copy; <?php echo date("Y"); ?> Our Hospital</p>
    </footer>
</body>
</html>
