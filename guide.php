<?php
// guide.php – Raid boss guide page.
// A static content page with collapsible accordion sections for each boss.
// session_start() is called so that header.php can render the correct
// navigation links for the current login state.
session_start();

require "classes/components.php";

Components::pageHeader("Guides", ["main"], []);
?>

<main class="body-wrapper page-content">

        <div class="hide-on-desk">
            <img src="Images/Asc.png" alt="">
        </div>

        <div class="introduction">
            <h1 class="heading">Raid guides</h1>
            <p class="heading-two">
                On this page we will go into detail about the raid bosses and their mechanics, please refer to this
                page for all your raiding needs when joining us, these will be updated regularly as updates change
                the game and new mechanics become available.
            </p>

            <p>
                For those of you who prefer video guides we are happy to recommend the content creators Ready
                Check
                Pull, click <a href="https://www.youtube.com/playlist?list=PLhx6nABtx9XMOA42M82n4ux4f8aIdTl5l">Here</a>
                for their playlist, or <a href="https://www.youtube.com/watch?v=GQ4QEDSGUsk">Here</a> for one
                long form
                video.
            </p>
        </div>

        <div class="bosses">
            <div class="boss-one">
                <div>
                    <img src="Images/Ulgrax.png" alt="Image of the first boss of the raid Ulgrax" class="ulgrax">
                </div>
                <div>
                    <button class="accordion">Ulgrax the Devourer</button>
                    <div class="panel">

                        <h3>Phase 1: Starts at 100 Energy</h3>

                        <h4> Stalker's Webbing</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Throws webs across the arena.</li>
                                <li>Touching the web roots you for 8 seconds.</li>
                                <li>Webs and roots can be removed with Digestive Acid.</li>
                                <li>Random players will have a green circle around them.</li>
                                <li>Roots and webs in the circle are removed when it expires.</li>
                            </ul>
                        </div>

                        <h4>Carnivorous Contest</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Casts Carnivorous Contest on a player.</li>
                                <li>All players should stand in the effect to split the strength of the pull.</li>
                                <li>Don't get pulled into the boss.</li>
                            </ul>
                        </div>

                        <h4>Tank Combo: Brutal Crush</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Casts Brutal Crush on the current tank.</li>
                                <li>Applies a debuff reducing incoming healing.</li>
                                <li>Taunt swap on 1 stack.</li>
                            </ul>
                        </div>

                        <h3>Phase 2: Boss Reaches 0 Energy</h3>

                        <h4>Feeding Frenzy</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Ulgrax gains Ready to Feed and takes 99% less damage until the Phase ends.</li>
                                <li>Summons Ravenous Spawn adds that need to be killed.</li>
                                <li>Drops Chunky Viscera that can be picked up by players.</li>
                                <li>Bring to the boss and use your Extra Action Button to feed him.</li>
                                <li>Dodge the Juggernaut Charge that go across the arena.</li>
                                <li>Casts an increasing damage AoE until fully fed.</li>
                            </ul>
                        </div>

                        <h4 class="bottom-text">Phase ends when Ulgrax reaches 100 Energy. Repeats to Phase 1.</h4>

                    </div>
                </div>
            </div>

            <div class="boss-two">

                <div>
                    <button class="accordion-two">The Bloodbound Horror</button>
                    <div class="panel-two">

                        <h4>Gruesome Disgorge</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Gruesome Disgorge is a frontal cone targeted on the Tank.</li>
                                <li>The Tank should aim this at the add spawn locations.</li>
                                <li>Groups should alternate STANDING IN the frontal.</li>
                                <li>e.g. Group 1 soaks odds, Group 2 soaks evens.</li>
                                <li>When hit by the frontal, you are sent to the The Unseeming for 40 seconds.</li>
                                <li>Getting hit by two frontals back to back will likely kill you.</li>
                            </ul>
                        </div>

                        <h4>The Shadow Realm: The Unseeming</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Adds can only be killed by players in the The Unseeming.</li>
                                <li>Lost Watcher are tanked.</li>
                                <li>Black Bulwark must be kicked.</li>
                                <li>Forgotten Harbinger spam cast Manifest Horror.</li>
                                <li>Small adds are summoned that will walk towards the boss.</li>
                                <li>Don't let the adds reach the boss!</li>
                            </ul>
                        </div>

                        <h4>Grasp From Beyond</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Randomly debuffs a couple players at a time.</li>
                                <li>Causes players to drop puddles under them every second.</li>
                                <li>Stutter-step when dropping as they explode after 3 seconds.</li>
                            </ul>
                        </div>

                        <h4>Goresplatter</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Creates a massive AoE that players need to run out of.</li>
                                <li>Deals lethal damage to anyone within 60 yards of the boss.</li>
                                <li>Leaves a heavy hitting DoT on all players.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="Images/Bloodbound.png" alt="Image of the second boss of the raid Bloodbound Horror"
                        class="bloodbound">
                </div>

            </div>


            <div class="boss-one">
                <div>
                    <img src="Images/Sikran.png" alt="Image of the first boss of the raid Ulgrax" class="ulgrax">
                </div>
                <div>
                    <button class="accordion">Sikran</button>
                    <div class="panel">
                        <h4>Phase Blades</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Targets 4 players and will dash to them in an order.</li>
                                <li>Players hit will leave a Cosmic Simulacrum when struck.</li>
                                <li>Targeted players will have a purple line pointing to the next person.</li>
                                <li>Move out of the group closer to the edge.</li>
                                <li>Make sure no additional players are in the path of your line.</li>
                                <li>A rectangle will avoid players getting hit by multiple dashes.</li>
                            </ul>
                        </div>

                        <h4>Decimate</h4>

                        <div class="mechanics">
                            <ul>
                                <li>After Phase Blades, casts Decimate on 3 players.</li>
                                <li>Fires a damaging line through marked players.</li>
                                <li>Any Cosmic Simulacrum struck by the line will detonate.</li>
                                <li>Deals AoE damage and leaves a DoT for every detonation.</li>
                                <li>Players should aim to hit 1-2 Simulacrums with each Decimate.</li>
                            </ul>
                        </div>

                        <h4>Shattering Sweep</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Casts after 2 Phase Blades and 2 Decimates.</li>
                                <li>Run out of the circle to avoid 50% damage taken debuff.</li>
                                <li>Any remaining Cosmic Simulacrum will detonate and deal bonus damage.</li>
                            </ul>
                        </div>

                        <h4>Tank Combo: Captain's Flourish</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Casts two Expose and then Phase Lunges.</li>
                                <li>Taunt swap after two Exposes.</li>
                                <li>One Tank takes both Exposes (use a defensive).</li>
                                <li>The other tank taunts and eats the Phase Lunge.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="boss-two">

                <div>
                    <button class="accordion-two">Rasha'nan</button>
                    <div class="panel-two">
                        <h4>Rolling Acid</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Summons a wave on two players after a few seconds.</li>
                                <li>Whichever side of the character the animation is on will indicate the direction the
                                    wave
                                    travels.</li>
                                <li>Each wave set will have one left wave and one right wave.</li>
                                <li>Marked players should drop the waves on either side of the raid.</li>
                                <li>Mechanic is identical to the Dawnbreaker dungeon.</li>
                            </ul>
                        </div>

                        <h4>Spinneret's Strands</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Drops a puddle of webs on targeted players after a few seconds.</li>
                                <li>Webs are placed outside the group.</li>
                                <li>Players are tethered to their web and should run away to break it.</li>
                            </ul>
                        </div>

                        <h4>Infested Spawn</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Spawns adds on targeted players after a few seconds.</li>
                                <li>Move into melee so adds spawn together and can be CC'ed and defeated.</li>
                            </ul>
                        </div>

                        <h4>Fly Away: Acidic Eruption</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Rasha'nan will periodically fly away to a different part of the arena.</li>
                                <li>Chase the boss down and interrupt Acidic Eruption.</li>
                            </ul>
                        </div>

                        <h4>Tank Mechanic: Savage Assault</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Casts Savage Assault two times in succession.</li>
                                <li>Taunt swap on every Savage Assault.</li>
                                <li>Unmitigated damage is left as a DoT. Use defensives to reduce the initial hit.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="Images/Rashanan.png" alt="Image of the second boss of the raid Bloodbound Horror"
                        class="bloodbound">
                </div>

            </div>


            <div class="boss-one">
                <div>
                    <img src="Images/Princess.png" alt="Image of the first boss of the raid Ulgrax" class="ulgrax">
                </div>
                <div>
                    <button class="accordion">Nexus-Princess Ky'veza</button>
                    <div class="panel">
                        <h3>Phase 1: The Phantom Blade</h3>

                        <h4>Assassination</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Targets players, dropping an untargetable clone when it expires.</li>
                                <li>Place each debuff on a hexagon corner.</li>
                                <li>Each cycle will add one more Assassination.</li>
                            </ul>
                        </div>

                        <h4>Nether Rift</h4>

                        <div class="mechanics">
                            <ul>
                                <li>After Assassination, the boss and clones will summon a Nether Rift on them.</li>
                                <li>This pulls all players to their location and kills any players that enter.</li>
                                <li>If Rifts are spread, the pull will likely cancel out.</li>
                                <li>If Rifts are on the same side, players will be heavily pulled.</li>
                                <li>The Tank should place the boss on the side with the least rifts.</li>
                            </ul>
                        </div>

                        <h4>Twilight Massacre</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Each clone picks one target and will charge to them after a few seconds.</li>
                                <li>Clones will have a line showing the direction it will charge in.</li>
                                <li>The clone that is targeting you will have a red line.</li>
                                <li>Players should charge their clone directly outwards.</li>
                                <li>Nether Rift will be cast again at the new bosses and clone locations.</li>
                            </ul>
                        </div>

                        <h3>Phase 2: The Starless Night</h3>

                        <h4>Regicide</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Attached line telegraphs to random players.</li>
                                <li>Dodge other telegraphs while not moving your telegraph.</li>
                                <li>This mechanic is identical to Fyrakk's Blaze.</li>
                            </ul>
                        </div>

                        <h4 class="bottom-text">This cycle repeats back to Phase 1, adding more Assassinations and
                            Eclipse pie slices with each new cycle.</h4>
                    </div>
                </div>
            </div>


            <div class="boss-two">

                <div>
                    <button class="accordion-two">Broodtwister Ovi'nax</button>
                    <div class="panel-two">
                        <h4>Room Layout</h4>

                        <div class="mechanics">
                            <ul>
                                <li>The arena is separated into three sections each containing eggs.</li>
                                <li>There are three types of eggs and adds that will hatch from them.</li>
                                <li>Each section has one type of egg that is more dominant.</li>
                            </ul>
                        </div>

                        <h4>Ingest Black Blood</h4>

                        <div class="mechanics">
                            <ul>
                                <li>At the start of the fight, the boss will activate the closest section.</li>
                                <li>Sanguine Overflow will slowly expand from the edge of the room.</li>
                                <li>If the overflow reaches an egg, an add hatches and is empowered.</li>
                                <li>After the previous section is filled, the next closest is activated.</li>
                                <li>We recommend the following order: Big Eggs Section, Medium Eggs Section, then Egg
                                    Clusters section.</li>
                            </ul>
                        </div>

                        <h4>Experimental Dosage</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Targets two players with a debuff that will hatch eggs.</li>
                                <li>Any eggs in the purple circle will hatch and summon adds.</li>
                                <li>Each player should hatch their own egg and prioritize eggs closer to the overflow.
                                </li>
                            </ul>
                        </div>

                        <h4>Big Eggs: Colossal Spider</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Big Eggs will summon a Colossal Spider that needs to be tanked.</li>
                                <li>Vicious Bite increases its damage by 25% every cast.</li>
                                <li>Mutation: Necrotic: 50% health increase and reduced healing on Tank.</li>
                            </ul>
                        </div>

                        <h4>Medium Eggs: Voracious Worm</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Medium eggs will summon an immovable Voracious Worm that needs to be kicked.</li>
                                <li>Poison Burst deals high raid damage if successful.</li>
                                <li>Mutation: Ravenous: 50% health increase and increased cast speed.</li>
                            </ul>
                        </div>

                        <h4>Egg Clusters: Blood Parasite</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Egg Clusters will spawn 4 Blood Parasites that fixate random players.</li>
                                <li>Parasites Infest their target, dealing damage and summoning two more parasites.</li>
                                <li>Mutation: Accelerated: 50% health increase and stacking movement speed increase.
                                </li>
                            </ul>
                        </div>

                        <h4>Tank Mechanic: Volatile Concoction</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Volatile Concoction is cast on a tank.</li>
                                <li>When the debuff expires, the lower the tank's health, the more damage the raid
                                    takes.
                                </li>
                                <li>Tank swap on every debuff.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="Images/Broodtwister.png" alt="Image of the second boss of the raid Bloodbound Horror"
                        class="bloodbound">
                </div>

            </div>


            <div class="boss-one">
                <div>
                    <img src="Images/Court.png" alt="Image of the first boss of the raid Ulgrax" class="ulgrax">
                </div>
                <div>
                    <button class="accordion">The Silken Court</button>
                    <div class="panel">
                        <h3>Phase 1: Clash of Royals</h3>

                        <h4>Web Bomb</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Web Bombs are periodically thrown on the ground, slowing an area.</li>
                                <li>Step in the middle to trigger the Web Bomb.</li>
                                <li>If two players are inside, they are connected with Binding Webs.</li>
                                <li>Web Pairs should get connected with Binding Webs in Phase 1.</li>
                                <li>Leaving the large circle will break the link.</li>
                            </ul>
                        </div>

                        <h4>Reckless Charge</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Anub'arash burrows and tries to charge across the arena.</li>
                                <li>Stop the boss by making him charge into Binding Webs.</li>
                                <li>Web Pairs should extend their Web over the charge path.</li>
                                <li>Anub'arash takes 25% more damage for 7 seconds when stopped.</li>
                            </ul>
                        </div>

                        <h3>Intermission 1: Void Ascension</h3>

                        <h4>Shatter Existence</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Skeinspinner Takazj teleports to the middle, shielding herself.</li>
                                <li>Two pie slices will fill up at a time in a random order.</li>
                                <li>The pie slices will then detonate in that same order.</li>
                                <li>Stand next to the first slice, then step into it after it detonates.</li>
                                <li>The intermission ends once the shield is broken.</li>
                            </ul>
                        </div>

                        <h3>Phase 2: Grasp of the Void</h3>

                        <h4>Web Vortex</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Skeinspinner Takazj pulls everyone in and then casts an AoE around her.</li>
                                <li>All players will be connected with Binding Webs.</li>
                                <li>Run out and spread out from your partner to break the Webs.</li>
                            </ul>
                        </div>

                        <h4>Stinging Swarm</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Three random players will get the Stinging Swarm debuff.</li>
                                <li>When dispelled, this debuff will jump to the closest player or Skeinspinner Takazj.
                                </li>
                                <li>For each stack on Skeinspinner Takazj, she takes 50% more damage.</li>
                                <li>All stacks must be transferred to Skeinspinner Takazj before Cataclysmic Entropy.
                                </li>
                                <li>Stack 1: Dispel when the player is in position.</li>
                                <li>Stack 2: Dispel when the boss teleports to the middle.</li>
                                <li>Stack 3: Dispel before the cast finishes.</li>
                            </ul>
                        </div>

                        <h3>Intermission 2: Raging Fury</h3>

                        <h4>Spike Storm</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Anub'arash teleports to the middle, shielding himself.</li>
                                <li>Rings will spawn on the intercardinals and slowly expand.</li>
                                <li>Getting hit by a ring will stun you until the spike is destroyed.</li>
                                <li>The intermission ends when the shield is broken.</li>
                            </ul>
                        </div>

                        <h3>Phase 3: Unleashed Rage</h3>

                        <h4>All Abilities</h4>

                        <div class="mechanics">
                            <ul>
                                <li>All abilities except Web Bomb are active.</li>
                                <li>Keep some Binding Webs from Web Vortex for Reckless Charge.</li>
                                <li>Handle Stinging Swarm identically.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="boss-two">

                <div>
                    <button class="accordion-two">Queen Ansurek</button>
                    <div class="panel-two">
                        <h3>Phase 1</h3>

                        <h4>Tank Mechanic: Liquefy and Feast</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Casts Liquefy and Feast on the active Tank.</li>
                                <li>Liquefy causes increased Physical damage taken for 30 seconds.</li>
                                <li>Taunt swap on the Liquefy cast.</li>
                                <li>Drops an acid puddle under the boss.</li>
                                <li>Feast causes a large Physical damage hit and a large healing absorb.</li>
                                <li>Tank boss on the edge and rotate on every acid puddle.</li>
                            </ul>
                        </div>

                        <h4>Reactive Toxin</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Move to the edge if you get Reactive Toxin.</li>
                                <li>Drops Reactive Froth when the debuff expires.</li>
                                <li>Don't touch Reactive Froth until Venom Nova mechanic.</li>
                            </ul>
                        </div>

                        <h4>Venom Nova</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Periodically casts Venom Nova, killing anyone within 8 yards.</li>
                                <li>Summons a growing ring that deals high damage to anyone hit.</li>
                                <li>Players should group next to Reactive Froth.</li>
                                <li>One player should walk into Reactive Froth to "pop" it when the ring is close,
                                    sending
                                    players over the ring.</li>
                                <li>If Venom Nova impacts "unpopped" Froth, all players get a heavy DoT.</li>
                            </ul>
                        </div>

                        <h4>Silken Tomb</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Occasionally casts Silken Tomb, rooting players after a couple seconds.</li>
                                <li>Tombs must be killed before the player is freed.</li>
                                <li>Splashes AoE damage to anyone close, so loose spread close to boss.</li>
                                <li>Identical to Tindral Roots.</li>
                            </ul>
                        </div>

                        <h3>Intermission 1: Shield Break</h3>

                        <h4>Predation</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Puts a massive shield on herself at the start of the intermission.</li>
                                <li>Any player that gets too close to her will be instantly killed.</li>
                                <li>Periodically pulls players closer to her with Wrest.</li>
                                <li>Players are slowed more and more the longer the phase lasts.</li>
                            </ul>
                        </div>

                        <h3>Phase 2: Begins after Shield Break</h3>

                        <h4>The Ascent: Acidic Apocalypse</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Ansurek becomes immune to damage and players must ascend.</li>
                                <li>Players split into two groups to the outer platforms.</li>
                                <li>When Ascended Voidspeakers die, they knock all players back.</li>
                                <li>Use this knockback to ascend to the next platform.</li>
                                <li>Will periodically try to pull players off the platforms with Wrest.</li>
                                <li>Arrive to the top before Acidic Apocalypse finishes casting.</li>
                            </ul>
                        </div>

                        <h4>The Adds</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Players will encounter many different adds as they ascend.</li>
                                <li>Ascended Voidspeaker should be killed last.</li>
                                <li>Interrupt Shadowblast.</li>
                                <li>Knocks players back on death.</li>
                                <li>Devoted Worshipper should be killed first.</li>
                                <li>Kill before Cosmic Apocalypse finishes casting.</li>
                                <li>Healers dispel Gloom Touch.</li>
                                <li>Chamber Guardian knocks tanks back.</li>
                                <li>Chamber Guardians fire a laser beam that knocks players back.</li>
                            </ul>
                        </div>

                        <h3>Phase 3: Begins After the Ascent</h3>

                        <h4>Abyssal Conduit</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Two players will be marked with Abyssal Conduit at the start of each cycle.</li>
                                <li>Drops a set of teleporters at the player's locations.</li>
                                <li>Place one close to the boss and one further away.</li>
                            </ul>
                        </div>

                        <h4>Summoned Acolyte</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Ansurek summons Summoned Acolyte, and these should be killed ASAP.</li>
                                <li>Interrupt Null Detonation after the shield breaks.</li>
                                <li>Picking it up and then using an Abyssal Conduit will remove it.</li>
                            </ul>
                        </div>

                        <h4>Frothing Gluttony</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Ends a cycle by casting Frothing Gluttony.</li>
                                <li>Periodically pulls players to her, killing anything within 20 yards.</li>
                                <li>Summons a ring that closes onto her position.</li>
                                <li>Use the Abyssal Conduit to teleport over the ring.</li>
                                <li>Ansurek gains a 100% damage buff if it contacts an Acolyte.</li>
                            </ul>
                        </div>

                        <h4>Tank Mechanic: Infest and Gorge</h4>

                        <div class="mechanics">
                            <ul>
                                <li>Casts Infest and Gorge on the active Tank.</li>
                                <li>Infest: The Tank spawns Spiders which will walk to the boss.</li>
                                <li>The Tank should run far away behind the group.</li>
                                <li>All DPS should kill the spiders before they reach the boss.</li>
                                <li>Gorge leaves a debuff increasing Physical damage taken.</li>
                                <li>Tank boss on the edge and rotate every Gloom Splatter puddle.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="Images/Ansurek.png" alt="Image of the second boss of the raid Bloodbound Horror"
                        class="bloodbound">
                </div>

            </div>

        </div>

        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>

        <script>
            var acc = document.getElementsByClassName("accordion-two");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>

    </main>

<?php
Components::pageFooter();
?>