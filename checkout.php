<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css">

    <style>
        #form-wrapper {
            background-color: #000000;
            margin: auto;
            margin-top: 120px;
            width: 90%;
            max-width: 600px;
            height: auto;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #ffaf08;
            color: #ffaf08;
            ;
        }

        #header {
            background-color: #ffaf08;
            border-radius: 10px 10px 0px 0px;
            border: solid 1px #ffaf08;
            ;
        }

        h1 {
            color: #ffaf08;
        }

        h5 {
            color: #ffaf08;
        }

        i {
            color: #ffaf08;
        }

        button i {
            color: #ffaf08;
        }

        hr {
            border-color: #ffaf08;
        }

        button {
            background-color: #ffaf08;
            padding: 10px;
            border-radius: 5px;
            font-weight: 800;
        }

        button:hover {
            background-color: #b47c03;
        }

        select {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        @media (max-width: 520px) {
            #form-wrapper {
                width: 350px;
            }

            h1 {
                font-size: 20px;

            }

            input,
            h5 {
                font-size: 10px;
                width: 100%;
                margin-bottom: 20px;
                padding: 8px;
            }
        }


        @media (max-width: 767px) {
            #form-wrapper {
                width: 400px;
            }

            h1 {
                font-size: 20px;

            }

            input,
            h5 {
                font-size: 12px;
                width: 100%;
                margin-bottom: 20px;
                padding: 10px;
            }
        }
    </style>
    <title>Amarah's Corner - BF Resort Las Piñas</title>

    <style>
        body {
            background: url(./assets/images/background.png) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
        }
    </style>

</head>

<body>

    <div id="preloader"></div>

    <?php include './includes/navbar.php'; ?>
    <div id='form-wrapper'>
        <form>
            <h1>
                <i class="fas fa-shipping-fast"></i>
                Shipping Details
            </h1>

            <hr>

            <div class='form-group mb-1'>
                <label class='mb-1' for='firstName'>First Name</label>
                <input class='form-control mb-1' id='firstName' type='text' placeholder='Amarah'>
            </div>

            <div class='form-group mb-1'>
                <label class='mb-1' for='lastName'>Last Name</label>
                <input id='lastName' type='text' class='form-control' placeholder='Corner'>
            </div>

            <div class='form-group mb-1'><br>
                <label class='mb-1'>Complete Address:</label>
                <label class='mb-1'>Street</label>
                <input class='form-control' type='text' id='street1' placeholder='BF Resorts'>
            </div>

            <div class='form-group mb-1'>
                <label class='mb-1' for='city'>City</label>
                <input type='text' id='city' class='form-control' placeholder='Las Pinas City'>
            </div>

            <div class='form-row mb-2'>

                <div class='col-md-4'>

                    <label class='mb-0' for='expMonth'>MODE OF DELIVERY</label>
                    <select class='form-control' id='expMonth'>
                        <option value='01'>PICK UP</option>
                        <option value='01'>LALAMOVE</option>
                        <option value='01'>DELIVERY WITHIN BF-RESORTS</option>
                    </select>
                </div>
            </div>

            <h1>
                <i class="far fa-credit-card"></i> Payment Information
            </h1>

            <div class='form-row mb-1'>
                <div class='col'>
                    <label class='mb-0' for='expMonth'>MODE OF PAYMENT</label>
                    <select class='form-control' id='expMonth'>
                        <option value='01'>CASH</option>
                        <option value='01'>GCASH</option>
                        <option value='01'>CASH ON DELIVERY</option>


                    </select>
                </div>
                <div>
                    <button onclick="location.href = 'cart';" class='btn btn-primary mt-4' type='button'>Back to Cart</button>
                    <button class='btn btn-primary mt-4' type='submit'>PLACE ORDER</button>
                </div>
            </div>
        </form>
    </div>

    <?php include './includes/cart-count.php' ?>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
    </script>
    <script src="./assets/js/script.js"></script>
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>

</body>

</html>