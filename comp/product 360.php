<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .product-view {
            width: 400px;
            height: 400px;
            perspective: 1000px;
            overflow: hidden;
        }

        .product-images {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.3s ease-in-out;
            transform: rotateY(0deg);
        }

        .product-images img {
            
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="product-view">
        <div class="product-images">
            <img src="src\Bicycle_Red_1000_0001.jpg" alt="Product Image 1" />
            <img src="src\Bicycle_Red_1000_0001.jpg" alt="Product Image 1" />
            <!-- Add more image elements for each frame of the 360 view -->
        </div>
    </div>
    <script>
        const productView = document.querySelector('.product-view');
        const productImages = document.querySelector('.product-images');

        let isDragging = false;
        let startX;
        let currentRotation = 0;
        let previousRotation = 0;

        productView.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.clientX;
            previousRotation = currentRotation;
        });

        document.addEventListener('mouseup', () => {
            isDragging = false;
        });

        document.addEventListener('mousemove', (e) => {
            if (!isDragging) return;

            const diffX = e.clientX - startX;
            const rotationIncrement = (360 / productImages.childElementCount);
            const rotationAmount = (diffX / productView.offsetWidth) * rotationIncrement;

            currentRotation = previousRotation + rotationAmount;

            productImages.style.transform = `rotateY(${currentRotation}deg)`;
        });

    </script>
</body>

</html>