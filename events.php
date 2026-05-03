<?php
// events.php – Guild events listing page.
// A static content page displaying upcoming in-game community events.
// session_start() is called so that header.php can read $_SESSION and
// render the correct navigation links for the logged-in state.
session_start();

require "classes/components.php";

Components::pageHeader("Events", ["main"], []);
?>

<main class="body-wrapper page-content">
        <div class="hide-on-desk">
            <img src="Images/Asc.png" alt="">
        </div>

        <div class="event-wrap">
            <div class="introduction">
                <h1 class="heading">Events</h1>

                <p>Welcome to our events page, here we will have a list of up coming events you can join the guild in
                    and enjoy everyones company, in the coming months we have some special activities planned for our
                    upcoming anniversary</p>
            </div>


            <div class="text-box-one">
                <img src="Images/Stormwind.png" alt="Stormwind City" class="stormwind">
                <div class="text-content">
                    <h2 class="heading">Level one gnome run</h2>
                    <p class="heading-two">
                        On April Saturday 26th we welcome all to our anniversary party event! All you need to do is make
                        a brand new level one Gnome, get your way to Stormwind via the Deeprun Tram in Ironforge (Or
                        bribe one of the Mages for a portal) and get ready for our race down to BootyBay in
                        Stranglethorn Vale, for obvious reasons usage of the Chauffeured Chopper is forbidden and
                        any caught using it by our patrolling officers will disqualify any culprits, first place winner
                        gets 100'000 gold, second gets 60'000 gold and third place gets 40'000 gold.
                    </p>


                    <p>
                        The event will take place at 12:00pm EU server time, please be there on time and if you are
                        joining us in the Discord please be in the "Events" channel by 11:45am (I swear if we get an
                        army of bloody Rogues AGAIN...)
                    </p>
                </div>
            </div>

            <div class="text-box-two">
                <img src="Images/Orgrimmar.png" alt="Orgrimmar City" class="orgrimmar">
                <div class="text-content">
                    <h2 class="heading">Gnomish assault on Orgrimmar</h2>
                    <p class="heading-two"> 
                        Once the race has been decided and we have round up all those Gnomes that got lost along the way or decided to visit the Goldshire Inn. (I know exactly who you are) We will be taking the boat from Booty Bay into Ratchet in The Barrens, we will then proceed to make our way to Durotar to begin our level one Gnomish assault on the Horde Capital of Orgrimmar City.
                    </p>

                    <p>
                        First one to kill a Vulpera wins 20'000 gold...
                    </p>
                </div>
            </div>

            <div class="text-box-one">
                <img src="Images/Gurubashi.png" alt="Gurubashi Arena" class="gurubashi">
                <div class="text-content">
                    <h2 class="heading">Monthly Arena Battle</h2>
                    <p class="heading-two">Every month, on the last Sunday we like to have ourselves a little game, everyone wishing to join should make their way to the Gurubashi Arena within Stranglethorn Vale where we will have two arena events, a tournament followed by a free for all, the winners of either event will win 50'000 gold, the same person cannot win both events and if you win one you are out of the other, participants shall vote on the day on which event will happen first. (Playing as a rogue and hiding for the entire fight only to kill the last weakened player is forbidden!) </p>

                    <p>
                        If someone outside the guild jumps into the arena I fully expect everyone in attendance to dogpile said intruder.
                    </p>
                </div>
            </div>

            <div class="text-box-two">
                <img src="Images/Icecrown.jpg" alt="Icecrown Citadel" class="icecrown">
                <div class="text-content">
                    <h2 class="heading">Level 30 Icecrown Citadel Raid</h2>
                    <p class="heading-two">
                        You have voted and we have answered! Instead of our usual raid night on Thursday April 10th we will be conducting a lvel 30 raid of Icecrown Citadel, this will involve you needing to get a character to level 30, locking your level at the Stormwind Keep trader Behsten for 10g and getting yourself as geared up as possible. Good luck to all still wishing to get Invincible
                    </p>

                    <p>
                        If there are any of you wishing to attempt to do the Legendary Weapon Boss Quests please get in touch with one of the raid leaders and we will see if we can get it organised, please be aware that we will not be spending an entire night on Blood-Queen Lana'thel.
                    </p>
                </div>
            </div>
        </div>
    </main>>

<?php
Components::pageFooter();
?>