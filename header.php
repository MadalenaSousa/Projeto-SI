<nav class="grid">
    <a href="<?php
                if(isset($_SESSION['username'])) {
                    echo 'homepage.php';
                } else {
                    echo 'index.php';
                }
              ?>">
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
    </a>

    <div class="empty">

    </div>

    <div class="icon">
        <input type="search" placeholder="Search">
    </div>

    <div class="icon grid">
        <div>
            <?php

            if(isset($_SESSION['nome'])){
                echo $_SESSION['nome'];
            } else {
                echo '<a href="login.php"><div class="button">LOGIN</div></a>';
            }
            ?>
        </div>
        <div>
            <img src="<?php
                            if(isset($_SESSION['foto'])){
                                echo $_SESSION['foto'];
                            }
                        ?>" alt="">
        </div>
        <div>
            <img src="images/notification.svg" alt="">
        </div>
        <div>
            <img src="images/burguer.svg" alt="">
        </div>
    </div>
</nav>