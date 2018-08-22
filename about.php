<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diversity D Inc. | About</title>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="page">
        <?php include __DIR__ . '/templates/header.php'; ?>
        <div class="content">
            <h1>ABOUT</h1>
            <h2>Diversity D</h2>
            <p>Diversity D was founded in 1989 when Scott Boles and his partner, Ross Roberts, began looking for ways to supplement his farming income. The two started a ditching company and soon the subject of drip irrigation peaked their interest. From their very first sale, it became evident that knowledge was the power behind a <a href="http://www.netafimusa.com/files/literature/agriculture/other-literature/general/A010-Choosing-Drip-Irrigation.pdf" target="_blank">successful irrigation system</a>. Over the course of the last 26 years, we have made it our mission to gain as much knowledge as we can, and we have combined that with our farming experience to give our customers the most efficient and advanced subsurface <a href="http://www.netafimusa.com/files/literature/agriculture/other-literature/general/A046-Successful-Row-Crop.pdf" target="_blank">drip irrigation system</a> available. Diversity D strives to give farmers the option of drip irrigation across the mid-west and southern United States. When working with Diversity D, you will work with agricultural irrigation specialists and irrigation designers that have experience, reliability and exceptional service.</p>
            <h2>Drip Irrigation</h2>
            <p>Drip Irrigation is the best option to maximize efficiency through eliminating water run-off and evaporation, precise application of water, fertilizers and chemicals through a technologically advanced operating system. <a href="http://www.netafimusa.com/files/literature/agriculture/other-literature/general/SDI-Subsurface-Drip-Irrigation.pdf" target="_blank">Subsurface drip irrigation</a> (SDI) is the most reliable, cost-effective and efficient way to deliver water, nutrients and chemicals to your crop. With proper management of water and nutrients, a subsurface drip irrigation system can deliver maximum yields and optimal water use efficiencies.</p>
            <div id="storefronts" class="banner" style="text-align: center; margin: 50px; margin-top: 60px; width: 500px; height: 300px;">
                <img src="/images/office6.jpg" width="500" height="300" style="position: absolute; opacity: 0; transition: opacity 2s ease"/>
                <img src="/images/office7.jpg" width="500" height="300" style="position: absolute; opacity: 0; transition: opacity 2s ease"/>
                <img src="/images/office4.jpg" width="500" height="300" style="position: absolute; opacity: 0; transition: opacity 2s ease"/>
                <img src="/images/office3.jpg" width="500" height="300" style="position: absolute; opacity: 0; transition: opacity 2s ease"/>
                <img src="/images/office5.jpg" width="500" height="300" style="position: absolute; opacity: 0; transition: opacity 2s ease"/>
            </div>
        </div>
        <?php include __DIR__ . '/templates/footer.php'; ?>
    </div>
    <script>
    // function to return a promise which resolves after a given number of milliseconds
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    // function to rotate the images
    async function rotate_image(index) {
        var images = document.querySelectorAll('#storefronts img');
        var max_index = images.length - 1;
        index = (index > max_index) ? 0 : index;
        var current = images[index];
        var i;

        // set opacity to 0 for all images
        for (i = 0; i < images.length; i++) {
            if (i != index) {
                images[i].style.opacity = '0';
            }
        }

        // set opacity to 1 for current image
        current.style.opacity = '1';

        // wait 4 seconds
        await sleep(4000);

        // increment the index and call the function again
        rotate_image(index + 1);
    }

    // start the timer
    rotate_image(0);
    </script>
</body>
</html>