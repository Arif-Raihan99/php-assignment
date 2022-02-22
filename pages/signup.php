<?php include 'pages/include/header.php'; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="text-center mb-0">Sign Up Here</h4>
                            <a href="action.php?pages=guest" class="btn btn-outline-info py-0 px-2 fs-13">View as guest</a>
                            <a href="action.php?pages=login" class="float-right btn btn-outline-info py-0 px-2 fs-13">Log-In</a>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <?php if (isset($message)) { ?>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <h6 class="text-danger text-center"><?php echo $message ?></h6>
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
                                    <label for="2" class="col-md-3 col-form-label">Phone</label>
                                    <div class="col-md-9">
                                        <input type="number" id="2" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="3" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" id="3" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="4" class="col-md-3 col-form-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" id="4" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group ">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="signUpBtn" value="Submit" class="btn btn-success btn-block">
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

