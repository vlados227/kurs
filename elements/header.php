<header>
        <div class="logo-search">
            <a href="index.php">
                <img src="images\spacecraft-rocket-svgrepo-com.svg" width="50" height="50" alt="Logo" class="logo">
            </a>
            <input type="text" placeholder="Самара" class="search-bar">
        </div>
        <nav>
            <a href="login.php">Вход</a>
            <a href="">Профиль:     <?php
                    session_start();
                    if(!empty($_SESSION['auth'])){
                        echo $_SESSION['login'];
                        echo "<a href='logout.php'>Выйти</a>";
                    }else{
                        echo "<a href='register.php'>Регистрация</a>";
                    }
                    ?> </a>
            <a href="statement_user.php">Мои Экскурсии</a>
        </nav>
    </header>