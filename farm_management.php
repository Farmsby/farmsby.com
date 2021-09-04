<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farm Management</title>
    <meta name="description" content="Accept payments online with Paystack">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <?php include_once './widgets/header.php'; ?>
    <section class="hero-section hero-section--features">
        <div class="hero-section__background"></div>
        <div class="hero-section__content">
            <div class="hero-section__icon">
                <div class="svg svg--large svg--price-tag"></div>
            </div>
            <h2 class="hero-section__secondary-title">How much does it cost to use Paystack for your business? It's simple.</h2>
        </div>
    </section>
    <section class="pricing-section pricing-section--options">
        <div class="container" style="height:750px">
            <div data-tf-widget="iRgDOh8i" style="width:100%;height:400px;color:#FFFFFF;"></div><script src="//embed.typeform.com/next/embed.js"></script>
        </div>
    </section>
    <?php 
        include_once './widgets/farm.php';
        include_once './widgets/footer.php';
    ?>
    <script src="js/vendor/animate.min.js"></script>
    <script src="js/stack-animations.js"></script>
</body>

</html>
