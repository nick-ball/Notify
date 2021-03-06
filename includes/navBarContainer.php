<div id="navBarContainer">
                <!-- potentially change if needed -->
                <script>
                    $("#navBarContainer").on("mousedown touchstart mousemove touchmove", function(e) {
                        e.preventDefault();
                    });
                </script>
                <nav class="navBar">
                    <span role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
                        <img src="assets/images/icons/notifySmaller.svg" alt="Logo" title="Home">
                    </span>

                    <div class="group">
                        <div class="navItem">
                            <span role="link" tabindex="0" onclick="openPage('search.php')" class="navItemLink">Search 
                                <img class="icon" src="assets/images/icons/search.png" alt="Search Image">
                            </span>
                        </div>
                    </div>

                    <div class="group">
                    <div class="navItem">
                            <span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
                        </div>
                        <div class="navItem">
                            <span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
                        </div>
                        <div class="navItem">
                            <span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
                        </div>
                        <div class="navItem">
                            <span role="link" tabindex="0" onclick="openPage('about.php')" class="navItemLink">About</span>
                        </div>
                    </div>

                </nav>
            </div>