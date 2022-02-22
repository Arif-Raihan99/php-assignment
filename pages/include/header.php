<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php project</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LoGo</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">

                    <?php if ($_SESSION['log']=='signUp') { ?>
                        <li class="nav-item"><a href="action.php?pages=login" class="nav-link">Log In</a></li>
                    <?php } ?>
                    <?php if ($_SESSION['log']=='logIn') { ?>
                        <li class="nav-item"><a href="action.php?pages=signUp" class="nav-link">Sign Up</a></li>
                    <?php } ?>
                    <?php if ($_SESSION['log']=='guest') { ?>
                        <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="action.php?pages=login" class="nav-link">Log In</a></li>
                    <?php } ?>
                    <?php if ($_SESSION['log']=='loged') { ?>
                        <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="action.php?pages=upload" class="nav-link">Upload</a></li>
                        <li class="nav-item"><a href="action.php?pages=logout" class="nav-link">Log Out</a></li>
                    <?php } ?>
                    <?php if ($_SESSION['log']=='') { ?>

                    <?php } ?>


                </ul>
            </div>
        </div>
    </nav>

    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-11 px-0"></div>
                <div class="col-md-1 px-0 float-right">

                    <?php if(isset($_SESSION['name'])) { ?>
                        <span class="text-right px-1" style="background-color: #c69500"><?php echo $_SESSION['name'] ?></span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
