<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=BASE_URL;?>/img/favicon.ico" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?=BASE_URL;?>/css/login.css" />
    <title>Our webbb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="container__left">
            <img src="<?=BASE_URL;?>/assets/bg4.png" alt="" />
            <h2>Welcome Back!</h2>
            <p>To keep connected with us please login with your personal info</p>
        </div>
        <div class="container__right">
            <div class="content">
                <img class="logo" src="<?=BASE_URL;?>/assets/logo1.png" alt="logo" />
                <p class="header">Welcome to our website</p>
                <form action="<?=BASE_URL; ?>/login/proccessLogin" method="POST">
                    <div class="input__group">
                        <input type="text" placeholder="Enter Username" name="username" required/>
                    </div>
                    <div class="input__group">
                        <input type="password" placeholder="Enter Password" name="pass" required/>
                    </div>
                    <p><a href="#">Forgot password?</a></p>
                    <?php Flasher::flash(); ?>
                    <button>Sign In</button>
                </form>
                <div class="divider">
                    <span>or</span>
                </div>
                <p class="create__account">
                    New Member? <a href="<?=BASE_URL; ?>/login/register">Create Account</a>
                </p>
            </div>
        </div>
    </div>

    <script src="<?=BASE_URL;?>/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
