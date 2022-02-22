<?php include 'pages/include/header.php'?>

<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <ul class="nav nav-pills ">
                    <li class="nav-item"><a class="nav-link btn btn-outline-info mx-2 py-1" data-toggle="pill" href="action.php?pages=man">Man</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-info mx-2 py-1" data-toggle="pill" href="action.php?pages=women">Women</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-info mx-2 py-1" data-toggle="pill" href="action.php?pages=kids">Kids</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-3">
    <div class="container">
        <div class="row">
            <?php if (isset($products)) foreach ($products as $item) { ?>
                <?php if ($item['category']==$category) { ?>
                    <div class="col-md-3 card border-0 mb-5 ">
                        <img src="<?php echo $item['path']?>" alt="" class="card-img-top" style="height: 280px">
                        <div class="card-body p-2" style="background-color: #F4F4F4">
                            <h5><?php echo $item['name']?></h5>
                            <p class="mb-1" style="font-size: 14px">TK. <?php echo $item['price']?></p>
                            <p class="mb-1" style="font-size: 15px"><?php echo $item['description']?></p>
                            <a href="action.php?pages=details&&id=<?php echo $item['id']?>" class="btn btn-info float-right px-2 py-0">Details</a>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'pages/include/footer.php'?>
