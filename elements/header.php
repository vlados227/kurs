<header>
    <div class="logo-search">
        <a href="index.php">
            <img src="images/spacecraft-rocket-svgrepo-com.svg" width="50" height="50" alt="Logo" class="logo">
        </a>
        <input type="text" placeholder="Самара" class="search-bar">
        <!-- Burger icon for mobile -->
        <div class="burger-menu" onclick="toggleMenu()">&#9776;</div>
    </div>
    
    <!-- Navigation links -->
    <nav class="nav-links">
        <a href="login.php">Вход</a>
        <a href="">
            Профиль:
            <?php
                session_start();
                if(!empty($_SESSION['auth'])){
                    echo $_SESSION['login'];
                    echo "<a href='logout.php'>Выйти</a>";
                } else {
                    echo "<a href='register.php'>Регистрация</a>";
                }
            ?>
        </a>
        <a href="statement_user.php">Мои Экскурсии</a>
    </nav>
</header>

<script>
    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active');
    }
</script>

<style>
    /* Basic styling */
    .logo-search {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .search-bar {
        margin-left: 10px;
    }

    /* Hide the burger icon by default */
    .burger-menu {
        display: none;
        font-size: 24px;
        cursor: pointer;
    }

    /* Hide navigation links on smaller screens */
    .nav-links {
        display: flex;
        gap: 15px;
    }

    /* For screens 768px or smaller */
    @media (max-width: 768px) {
        /* Show the burger icon */
        .burger-menu {
            display: block;
        }

        /* Hide navigation links initially */
        .nav-links {
            display: none;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            position: absolute;
            top: 74px; /* Adjust to your header height */
            right: 0;
            background-color: #f8f8f8;
            width: 100%;
            padding: 15px;
            box-sizing: content-box;
        }

        /* Show nav-links when active */
        .nav-links.active {
            display: flex;
        }
    }
</style>
