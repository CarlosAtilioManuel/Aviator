<?php
    include_once 'head.php';

    //var_dump($db_connection);
?>

<main>
    <menu class="welcome-main">
        <div class="welcome-div-logo">
            <img src="../../../public/img/aviator_game_logo.jpg" alt="aviator game logo">
        </div>

        <div class="w-m-access-button">
            <button>Register</button>
            <button class="w-adm-btn-login">Login</button>
        </div>
    </menu>

    <section class="welcome-slide-section">
        <div class="welcome-slide">
            <img src="../../../public/img/aviator-welcome-page-slide-image-1.jpg" alt="">
        </div>
    </section>

    <section class="welcome-card-section">
        <div class="welcome-card-title">
            <h1>Our Games</h1>
        </div>

        <div class="welcome-cards">
            <?php
                $counter = 0;
                
                for($counter = 0; $counter < 5; $counter++){
                    //if you wanna see what happen with the code bellow according to this loop above, just replace the 'include_once' functiom or method to 'include' only. And then, you're gonna see it working so fast
                    include_once 'Views/Components/Welcome/WelcomeGameCard.php';
                }
            ?>
        </div>
    </section>

    <section class="welcome-social-midia-zap">
        <i class="fa fa-brands fa-5x fa-whatsapp fa-beat fa-blue" id="btn-welcome-zap-talking"></i>
    </section>

    <section>

    </section>

    <section>

    </section>

    <section>

    </section>

    <section class="welcome-account-popup hide">
        <div>
            <div class="welcome-site-entrance">
                <i class="fa fa-2x fa-circle-user"></i>
                <span>Site Entrance</span>
            </div>

            <div>
                <div class="welcome-site-entrance-input">
                    <i class="fa fa-1px fa-user"></i>
                    <input type="text" name="emailorpassword" placeholder="Email/Phone">
                    <i class="fa fa-1px fa-user hide invisible"></i>
                </div>

                <label for="emailorpassword" class="field-tobe-full">Field must not be empty</label>
            </div>
            
            <div>
                <div class="welcome-site-entrance-input">
                    <i class="fa fa-1x fa-lock"></i>
                    <input type="password" placeholder="Password" id="welcome-password-input">
                    <i class="fa fa-1x fa-eye-slash" id="welcome-btn-toggle-password"></i>
                </div>

                <label for="" class="field-tobe-full">Field must not be empty</label>
            </div>

            <div class="w-adm-pp-remember-me">
                <input type="checkbox" name="welcome-rember-me">
                <span>Remember me</span>
            </div>

            <div class~="w-adm-pp-btn-login w-adm-pp-btn">
                <button id="w-adm-pp-btn-login">Login</button>
            </div>

            <div>
                <a href="#">Forgot your password</a>
            </div>
        </div>

        <div>
            <div>
                <p>Not registed yet?</p>
            </div>

            <div  class="w-adm-pp-btn">
                <button>Register</button>
            </div>
        </div>
    </section>
</main>

<?php
    include 'footer.php';
?>