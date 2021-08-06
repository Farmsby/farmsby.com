<html>
    <head>
        <title>App Name</title>
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script>
            $.ajax({
            url: 'https://pastorchrisdigitallibrary.org/campaigns/gold/create_user_new.php',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            type: "POST", /* or type:"GET" or type:"PUT" */
            dataType: "json",
            data: { fullname: "Precious Tom", email: "tomprezine@gmail.com", username: "cephzone3" },
            success: function (result) {
                console.log(result);
            },
            error: function () {
                console.log("error");
            }
        });
        </script>
    </body>
</html>