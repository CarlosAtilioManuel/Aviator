<?php
    include 'head.php';
?>

<main>
    <menu class="welcome-main">
        <div class="welcome-div-logo">
            <img src="../../../public/img/aviator_game_logo.jpg" alt="aviator game logo">
        </div>

        <div>
            <button>Register</button>
            <button>Login</button>
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
                    include_once 'Views/Components/Welcome/WelcomeGameCard.php';
                }
            ?>
        </div>
    </section>
</main>

<?php
    include 'footer.php';
?>