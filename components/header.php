<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<header>
    <img src="images/hamro-restaurant-logo.png" alt="Hamro Restaurant Logo" class="logo" style="width: 50px; height: 50px;">
    <h1>Hamro Restaurant</h1>
    <nav>
            <ul class="nav-links">
                <li><a href="index.php" class="<?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="about.php" class="<?php echo $currentPage === 'about.php' ? 'active' : ''; ?>">About Us</a></li>
                <li><a href="menus.php" class="<?php echo $currentPage === 'menus.php' ? 'active' : ''; ?>">Menus</a></li>
                <li><a href="reserve.php" class="<?php echo $currentPage === 'reserve.php' ? 'active' : ''; ?>">Reserve Now</a></li>
            </ul>
        </nav>
    <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
    </header>