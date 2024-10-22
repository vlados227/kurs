<header>
    <?php
    session_start();
    if(!empty($_SESSION['auth'])){
    }
    ?>
        <div class="logo-search">
            <a href="index.php">
                <img src="images\spacecraft-rocket-svgrepo-com.svg" width="50" height="50" alt="Logo" class="logo">
            </a>
            <input type="text" placeholder="Самара" class="search-bar">
        </div>
        <nav>
            <a href="login.php">Вход</a>
            <a href="">Профиль: <? echo $_SESSION['login'] ?> </a>
            <a href="statements.php">Мои Экскурсии</a>
            <a href="register.php">Регистрация</a>
        </nav>
    </header>