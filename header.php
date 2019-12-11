<nav class="grid">
    <a href="
        <?php
            if(isset($_SESSION['username'])) {
                echo 'homepage.php';
            } else {
                echo 'index.php';
            }
        ?>
    ">
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
    </a>

    <div class="empty"></div>

    <div class="icon">
        <form method="get" action="resultado-pesquisa.php">
            <input class="search" type="search" name="search" placeholder="Search">
            <input type="submit" class="button" value="Search">
        </form>

    </div>

    <div class="icon grid">
        <?php

        if(isset($_SESSION['nome'])){
            echo '<div>' . $_SESSION['nome'] . '</div>';

            if(isset($_SESSION['foto'])) {
                echo '<div><img src="' . $_SESSION['foto'] . '" alt=""></div>';
            } else {
                echo '<div><img src="images/default-profile-pic.png" alt=""></div>';
            }
        ?>

        <div>
            <img src="images/notification.svg" alt="">
        </div>

        <div>
            <div class="burger">
                <img src="images/burguer.svg" alt="">
            </div>

            <div class="burguer-menu">
                <a href="

                <?php if($_SESSION['tipo'] == 1) {

                    echo 'profile-restaurant.php?username=' . $_SESSION['username'];

                } else if($_SESSION['tipo'] == 2) {

                    echo 'profile-client.php?username=' . $_SESSION['username'];
                }
                ?>

                ">
                    <div>My Profile</div>
                </a>

                <a href="cart.php">
                    <div>My Cart</div>
                </a>

                <a href="settings.php">
                    <div>Settings</div>
                </a>

                <div>
                    <form action="actions/logout.php" method="post">
                        <input type="submit" class="button" value="Logout">
                    </form>
                </div>
            </div>

        </div>

        <?php

        } else {

            echo '<a href="login.php"><div class="button">LOGIN</div></a>';
        }
        ?>
    </div>
</nav>