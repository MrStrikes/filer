<header>
    <span class="spacing-header-title">
        <div class="title">
            <h1 class="hMsg">The filer project</h1>
        </div>
        <div class="users">
            <?php if(isset($_SESSION['username'])): ?>
            <p class="hUsr">Hello <?php echo $_SESSION['username']; ?> !</p>
            <?php else: ?>
            <p class="hUsr">Not logged in</p>
            <?php endif; ?>
        </div>
    </span>
    <span class="spacing-header-links">
        <div class="links">
            <a href="/filer/index.php" class="home link">Homepage</a>
            <?php if (!isset($_SESSION['username'])): ?>
                <a href="/filer/assets/register/register.php">Register</a>
            <?php endif; ?>
            <?php if(isset($_SESSION['username'])): ?>
                <a href="/filer/assets/workspace/workspace.php">My Workspace</a>
                <a href="/filer/assets/login/logout.php">Logout</a>
                <?php else: ?>
                <a href="/filer/assets/login/login.php">Login</a>
            <?php endif; ?>
        </div>
    </span>
</header>