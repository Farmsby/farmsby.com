<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paystack</title>
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
        <div class="container">
            <div class="grid grid--with-gutters grid--flex">
                <div class="grid__column grid__column--12">
                    <div class="pricing-card">
                        <div class="pricing-card__header">
                            <h3 class="pricing-card__amount">1.5% <span>+ ₦100</span></h3>
                            <h5 class="pricing-card__label">For Local Cards</h5>
                        </div>
                        <div class="pricing-card__body">
                            <div class="breakdown-card breakdown-card--inline">
                                <div class="breakdown-card__icon">
                                    <div class="svg svg--zero-setup"></div>
                                </div>
                                <div class="breakdown-card__content">
                                    <h3 class="global-u-body-title">Micro Transactions</h3>
                                    <p class="global-u-body-text">The ₦100 fee is waived for transactions less than ₦2500</p>
                                </div>
                            </div>
                            <div class="breakdown-card breakdown-card--inline">
                                <div class="breakdown-card__icon">
                                    <div class="svg svg--cards"></div>
                                </div>
                                <div class="breakdown-card__content">
                                    <h3 class="global-u-body-title">Local card fee caps</h3>
                                    <p class="global-u-body-text">Fees for local cards are capped at ₦2000 - which means you won't pay more than that for such transactions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
