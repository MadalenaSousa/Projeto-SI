<nav>
    <a href="index.php">
        <div class="logo col-2">
            <img src="images/logo.png" alt="">
        </div>
    </a>
    <div class="icon col-6"></div>

    <div class="icon col-2">
        <input type="search" placeholder="Search">
    </div>

    <div class="icon col-2">
        <div class="col-3">
            <?php echo $_SESSION['nome'] ?>
        </div>
        <div class="col-3">
            <img src=" . <?php echo $_SESSION['foto'] ?> . "alt="">
        </div>
        <div class="col-3">
            <img src="images/notification.svg" alt="">
        </div>
        <div class="col-3">
            <img src="images/burguer.svg" alt="">
        </div>
    </div>
</nav>