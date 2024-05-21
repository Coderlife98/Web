<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Thank You | Microfinance website development company in <?php echo $city; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include ('./include/css.php'); ?>
    <style>
        @media (max-width:992px) {
            .set-this {
                object-fit: contain;
                width: 100%;
                /* margin-top: 86px; */
            }
        }
        @media (min-width:768px) {
            .set-this {
                object-fit: contain;
                width: 100%;
                /* margin-top: 86px; */
            }
        }
    </style>
</head>

<body>
    <?php include ("include/header.php"); ?>


    <div class="container-fluid">
        <div class="row">
            <div class="txt-th">
                <img src="./assets/images/Thank.png" class="set-this" alt="">
               
            </div>
        </div>
    </div>




    <!-- main-area -->
    <main>
        <section style="background:linear-gradient(to left,#0F3C5C,#00142E) ;">
            <div class="container" >
                <div class="row">

                    <div class="col-12 col-md-6 d-flex align-items-center ">
                    <div class="thimg">
                            <img src="./assets/images/thanku.png"  alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex  justify-content-center align-items-center">
                      
                        <div class="container" style=" margin:10% auto;color:white">
                            <?php
                            
                            echo $_SESSION["response"];
                            ?>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </main>
    <!-- main-area-end -->

    <?php include('include/footer.php'); ?>

    <?php include('include/js.php'); ?>
</body>

</html>