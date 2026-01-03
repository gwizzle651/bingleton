<!-- Partial for the sidebar header used across the site -->
<?php
    // Set fallback values for vars if they are not set in the including file
    $category = $category ?? "Unknown";

    // TODO: get login status
?>

<div class="sidebar">
    <header class="header">
        <h1 class="h1-centered">The Cyber Speedrunning Leaderboard</h1>
    </header>

    <nav class="nav-menu-v">
    <!-- TODO: add actual links -->
        <a class="h4">Dashboard</a>
        <a class="h4">Leaderboards</a>
        <a class="h4">Help</a>
    </nav>

    <footer class="">
    <!-- TODO: check login status and display user profile -->
        <a>Login</a>
    </footer>
</div>