<?php //if (isset($_SESSION['id'])) { ?>
    <?php include 'pages/include/header.php'; ?>

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="text-center mb-0">Upload Products</h4>
                        </div>
                        <div class="card-body py-2">
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <?php if (isset($message)) { ?>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <h6 class="text-success mb-0 text-center"><?php if ($message=='Product uploaded successfully') echo $message ?></h6>
                                            <h6 class="text-danger text-center"><?php if ($message=='Fillup all input field') echo $message ?></h6>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="row form-group">
                                    <label for="1" class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" id="1" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="2" class="col-md-3 col-form-label">Price</label>
                                    <div class="col-md-9">
                                        <input type="number" id="2" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="3" class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                        <input type="text" id="3" name="description" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="4" class="col-md-3 col-form-label">Category</label>
                                    <div class="col-md-9">
                                        <select class="form-select form-control" aria-label="Default select example" name="category">
                                            <option selected>Open this select menu</option>
                                            <option value="man">Man</option>
                                            <option value="women">Women</option>
                                            <option value="kids">Kids</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="5" class="col-md-3 col-form-label">Details</label>
                                    <div class="col-md-9">
                                        <input type="text" id="5" name="details" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" accept="image/*">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="uploadBtn" value="Submit" class="btn btn-success btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'pages/include/footer.php'; ?>
<?php //} ?>


