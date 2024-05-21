<!-- <?php
session_start();
?>
<!DOCTYPE html>
<html lang="eng">


<head>
   
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Micro Finance Software | Response</title>
    <?php include('include/css.php'); ?>

</head>

<body>
    <div class="page-wrapper">

        <?php include('include/header.php'); ?>


        <section class="service-details pt-120 rpt-100 pb-100 rpb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-details-content wow fadeInRight delay-0-2s">
                            <p>
                                <?php
                                if (isset($_SESSION['response'])) {
                                    echo $_SESSION["response"];
                                } else {
                                    echo "Yeah! I am secure.";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        



        <?php include('include/footer.php'); ?>

    </div>
  


    <?php include('include/js.php'); ?>

</body>


</html> -->