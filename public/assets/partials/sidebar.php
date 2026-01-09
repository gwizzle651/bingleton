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

    <footer class="footer">
    <!-- TODO: check login status and display user profile -->
        <a class="button-l-highlight h4-centered w-100">Login</a>
    </footer>
</div>