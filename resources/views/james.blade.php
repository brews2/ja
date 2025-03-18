<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkti</title>
    <style>
        /* Basic Styles */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Button Styling */
        button {
            font-size: 20px;
            padding: 20px 40px;
            background-color: #ff4444;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff0000;
        }

        /* Hidden Elements */
        .hidden {
            display: none;
        }

        /* Flashing Screen Effect */
        #flashScreen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: white;
            opacity: 0;
            pointer-events: none;
            z-index: 999;
            transition: opacity 0.1s ease-in-out;
        }

        /* Scary Image Styling */
        #scaryImage {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            display: none;
            text-align: center;
        }

        #scaryImage img {
            max-width: 80vw;
            max-height: 80vh;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        }

        /* Header Styling for the jumpscare */
        #scaryHeader {
            font-size: 3em;
            color: #ff4444;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
            margin-top: 20px;
            z-index: 1001;
        }
    </style>
</head>
<body>

    <div id="container">
        <button id="jumpscareButton">produkti</button>
    </div>

    <!-- Flash Screen -->
    <div id="flashScreen"></div>

    <!-- Scary Image and Header -->
    <div id="scaryImage" class="hidden">
        <h1 id="scaryHeader">Čau Māsas!</h1>
        <img src="scary.jpg" alt="Scary Image">
    </div>
    
    <div id="sad" style="display:none">
    <img  src="{{asset('sad.jpg')}}" style="position:fixed;height:100vh;width:100vh;top:0;left:0;">
    <p style="position:fixed;height:100vh;width:100vh;top:45vh;left:0;font-size:5rem">Strada, Karli, citadi es Tevi vairs nemilesu</p>
    </div>

    <script>
        // Get references to elements
        const jumpscareButton = document.getElementById('jumpscareButton');
        const flashScreen = document.getElementById('flashScreen');
        const scaryImage = document.getElementById('scaryImage');
        const scaryHeader = document.getElementById('scaryHeader');
        const sad = document.getElementById('sad');

        // Function to trigger the jumpscare effect
        function triggerJumpscare() {
            // Flash effect: make the screen flash by setting opacity to 1 and back to 0
            flashScreen.style.opacity = 1;

            // Flash for 100ms then hide it
            setTimeout(() => {
                flashScreen.style.opacity = 0;
            }, 100); // Flash visible for 100ms

            // Show scary image and header after a short delay
            setTimeout(() => {
                scaryImage.style.display = 'block';  // Show the scary image and header
            }, 200);  // Delay image and header appearance by 200ms

            // Hide the scary image and header after 3 seconds
            setTimeout(() => {
                scaryImage.style.display = 'none';  // Hide the image and header
            }, 3000);  // Keep the image and header visible for 3 seconds
            // Hide the scary image and header after 3 seconds
            setTimeout(() => {
                sad.style.display = 'block';  // Hide the image and header
            }, 4000);  // Keep the image and header visible for 3 seconds
        }

        // Add event listener to the button
        jumpscareButton.addEventListener('click', triggerJumpscare);
    </script>

</body>
</html>
