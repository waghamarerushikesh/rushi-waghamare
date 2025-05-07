

<!-- filepath: c:\xamppp\htdocs\love_thing\creating card.php -->
<?php
$partner1 = $partner2 = $anniversary = "";

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $partner1 = isset($_POST['partner1']) ? htmlspecialchars($_POST['partner1']) : "";
    $partner2 = isset($_POST['partner2']) ? htmlspecialchars($_POST['partner2']) : "";
    $anniversary = isset($_POST['anniversary']) ? htmlspecialchars($_POST['anniversary']) : "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couple Cards</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, rgb(211, 104, 107), rgb(206, 129, 108), #fbc2eb);
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            animation: gradientBG 10s ease infinite;
    
            background-image: url("love_carding.jpeg");     
            background-size: cover;
          }
        
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .card {
            position: relative;
            width: 60%;
            height: 900px;
            background: linear-gradient(135deg, rgb(155, 41, 125), rgb(151, 100, 42),rgb(153, 53, 125));
             background-image: url(TWO.jpg);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            text-align: center;

        }
        
        /* Top left block with text and image */
        .top-left-block {
            position: absolute;
            top: 20px;
            left: 20px;
            text-align: left;
            font-size: 1.2rem;
            color: #ff4081;
        }
        
        .top-left-block img {
            width: 100px;
            margin-top: 10px;
            border-radius: 10px;
        }
        
        /* Partner names in the center */
        .partner-names {
            margin-top: 150px;
            font-size: 2.5rem;
            font-weight: bold;
            color: #ff69b4;
        }
        
        /* Lovely lines / quote */
        .lovely-lines {
            margin-top: 250px;
            font-size: 1.5rem;
            color:white;
            font-style: italic;
            color: #ff69b4;
            font-weight: bolder;
        }
        
        /* Anniversary text */
        .anniversary {
            margin-top: 30px;
            font-size: 1.3rem;
            color:rgb(45, 73, 104);
            font-weight: bold;
            text-transform: uppercase;
        }
        
        /* Image in the right corner at the bottom */
        .right-image {
            width: 100px;
            margin-top: 10px;
            border-radius: 10px;
        }
        
        /* No data message styling */
        p.no-data {
            text-align: center;
            color: #fff;
            font-size: 1.3rem;
            background: rgba(255, 0, 0, 0.8);
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php if (!empty($partner1) && !empty($partner2) && !empty($anniversary)): ?>
        <div class="card">
            <div class="top-left-block">
                With Love & Care
                <br>
                <img src="love-card-design_24908-13841.avif" alt="Love Icon">
            </div>
            <div class="lovely-lines">
                "Our love story is as infinite as the stars and as precious as a heartbeat."
              
            </div>
            <div class="anniversary">
                🌹 Anniversary: <?php echo $anniversary; ?> 🌹
            </div>
            <img src="" alt="Romantic Image" class="right-image">
        <div class="partner-names">
            <?php echo $partner1; ?> ................❤️..........<?php echo $partner2; ?>
        </div>
        
    <?php else: ?>
        <p class="no-data">No data submitted. Please go back and fill out the form.</p>
    <?php endif; ?>
</body>
</html>
