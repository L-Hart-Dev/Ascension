<?php
// index.php – Home page.
// Displays a hero banner, a welcome introduction, and a team spotlight.
// session_start() is required on every page that reads $_SESSION.
session_start();

require "classes/components.php";

// Render the shared page header. No extra stylesheets or scripts beyond main.css.
Components::pageHeader("Home", ["main"], []);
?>

<main class="body-wrapper page-content">
        <div class="hero">
            <div class="hero-banner-desk hide-on-mobile">
                <img src="Images/banners.jpg" alt="Hero banner" class="fading-out">
            </div>

            <div class="hide-on-desk">
                <img src="Images/Asc.png" alt="">
            </div>
        </div>

        
        <div class="introduction">

            <h1 class="heading">Welcome!</h1>

            <p>Welcome to the Ascension, a guild and raiding team in the game World of Warcraft, we work primarily on
                the Terokkar EU server, we are currently welcoming all players new and old to join us in our community,
                if you are looking for a social and casual team to get started with how the raids work then we are the
                team for you, we currently have two raid leaders overseeing two teams both working though Normal
                difficulty and working their way to Heroic with the hope of gaining the "Ahead of the Curve" achievment,
                please feel free to have a look at our <a href="guide.php">raid guides</a>, <a href="loot.php">loot tables</a> and <a href="events.php">events</a>, please also
                apply with our guild or raid teams, and if you have any questions then feel free to leave a message!
            </p>
        </div>

        <div class="meet-team">
            <img src="Images/team-one.jpg" alt="Team one" class="fade-in">

            <h2 class="heading">Meet the team!</h2>

            <p>
                Say hello to our current leading progression team, they have already begun making solid progress into Heroic difficulty with 6/8 bosses down, they are also working on getting as ready as possible for the next content patch, they are looking to hit the ground running as soon as it launches this coming September, they treat the game very casually and are welcoming to all willing to learn and have fun!
            </p>
        </div>

        <div class="meet-team-mobile">
            <img src="Images/team-one.jpg" alt="Team one">
            <p class="team-mobile-text">
                Say hello to our current leading progression team, they have already begun making solid progress into Heroic difficulty with 6/8 bosses down, they are also working on getting as ready as possible for the next content patch, they are looking to hit the ground running as soon as it launches this coming September, they treat the game very casually and are welcoming to all willing to learn and have fun!
            </p>
        </div>

        <script>
            // Fade the hero banner out as the user scrolls down the page.
            window.addEventListener('scroll', () => {
                const image = document.querySelector('.fading-out');
                const scrollPosition = window.scrollY;
                const fadeStart = 1;
                const fadeEnd = 750;

                // Calculate opacity: 1 at the top, 0 at fadeEnd pixels of scroll.
                let opacity = 1 - (scrollPosition - fadeStart) / (fadeEnd - fadeStart);
                opacity = Math.max(0, Math.min(1, opacity));

                image.style.opacity = opacity;
            });
        </script>

        <script>
            // Fade the team photo in as the user scrolls down the page.
            window.addEventListener('scroll', () => {
                const image = document.querySelector('.fade-in');
                const scrollPosition = window.scrollY;
                const fadeStart = 1;
                const fadeEnd = 600;

                // Calculate opacity: 0 at the top, 1 at fadeEnd pixels of scroll.
                let opacity = (scrollPosition - fadeStart) / (fadeEnd - fadeStart);
                opacity = Math.max(0, Math.min(1, opacity));

                image.style.opacity = opacity;
            });
        </script>


    </main>
<?php
Components::pageFooter();
?>
<!-- CTRL + SHIFT + R for a hard refresh for when the cunting page cache's again -->