<!-- Partial for the sidebar header used across the site -->
<?php
    // Set fallback values for vars if they are not set in the including file
    $category = $category ?? "Unknown";

    // TODO: get login status
?>

<header>
    <h1>The Cyber Speedrunning Leaderboard</h1>
</header>

<nav>
<!-- TODO: add actual links -->
    <div><a>Dashboard</a></div>
    <div><a>Leaderboard</a></div>
    <div><a>Help</a></div>
</nav>

<footer>
<!-- TODO: check login status and display user profile -->
    <a>Login</a>
</footer>