<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmsby | Contact Us</title>
    <link rel="stylesheet" href="./assets/libraries/bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/libraries/fontawesome/css/all.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Secular+One&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="bg_pattern">
        <!-- Code within this block -->
        <?php include_once './widgets/header.php'; ?>

        <div class="hero container">
            <div class="row">
                <div class="col-md-12 col-sm-12 pushdown-x2 text-center">
                    <h1 class="text-white f-50">Say Hi</h1>
                    <p class="text-teal">We’ll be happy to answer all your questions or inquiries, feel free to say Hello.</p>
                </div>
            </div>
        </div>

        <section>
            <form action="" class="container p-5">
                <div class="row pb-3">
                    <div class="col">
                        <input type="text" class="form-control inputfield" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control inputfield" placeholder="Last name">
                    </div>
                </div>
                <div class="form-group pb-3">
                    <input type="text" class="form-control inputfield" placeholder="Email">
                </div>
                <div class="form-group pb-3">
                    <textarea class="form-control inputfield-y" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="c-btn">
                    Send Message <img src="./assets/images/icon/bi_arrow-right.svg" alt="">
                </button>
            </form>
        </section>

        
        <!-- Code within this block -->
    </div>

    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/config.js"></script>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/libraries/bootstrap5/js/bootstrap.js"></script>
    <script src="./assets/libraries/fontawesome/js/all.js"></script>
</body>

</html>