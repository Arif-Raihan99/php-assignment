<?php include 'pages/include/header.php'?>


    <section class="py-4">
        <div class="container">
            <div class="row">
                <?php if (isset($details)) foreach ($details as $detauls) { ?>
                    <?php if ($p_id == $detauls['id']) { ?>
                        <div class="col-md-9 mx-auto">
                            <div class="row">
                                <div class=" px-0">
                                    <img src="<?php echo $detauls['path']?>" alt="" class="" style="height: auto; width: 270px">
                                </div>
                                <div class="col-md-8 py-2 px-4" style="background-color: #F4F4F4">
                                    <h3 class="text-center pb-1">Product details</h3>
                                    <h5><?php echo $detauls['name']?></h5>
                                    <p class="" style="font-size: 15px">TK. <?php echo $detauls['price']?></p>
                                    <p class="" style="font-size: 15px"><?php echo $detauls['description']?></p>
                                    <p class="text-justify" style="font-size: 15px"><?php echo $detauls['details']?></p>
                                    <a href="" class="btn btn-success px-2 py-1">Order Now</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>


<?php include 'pages/include/footer.php'?>
