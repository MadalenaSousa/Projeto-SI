<nav class="grid">
    <a href="homepage.php">
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
    </a>
    <div class="icon"></div>

    <div class="icon">
        <input type="search" placeholder="Search">
    </div>

    <div class="icon grid">
        <div>
            <?php echo $_SESSION['nome'] ?>
        </div>
        <div>
            <img src=" . <?php echo $_SESSION['foto'] ?> . "alt="">
        </div>
        <div>
            <img src="images/notification.svg" alt="">
        </div>
        <div>
            <img src="images/burguer.svg" alt="">
        </div>
    </div>
</nav>