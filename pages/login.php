<?php include 'pages/include/header.php'; ?>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="text-center mb-0">Log In Here</h4>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <?php if (isset($logs)) { ?>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <h6 class="text-danger text-center"><?php echo $logs ?></h6>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="row form-group">
                                    <label for="3" class="col-md-4 col-form-label">Email/User-name</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="User name / Email" id="3" name="name-email" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="4" class="col-md-4 col-form-label">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="4" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group ">
                                    <label class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="logInBtn" value="Submit" class="btn btn-success btn-block">
                                    </div>
                                </div>
                                <div class="row form-group ">
                                    <label class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <a href="action.php?pages=signUp" class="" style="margin-right: 20px">Create New Account</a>
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

