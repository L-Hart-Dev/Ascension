<?php
// loot.php – Loot tables page.
// Displays all loot items grouped by boss using an image-hover tooltip system.
// Each .image-container holds a small item icon and a larger tooltip image;
// tooltip.js handles positioning the tooltip near the mouse cursor on hover.
// session_start() is called so that header.php can render the correct
// navigation links for the current login state.
session_start();

require "classes/components.php";

Components::pageHeader("Loot Tables", ["main"], []);
?>

<main class="body-wrapper page-content high">
        <div class="hide-on-desk">
            <img src="Images/Asc.png" alt="">
        </div>
        <div class="introduction">
            <h1 class="heading">Loot Tables</h1>

            <p>
                On this page we have access to all the loot tables attatched to the Nerub'ar Palace
            </p>
        </div>

        <div class="loot-table">

            <div class="row">
                <div class="column">
                    <div class="column-title">
                        <h3>Ulgrax the Devourer</h3>
                    </div>
                    <div class="image-container">
                        <img src="images/loot/loot1.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo1.png" alt="loot item information" class="tooltip-image1">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot2.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo2.png" alt="loot item information" class="tooltip-image2">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot3.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo3.png" alt="loot item information" class="tooltip-image3">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot4.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo4.png" alt="loot item information" class="tooltip-image4">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot5.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo5.png" alt="loot item information" class="tooltip-image5">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot6.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo6.png" alt="loot item information" class="tooltip-image6">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot7.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo7.png" alt="loot item information" class="tooltip-image7">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot8.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo8.png" alt="loot item information" class="tooltip-image8">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot9.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo9.png" alt="loot item information" class="tooltip-image9">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot10.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo10.png" alt="loot item information" class="tooltip-image11">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot11.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo11.png" alt="loot item information" class="tooltip-image11">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot12.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo12.png" alt="loot item information" class="tooltip-image12">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot13.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo13.png" alt="loot item information" class="tooltip-image13">
                    </div>

                </div>

                <div class="column">
                    <div class="column-title">
                        <h3>The Bloodbound Horror</h3>
                    </div>
                    <div class="image-container">
                        <img src="images/loot/loot14.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo14.png" alt="loot item information" class="tooltip-image14">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot15.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo15.png" alt="loot item information" class="tooltip-image15">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot16.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo16.png" alt="loot item information" class="tooltip-image16">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot17.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo17.png" alt="loot item information" class="tooltip-image17">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot18.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo18.png" alt="loot item information" class="tooltip-image18">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot19.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo19.png" alt="loot item information" class="tooltip-image19">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot20.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo20.png" alt="loot item information" class="tooltip-image20">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot21.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo21.png" alt="loot item information" class="tooltip-image21">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot22.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo22.png" alt="loot item information" class="tooltip-image22">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot23.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo23.png" alt="loot item information" class="tooltip-image23">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot24.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo24.png" alt="loot item information" class="tooltip-image24">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot25.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo25.png" alt="loot item information" class="tooltip-image25">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot26.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo26.png" alt="loot item information" class="tooltip-image26">
                    </div>

                </div>

                <div class="column">
                    <div class="column-title">
                        <h3>Queen Ansurek</h3>
                    </div>
                    <div class="image-container">
                        <img src="images/loot/loot92.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo92.png" alt="loot item information" class="tooltip-image92">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot93.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo93.png" alt="loot item information" class="tooltip-image93">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot94.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo94.png" alt="loot item information" class="tooltip-image94">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot95.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo95.png" alt="loot item information" class="tooltip-image95">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot96.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo96.png" alt="loot item information" class="tooltip-image96">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot97.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo97.png" alt="loot item information" class="tooltip-image97">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot98.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo98.png" alt="loot item information" class="tooltip-image98">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot99.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo99.png" alt="loot item information" class="tooltip-image99">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot100.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo100.png" alt="loot item information" class="tooltip-image100">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot101.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo101.png" alt="loot item information" class="tooltip-image101">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot102.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo102.png" alt="loot item information" class="tooltip-image102">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot103.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo103.png" alt="loot item information" class="tooltip-image103">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot104.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo104.png" alt="loot item information" class="tooltip-image104">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot105.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo105.png" alt="loot item information" class="tooltip-image105">
                    </div>

                </div>

                <div class="column">
                    <div class="column-title">
                        <h3>Rasha'nan</h3>
                    </div>
                    <div class="image-container">
                        <img src="images/loot/loot40.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo40.png" alt="loot item information" class="tooltip-image40">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot41.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo41.png" alt="loot item information" class="tooltip-image41">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot42.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo42.png" alt="loot item information" class="tooltip-image42">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot43.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo43.png" alt="loot item information" class="tooltip-image43">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot44.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo44.png" alt="loot item information" class="tooltip-image44">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot45.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo45.png" alt="loot item information" class="tooltip-image45">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot46.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo46.png" alt="loot item information" class="tooltip-image46">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot47.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo47.png" alt="loot item information" class="tooltip-image47">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot48.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo48.png" alt="loot item information" class="tooltip-image48">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot49.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo49.png" alt="loot item information" class="tooltip-image49">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot50.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo50.png" alt="loot item information" class="tooltip-image50">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot51.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo51.png" alt="loot item information" class="tooltip-image51">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot52.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo52.png" alt="loot item information" class="tooltip-image52">
                    </div>

                </div>

                <div class="column">
                    <div class="column-title">
                        <h3>Broodtwister Ovi'nax</h3>
                    </div>
                    <div class="image-container">
                        <img src="images/loot/loot53.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo53.png" alt="loot item information" class="tooltip-image53">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot54.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo54.png" alt="loot item information" class="tooltip-image54">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot55.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo55.png" alt="loot item information" class="tooltip-image55">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot56.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo56.png" alt="loot item information" class="tooltip-image56">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot57.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo57.png" alt="loot item information" class="tooltip-image57">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot58.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo58.png" alt="loot item information" class="tooltip-image58">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot59.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo59.png" alt="loot item information" class="tooltip-image59">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot60.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo60.png" alt="loot item information" class="tooltip-image60">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot61.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo61.png" alt="loot item information" class="tooltip-image61">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot62.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo62.png" alt="loot item information" class="tooltip-image62">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot63.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo63.png" alt="loot item information" class="tooltip-image63">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot64.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo64.png" alt="loot item information" class="tooltip-image64">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot65.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo65.png" alt="loot item information" class="tooltip-image65">
                    </div>

                </div>

                <div class="column">
                    <div class="column-title">
                        <h3>Nexus-Princess Ky'veza</h3>
                    </div>
                    <div class="image-container">
                        <img src="images/loot/loot66.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo66.png" alt="loot item information" class="tooltip-image66">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot67.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo67.png" alt="loot item information" class="tooltip-image67">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot68.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo68.png" alt="loot item information" class="tooltip-image68">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot69.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo69.png" alt="loot item information" class="tooltip-image69">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot70.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo70.png" alt="loot item information" class="tooltip-image70">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot71.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo71.png" alt="loot item information" class="tooltip-image71">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot72.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo72.png" alt="loot item information" class="tooltip-image72">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot73.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo73.png" alt="loot item information" class="tooltip-image73">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot74.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo74.png" alt="loot item information" class="tooltip-image74">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot75.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo75.png" alt="loot item information" class="tooltip-image75">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot76.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo76.png" alt="loot item information" class="tooltip-image76">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot77.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo77.png" alt="loot item information" class="tooltip-image77">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot78.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo78.png" alt="loot item information" class="tooltip-image78">
                    </div>

                </div>

                <div class="column">
                    <div class="column-title">
                        <h3>The Silken Court</h3>
                    </div>
                    <div class="image-container">
                        <img src="images/loot/loot79.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo79.png" alt="loot item information" class="tooltip-image79">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot80.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo80.png" alt="loot item information" class="tooltip-image80">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot81.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo81.png" alt="loot item information" class="tooltip-image81">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot82.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo82.png" alt="loot item information" class="tooltip-image82">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot83.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo83.png" alt="loot item information" class="tooltip-image83">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot84.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo84.png" alt="loot item information" class="tooltip-image84">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot85.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo85.png" alt="loot item information" class="tooltip-image85">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot86.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo86.png" alt="loot item information" class="tooltip-image86">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot87.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo87.png" alt="loot item information" class="tooltip-image87">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot88.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo88.png" alt="loot item information" class="tooltip-image88">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot89.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo89.png" alt="loot item information" class="tooltip-image89">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot90.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo90.png" alt="loot item information" class="tooltip-image90">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot91.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo91.png" alt="loot item information" class="tooltip-image91">
                    </div>

                </div>

                <div class="column">
                    <div class="column-title">
                        <h3>Sikran</h3>
                    </div>
                    <div class="image-container">
                        <img src="images/loot/loot27.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo27.png" alt="loot item information" class="tooltip-image27">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot28.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo28.png" alt="loot item information" class="tooltip-image28">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot29.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo29.png" alt="loot item information" class="tooltip-image29">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot30.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo30.png" alt="loot item information" class="tooltip-image30">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot31.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo31.png" alt="loot item information" class="tooltip-image31">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot32.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo32.png" alt="loot item information" class="tooltip-image32">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot33.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo33.png" alt="loot item information" class="tooltip-image33">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot34.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo34.png" alt="loot item information" class="tooltip-image34">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot35.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo35.png" alt="loot item information" class="tooltip-image35">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot36.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo36.png" alt="loot item information" class="tooltip-image36">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot37.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo37.png" alt="loot item information" class="tooltip-image37">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot38.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo38.png" alt="loot item information" class="tooltip-image38">
                    </div>

                    <div class="image-container">
                        <img src="images/loot/loot39.jpg" alt="loot item" class="small-image">
                        <img src="Images/lootinfo/lootinfo39.png" alt="loot item information" class="tooltip-image39">
                    </div>

                </div>

                
            </div>

        </div>


    </main>

<?php
Components::pageFooter();
?>