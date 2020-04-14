<header>
    <div id="top-bar">
        <a href="/"><h2>Cuisine Catering</h2></a>
    </div>

    <input type="checkbox" class="hidden" id="nav-checkbox">
    <label for="nav-checkbox" id="nav-toggle" class="small_screen">
        <span id="nav-toggle-icon" class="small-screen"></span>
    </label>
    <nav class="navigation">
        <ul>
            <?php
            $uri = $_SERVER["REQUEST_URI"];
            $page_array = explode("/", $uri);
            $page = end($page_array);
            ?>
            <li>
                <a <?php if ($page == "") {echo 'class="current-page"';} ?> href=".">Home</a>
            </li>
            <li>
                <a <?php if ($page == "about") {echo 'class="current-page';} ?> href="about">About Us</a>
            </li>
            <li>
                <a <?php if ($page == "contact") {echo 'class="current-page';} ?> href="contact">Contact</a>
            </li>
        </ul>
    </nav>

</header>
