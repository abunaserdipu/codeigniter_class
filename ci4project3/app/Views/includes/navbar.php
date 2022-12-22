<?php echo $page = basename($_SERVER['PHP_SELF']); ?>
<div class="p-5 bg-primary text-white text-center">
    <h1>CodeIgniter</h1>
    <p>CodeIgniter Practice!</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($page == 'index.php') ? 'active' : ''; ?>" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($page == 'about') ? 'active' : ''; ?>" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($page == 'contact') ? 'active' : ''; ?>" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($page == 'student') ? 'active' : ''; ?>" href="student">Students List</a>
            </li>
        </ul>
    </div>
</nav>