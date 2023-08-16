<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=BASE_URL; ?>/img/favicon.ico" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?=BASE_URL; ?>/css/login.css" />
    <title>Our webbb</title>
</head>

<body>
    <div class="container">
        <div class="container__left">
            <img src="<?=BASE_URL; ?>/assets/bg3.png" alt="" />
            <h2>Hello, Friend!</h2>
            <p>Enter your personal details and start your journey with us</p>
        </div>
        <div class="container__right">
            <div class="content">
                <img class="logo" src="<?=BASE_URL; ?>/assets/logo1.png" alt="logo" />
                <p class="header">Welcome to our website</p>
                <form action="<?=BASE_URL; ?>/register/proccessRegist" method="POST">
                    <div class="input__group">
                        <input type="text" placeholder="Enter Username" name="username" required/>
                    </div>
                    <div class="input__group">
                        <input type="password" placeholder="Enter Password" name="pass" required/>
                    </div>
                    <!-- <div class="input__group">
                        <input type="password" placeholder="Enter Password" />
                    </div> -->
                    <?php Flasher::flash(); ?>
                    <button>Sign Up</button>
                </form>
                <div class="divider">
                    <span>or</span>
                </div>
                <p class="create__account">
                    Already have account? <a href="<?=BASE_URL; ?>/login/">Login</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
