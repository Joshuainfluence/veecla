<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/index.css">
    <!-- <link rel="stylesheet" href="../assets/login.css"> -->
    <link rel="icon" type="image/x-icon" href="img/logo5.png" />
</head>

<body>
    <div class="container">
        <!-- <video autoplay loop muted plays-inline class="background-clip">
            <source src="videos/77cce4a099504cda9eb0e10d5610f63f.mp4" type="video/mp4">
        </video> -->
        <style>
            .background2-clip {
                width: 50%;
                height: 100%;
                display: flex;
                justify-self: center;
                z-index: 999;
                margin-left: 25%;
            }
            .background-clip{
                display: none;
            }
            select{
                width: 10rem;
                height: 4rem;
                font-size: 1rem;
                background-color: #000;
                border: 2px solid #fff;
                color: #fff;
                text-align: center;
                border-radius: 4rem;
                font-weight: 600;
                transition: 0.3s;
            }
            select:hover{
                background-color: #636363;
                color: #000;
                border: 1px solid #636363;
            }
            select option{
                background-color: #fff;
                color: #000;
            }

            @media screen and (max-width:992px) {
                .background-clip {
                    width: 100%;
                    height: 100%;
                    display: flex;
                    justify-self: center;
                    z-index: 999;
                    margin-left: 0%;
                }
                .background2-clip{
                    display: none;
                }
            }
        </style>
                <!-- <img src="img/aunty_vic.jpg" class="background2-clip" alt="">
        <img src="img/WhatsApp Image 2023-12-20 at 18.31.06_3709ef4b.jpg" class="background-clip" alt=""> -->
        <div class="content">
            <h1>Veecla</h1>
            <h3>Realising True Beauty</h3>
            <select name="country" id="country">
                <option value="default" selected>Select Country</option>
                <option value="default">Nigeria</option>
                <option value="default">South Africa</option>
                <option value="default">Italy</option>
                <option value="default">China</option>
            </select>
            <a href="inc/login.php">Shop Now</a>
        </div>
    </div>
</body>

</html>