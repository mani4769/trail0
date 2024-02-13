<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Language Recognition</title>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@3.12.0/dist/tf.min.js"></script>
</head>
<body>
    <h1>Sign Language Recognition</h1>
    <video id="video" width="640" height="480" autoplay></video>
    <canvas id="canvas" width="640" height="480" style="display: none;"></canvas>
    <p id="predictionResult"></p>

    <script>
        async function loadModel() {
            const model = await tf.loadGraphModel('model.json');
            return model;
        }

        async function startCamera() {
            const video = document.getElementById('video');
            if (navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        video.srcObject = stream;
                    })
                    .catch(function (error) {
                        console.error('Error accessing webcam:', error);
                    });
            }
        }

        async function predict() {
            const model = await loadModel();
            const video = document.getElementById('video');
            const canvas = document.getElementById('canvas');
            const context = canvas.getContext('2d');

            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const imageData = context.getImageData(0, 0, canvas.width, canvas.height);

            // Preprocess image data as necessary (e.g., resize, normalize)
            // Perform inference with the model
            // Display prediction result on the webpage
        }

        startCamera(); // Start camera when the page loads
        setInterval(predict, 1000); // Run prediction every second
    </script>
</body>
</html>
