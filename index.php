<?php include_once "theme/head.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<style>
    @media (min-width: 700px) {
        .icons {
            height: 80px;
        }
    }

    html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
</style>
<body>


<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-center text-center"
         style="background-color: #000000">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" onclick="document.getElementById('navbarNavSM').classList.toggle('d-none');"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="w-100 d-none" id="navbarNavSM">
                <ul class="navbar-nav ml-auto text-center justify-content-center  m-auto">
                    <li class=" text-center mx-4">
                        <a class="nav-link argo-text" href="#discover_hook">DISCOVER</a>
                    </li>
                    <li class=" mx-4">
                        <a class="nav-link argo-text" href="#buy_hook">BUY</a>
                    </li>
                    <li class=" mx-4">
                        <a class="nav-link argo-text" href="#about_hook">ABOUT US</a>
                    </li>
                    <li class=" mx-4">
                        <a class="nav-link argo-text" href="#platform">PLATFORM</a>
                    </li>
                </ul>
            </div>


            <div class="collapse navbar-collapse w-100" id="navbarNav">

                <ul class="navbar-nav ml-auto text-center justify-content-center  m-auto">
                    <li class=" text-center mx-4">
                        <a class="nav-link argo-text" href="#discover_hook">DISCOVER</a>
                    </li>
                    <li class=" mx-4">
                        <a class="nav-link argo-text" href="#buy_hook">BUY</a>
                    </li>
                    <li class="">
                        <a class="" href="" style="margin-left: 70px;margin-right: 70px">
                            <img height="40" src="media/logo.png">
                        </a>
                    </li>
                    <li class=" mx-4">
                        <a class="nav-link argo-text" href="#about_hook">ABOUT US</a>
                    </li>
                    <li class=" mx-4">
                        <a class="nav-link argo-text" href="#platform">PLATFORM</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Wrapper del carosello -->
    <div class="row justify-content-center m-auto my-0" style="background-color: #000000;">
        <div class="col-12 px-0 justify-content-center m-auto">
            <div class="owl-carousel-wrapper">
                <!-- Carosello -->
                <div class="owl-carousel owl-theme">
                    <div class="owl-carousel-item"><img src="media/banners/tmp_banner1.png" alt="Argo Banner 1"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 100px" id="discover_hook">
        <div class="col-lg-6 col-md-6 col-sm-10 justify-content-center m-auto text-center">
            <span class="argo-title font-weight-bold">THE SMART COMPANION ROBOT<br> FOR YOUR FAMILY</span>
            <p class="argo-text" style="margin-top: 100px">Have you ever been worried about your elderly relatives
                living alone, your children at home or your naughty pets? Are you always looking for new ways to have
                fun with your family?
                <br>
                <br>
                Argo can easily meet your needs. A smart companion robot equipped with sophisticated sensors and AI
                algorithms to keep your home safe and entertain your family.<br> Vocal assistant, video-surveillance and
                autonomous navigation. <br>This is just a taste of what this robot can do. Argo is the ideal companion
                whether you are at home or not.</p>
        </div>
    </div>


    <!--foto faded-->
    <div class="row mb-5 " style="margin-top: 150px">
        <div class="col-12 px-0 text-center">
            <span class="text-center argo-big-title">SMART</span><br>
            <span class="argo-under-title">AN AI POWERED HOMEBOT</span>
        </div>
    </div>
    <img class="w-80 m-auto justify-content-center d-block img-fluid px-5" style="margin-top: 200px;max-height: 650px"
         src="media/banners/tmp_smart.png">


    <div class="row">
        <div class="justify-content-center m-auto col-lg-6 col-md-6 col-sm-12">
            <div class="row" style="margin-top: 50px">
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/route-1.png" height="50px" id="icons-11" onclick=""
                         class="icons d-block m-auto">
                </div>
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/chip-2.png" height="50px" id="icons-12" class="icons d-block m-auto">
                </div>
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/battery-2.png" height="50px" id="icons-13" class="icons d-block m-auto">
                </div>
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/voice-2.png" height="50px" id="icons-14" class="icons d-block m-auto">
                </div>
            </div>
        </div>
    </div>

    <!--    blocco con logica-->
    <div class="row justify-content-center mt-5 px-3">
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center" id="text-11">
            <span class="text-center font-weight-bold argo-title">Autonomous Navigation</span><br><br>
            <span class="argo-text mt-4">Exploiting Lidar technology, Argo is capable of mapping your house. Once the map is ready, it will be able to move autonomously around your home, avoiding any obstacle it may encounter along its way.</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center d-none" id="text-12">
            <span class="text-center font-weight-bold argo-title">AI TECHNOLOGY</span><br><br>
            <span class="argo-text mt-4">Argo is provided with state-of-the-art AI technology, being able to see and perceive the whole surrounding environment. Argo can detect persons, pets and everyday objects that may appear in front of its eyes. You should try the function: “Hey Argo, follow me”.</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center d-none" id="text-13">
            <span class="text-center font-weight-bold argo-title">Automatic Recharge</span><br><br>
            <span class="argo-text mt-4">Don’t worry about having another device to plug-in and recharge. Thanks to autonomous navigation, Argo is able to find its way to the charging station once the battery is running out low.</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center d-none" id="text-14">
            <span class="text-center font-weight-bold argo-title">Vocal Assistant</span><br><br>
            <span class="argo-text mt-4">Argo is provided with state-of-the-art AI technology, being able to see and perceive the whole surrounding environment. Argo can detect persons, pets and everyday objects that may appear in front of its eyes. You should try the function: “Hey Argo, follow me”.</span>
        </div>
    </div>


    <script>
        document.getElementById("icons-11").addEventListener("click", function () {
            document.getElementById("icons-11").src = "media/icons/route-1.png";
            document.getElementById("icons-12").src = "media/icons/chip-2.png";
            document.getElementById("icons-13").src = "media/icons/battery-2.png";
            document.getElementById("icons-14").src = "media/icons/voice-2.png";

            document.getElementById("text-11").classList.remove("d-none");
            document.getElementById("text-12").classList.add("d-none");
            document.getElementById("text-13").classList.add("d-none");
            document.getElementById("text-14").classList.add("d-none");
        });

        document.getElementById("icons-12").addEventListener("click", function () {
            document.getElementById("icons-11").src = "media/icons/route-2.png";
            document.getElementById("icons-12").src = "media/icons/chip-1.png";
            document.getElementById("icons-13").src = "media/icons/battery-2.png";
            document.getElementById("icons-14").src = "media/icons/voice-2.png";

            document.getElementById("text-11").classList.add("d-none");
            document.getElementById("text-12").classList.remove("d-none");
            document.getElementById("text-13").classList.add("d-none");
            document.getElementById("text-14").classList.add("d-none");
        });

        document.getElementById("icons-13").addEventListener("click", function () {
            document.getElementById("icons-11").src = "media/icons/route-2.png";
            document.getElementById("icons-12").src = "media/icons/chip-2.png";
            document.getElementById("icons-13").src = "media/icons/battery-1.png";
            document.getElementById("icons-14").src = "media/icons/voice-2.png";

            document.getElementById("text-11").classList.add("d-none");
            document.getElementById("text-12").classList.add("d-none");
            document.getElementById("text-13").classList.remove("d-none");
            document.getElementById("text-14").classList.add("d-none");
        });

        document.getElementById("icons-14").addEventListener("click", function () {
            document.getElementById("icons-11").src = "media/icons/route-2.png";
            document.getElementById("icons-12").src = "media/icons/chip-2.png";
            document.getElementById("icons-13").src = "media/icons/battery-2.png";
            document.getElementById("icons-14").src = "media/icons/voice-1.png";

            document.getElementById("text-11").classList.add("d-none");
            document.getElementById("text-12").classList.add("d-none");
            document.getElementById("text-13").classList.add("d-none");
            document.getElementById("text-14").classList.remove("d-none");
        });
    </script>


    <!--foto faded-->
    <div class="row mb-5" style="margin-top: 250px">
        <div class="col-12 px-0 text-center">
            <span class="text-center argo-big-title" style="overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-word;">SECURITY</span><br>
            <span class="argo-under-title">CONTROL YOUR HOME</span>
        </div>
    </div>
    <img class="w-80 m-auto justify-content-center d-block img-fluid px-5" style="margin-top: 200px;max-height: 650px"
         src="media/banners/tmp_banner2.png">


    <div class="row">
        <div class="justify-content-center m-auto col-lg-6 col-md-6 col-sm-12">
            <div class="row" style="margin-top: 50px">
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/foglio-1.png" height="50px" id="icons-21" onclick=""
                         class="icons d-block m-auto">
                </div>
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/cctv-2.png" height="50px" id="icons-22" class="icons d-block m-auto">
                </div>
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/onde-2.png" height="50px" id="icons-23" class="icons d-block m-auto">
                </div>
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/tmperatr-2.png" height="50px" id="icons-24" class="icons d-block m-auto">
                </div>
            </div>
        </div>
    </div>

    <!--    blocco con logica-->
    <div class="row justify-content-center mt-5 px-3">
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center" id="text-21">
            <span class="text-center font-weight-bold argo-title">Remote Control</span><br><br>
            <span class="argo-text mt-4">No matter where you are, thanks to Argo’s app you can always monitor what is going on in your house. Just move Argo around your home and check with your eyes that everything is under control.</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center d-none" id="text-22">
            <span class="text-center font-weight-bold argo-title">Autonomous Home Patroling</span><br><br>
            <span class="argo-text mt-4">Argo is also able to monitor your house fully autonomously. It will keep checking every corner in every room looking for suspicious activities. In case Argo finds something strange, it will push a notification to your phone reporting you about the problem detected.</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center d-none" id="text-23">
            <span class="text-center font-weight-bold argo-title">Anomaly Sound Detection</span><br><br>
            <span class="argo-text mt-4">Have you heard the sound of a glass breaking in your house? Or was it a baby crying? Don’t worry, Argo is able to recognize these sounds and report you what it is really going on.</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center d-none" id="text-24">
            <span class="text-center font-weight-bold argo-title">Temperature and Gas Monitoring</span><br><br>
            <span class="argo-text mt-4">“Did I close or not the stove?” Dangerous gas leakages will no longer be a problem. Argo will detect them and advise you in time before anything bad may happen to your family.</span>
        </div>
    </div>


    <script>
        document.getElementById("icons-21").addEventListener("click", function () {
            document.getElementById("icons-21").src = "media/icons/foglio-1.png";
            document.getElementById("icons-22").src = "media/icons/cctv-2.png";
            document.getElementById("icons-23").src = "media/icons/onde-2.png";
            document.getElementById("icons-24").src = "media/icons/tmperatr-2.png";

            document.getElementById("text-21").classList.remove("d-none");
            document.getElementById("text-22").classList.add("d-none");
            document.getElementById("text-23").classList.add("d-none");
            document.getElementById("text-24").classList.add("d-none");
        });

        document.getElementById("icons-22").addEventListener("click", function () {
            document.getElementById("icons-21").src = "media/icons/foglio-2.png";
            document.getElementById("icons-22").src = "media/icons/cctv-1.png";
            document.getElementById("icons-23").src = "media/icons/onde-2.png";
            document.getElementById("icons-24").src = "media/icons/tmperatr-2.png";

            document.getElementById("text-21").classList.add("d-none");
            document.getElementById("text-22").classList.remove("d-none");
            document.getElementById("text-23").classList.add("d-none");
            document.getElementById("text-24").classList.add("d-none");
        });

        document.getElementById("icons-23").addEventListener("click", function () {
            document.getElementById("icons-21").src = "media/icons/foglio-2.png";
            document.getElementById("icons-22").src = "media/icons/cctv-2.png";
            document.getElementById("icons-23").src = "media/icons/onde-1.png";
            document.getElementById("icons-24").src = "media/icons/tmperatr-2.png";

            document.getElementById("text-21").classList.add("d-none");
            document.getElementById("text-22").classList.add("d-none");
            document.getElementById("text-23").classList.remove("d-none");
            document.getElementById("text-24").classList.add("d-none");
        });

        document.getElementById("icons-24").addEventListener("click", function () {
            document.getElementById("icons-21").src = "media/icons/foglio-2.png";
            document.getElementById("icons-22").src = "media/icons/cctv-2.png";
            document.getElementById("icons-23").src = "media/icons/onde-2.png";
            document.getElementById("icons-24").src = "media/icons/tmperatr-1.png";

            document.getElementById("text-21").classList.add("d-none");
            document.getElementById("text-22").classList.add("d-none");
            document.getElementById("text-23").classList.add("d-none");
            document.getElementById("text-24").classList.remove("d-none");
        });
    </script>


    <!--foto faded-->
    <div class="row mb-5" style="margin-top: 250px">
        <div class="col-12 px-0 text-center">
            <span class="text-center argo-big-title" style="overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-word;">ENTERTAINMENT</span><br>
            <span class="argo-under-title text-uppercase" >bring joy in your daily life</span>
        </div>
    </div>
    <img class="w-80 m-auto justify-content-center d-block img-fluid px-5" style="margin-top: 200px;max-height: 650px"
         src="media/banners/tmp_banner3.jpg">


    <div class="row">
        <div class="justify-content-center m-auto col-lg-6 col-md-6 col-sm-12">
            <div class="row" style="margin-top: 50px">
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/sound-1.png" height="50px" id="icons-31" onclick=""
                         class="icons d-block m-auto">
                </div>
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/grade-2.png" height="50px" id="icons-32" class="icons d-block m-auto">
                </div>
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/gallery-2.png" height="50px" id="icons-33" class="icons d-block m-auto">
                </div>
                <div class="col-3 justify-content-center m-auto">
                    <img src="media/icons/beer-2.png" height="50px" id="icons-34" class="icons d-block m-auto">
                </div>
            </div>
        </div>
    </div>

    <!--    blocco con logica-->
    <div class="row justify-content-center mt-5  px-3">
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center" id="text-31">
            <span class="text-center font-weight-bold argo-title">Remote Control</span><br><br>
            <span class="argo-text mt-4">No matter where you are, thanks to Argo’s app you can always monitor what is going on in your house. Just move Argo around your home and check with your eyes that everything is under control.</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center d-none" id="text-32">
            <span class="text-center font-weight-bold argo-title">Autonomous Home Patroling</span><br><br>
            <span class="argo-text mt-4">Argo is also able to monitor your house fully autonomously. It will keep checking every corner in every room looking for suspicious activities. In case Argo finds something strange, it will push a notification to your phone reporting you about the problem detected.</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center d-none" id="text-33">
            <span class="text-center font-weight-bold argo-title">Anomaly Sound Detection</span><br><br>
            <span class="argo-text mt-4">Have you heard the sound of a glass breaking in your house? Or was it a baby crying? Don’t worry, Argo is able to recognize these sounds and report you what it is really going on.</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 px-0 text-center d-none" id="text-34">
            <span class="text-center font-weight-bold argo-title">Temperature and Gas Monitoring</span><br><br>
            <span class="argo-text mt-4">“Did I close or not the stove?” Dangerous gas leakages will no longer be a problem. Argo will detect them and advise you in time before anything bad may happen to your family.</span>
        </div>
    </div>


    <script>
        document.getElementById("icons-31").addEventListener("click", function () {
            document.getElementById("icons-31").src = "media/icons/sound-1.png";
            document.getElementById("icons-32").src = "media/icons/grade-2.png";
            document.getElementById("icons-33").src = "media/icons/gallery-2.png";
            document.getElementById("icons-34").src = "media/icons/beer-2.png";

            document.getElementById("text-31").classList.remove("d-none");
            document.getElementById("text-32").classList.add("d-none");
            document.getElementById("text-33").classList.add("d-none");
            document.getElementById("text-34").classList.add("d-none");
        });

        document.getElementById("icons-32").addEventListener("click", function () {
            document.getElementById("icons-31").src = "media/icons/sound-2.png";
            document.getElementById("icons-32").src = "media/icons/grade-1.png";
            document.getElementById("icons-33").src = "media/icons/gallery-2.png";
            document.getElementById("icons-34").src = "media/icons/beer-2.png";

            document.getElementById("text-31").classList.add("d-none");
            document.getElementById("text-32").classList.remove("d-none");
            document.getElementById("text-33").classList.add("d-none");
            document.getElementById("text-34").classList.add("d-none");
        });

        document.getElementById("icons-33").addEventListener("click", function () {
            document.getElementById("icons-31").src = "media/icons/sound-2.png";
            document.getElementById("icons-32").src = "media/icons/grade-2.png";
            document.getElementById("icons-33").src = "media/icons/gallery-1.png";
            document.getElementById("icons-34").src = "media/icons/beer-2.png";

            document.getElementById("text-31").classList.add("d-none");
            document.getElementById("text-32").classList.add("d-none");
            document.getElementById("text-33").classList.remove("d-none");
            document.getElementById("text-34").classList.add("d-none");
        });

        document.getElementById("icons-34").addEventListener("click", function () {
            document.getElementById("icons-31").src = "media/icons/sound-2.png";
            document.getElementById("icons-32").src = "media/icons/grade-2.png";
            document.getElementById("icons-33").src = "media/icons/gallery-2.png";
            document.getElementById("icons-34").src = "media/icons/beer-1.png";

            document.getElementById("text-31").classList.add("d-none");
            document.getElementById("text-32").classList.add("d-none");
            document.getElementById("text-33").classList.add("d-none");
            document.getElementById("text-34").classList.remove("d-none");
        });
    </script>

    <!--    wasnt enough-->
        <div class="row" style="margin-top: 200px">
            <div class="col-12 px-0 text-center">
                <span class="text-center argo-big-title">WASN'T ENOUGH?</span><br>
                <span class="argo-under-title">Argo is plenty of features!<br>Discover them all here below</span>
                <br><br><br>
            </div>
            <div class="col-lg-6 col-sm-8 d-block m-auto">
                <img src="media/banners/tmp-block12.png" class="img-fluid d-block m-auto" style="margin-top: 20px">
            </div>
        </div>



    <!--COMING SOON-->
    <div class="row px-2" style="margin-top: 200px;" id="buy_hook">
        <div class="col-12 px-0 text-center">
            <span class="text-center argo-big-title">COMING SOON</span><br>
            <hr class="" width="20%">
            <span class="argo-text text-center" style="padding-top: 70px;">Argo is getting ready for launch.<br>
        Stay tuned for exciting updates!</span>
            <form method="post" action="class/form/getEmail.php">
                <input name="emailSubscription" type="text" class="form-control justify-content-center m-auto"
                       placeholder="EMAIL"
                       style="border-radius: 15px;margin-top:40px !important;max-width: 500px;font-size: 20px;">
            </form>
            <input type="button" class="form-control justify-content-center m-auto text-white" value="SIGN ME UP"
                   style="border-radius: 15px;margin-top:30px !important;width: 200px;font-size: 20px;background-color: black">
        </div>

    </div>


    <!--MEET THE TEAM-->
    <div class="row" style="margin-top: 220px" id="about_hook">
        <div class="col-12 px-0 text-center">
            <span class="text-center argo-big-title">MEET THE TEAM</span><br>

        </div>
        <div class="col-12  text-center" style="margin-top: 80px">
            <span class="argo-text" style="padding-top: 70px;"><b>“How can be possible in 2022 we still do not have a personal robot in our homes?”</b><br>
            <br>
            This is the question of which made us start thinking about Argo!<br>
            <br>
            ...and who better than 3 guys who built driver less cars, drones, rockets and Mars Rovers<br> to build the future smart companion robot for your home?</span>
        </div>

    </div>


    <div class="row" style="margin-top: 80px">
        <div class="col-lg-8 col-md-8 col-sm-12 justify-content-center m-auto">
            <div class="row">
                <div class="col-lg-4 col-lg-4 col-sm-12 h-100" style="margin-top: 50px;">
                    <img src="media/Rectangle%204239.png" class="m-auto d-block img-fluid">
                    <br>
                    <span class="argo-title font-weight-bold" style="font-size: 30px">LEONARDO BERTELLI</span><br>
                    <span class="argo-text" style="font-size: 25px">Robotics Engineer</span><br><br>
                    <span class="argo-text" style="font-size: 20px;">During University he has joined Dynamis
                    PRC and Skyward. The former designs and builds autonomous driving racing cars, the latter builds and launches rockets. He has
                    2 years experience in the field of space robotics where he contributed to the NASA Mars Sample Return Campain.</span>

                    <div style="margin-top: 20px">
                        <a href=""><img src="media/icons/image%2038.png"></a>
                        <a href="https://www.linkedin.com/in/leonardo-bertelli-20a34816a/"><img
                                    src="media/icons/image%2037.png"></a>
                    </div>

                </div>

                <div class="col-lg-4 col-lg-4 col-sm-12 h-100" style="margin-top: 50px;">
                    <img src="media/banners/luca_acquati.png" class="m-auto d-block img-fluid">
                    <br>
                    <span class="argo-title font-weight-bold" style="font-size: 30px">LUCA ACQUATI</span><br>
                    <span class="argo-text" style="font-size: 25px">Control Engineer</span><br><br>
                    <span class="argo-text" style="font-size: 20px;">In his spare time, he has designed and built the control for an inverted pendulum and the flight code for a drone. He has 2 years experience in the automotive field, where he developed control algorithms for cutting edge brakes systems.</span>
<br><br>

                    <div style="margin-top: 60px">
                        <a href=""><img src="media/icons/image%2038.png"></a>
                        <a href="https://www.linkedin.com/in/luca-acquati-ab1b60211/"><img
                                    src="media/icons/image%2037.png"></a>
                    </div>

                </div>

                <div class="col-lg-4 col-lg-4 col-sm-12 h-100" style="margin-top: 50px;">
                    <img src="media/banners/federico_sarrocco.png" class="m-auto d-block img-fluid">
                    <br>
                    <span class="argo-title font-weight-bold" style="font-size: 30px">FEDERICO SARROCCO</span><br>
                    <span class="argo-text" style="font-size: 25px">Computer Science Engineer</span><br><br>
                    <span class="argo-text" style="font-size: 20px;">He has spent 4 years designing and building autonomous driving race cars in Dynamis PRC. He leads the Driverless Team, where he develops computer vision and deep
                    learning algorithms to push the car as
                    fast as possible.</span>
                    <br><br><br><br>
                    <div style="margin-top: 10px">
                        <a href=""><img src="media/icons/image%2038.png"></a>
                        <a href="https://www.linkedin.com/in/federico-sarrocco-6240b5164/"><img
                                    src="media/icons/image%2037.png"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!---->



<!--    video-->
<div class="row" style="margin-top: 300px">
    <iframe class="d-block m-auto px-3" width="960" height="540" src="https://www.youtube.com/embed/0Ftq9X3epLU?si=qaW2cDDUqex8RJyn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

    <!--    SPOKE ABOUT US-->
    <div class="row" style="margin-top: 200px">
        <div class="col-12 px-0 text-center">
            <span class="text-center argo-big-title" style="font-size: 25px !important;">SPOKE ABOUT US</span><br>
        </div>
    </div>

    <div class="row" style="margin-top: 50px">

        <div class="col-lg-3 col-sm-6" style="height: 200px;margin-top: 50px">
            <img src="media/brands/image%2031.png" class="m-auto d-block img-fluid">
        </div>

        <div class="col-lg-3 col-sm-6" style="height: 200px;margin-top: 50px">
            <img src="media/brands/image%2032.png" class="m-auto d-block img-fluid">
        </div>

        <div class="col-lg-3 col-sm-6" style="height: 200px;margin-top: 10px">
            <img src="media/brands/image%2033.png" class="m-auto d-block img-fluid">
        </div>

        <div class="col-lg-3 col-sm-6" style="height: 200px">
            <img src="media/brands/image%2034.png" class="m-auto d-block img-fluid">
        </div>

        <div class="col-lg-4 col-sm-6" style="height: 200px;margin-top: 40px">
            <img src="media/brands/image%2035.png" class="m-auto d-block img-fluid">
        </div>

        <div class="col-lg-4 col-sm-6" style="height: 200px;margin-top: 40px">
            <img src="media/brands/image%2053.png" class="m-auto d-block img-fluid">
        </div>

        <div class="col-lg-4 col-sm-6" style="height: 200px">
            <img src="media/brands/image%2054.png" class="m-auto d-block img-fluid">
        </div>
    </div>


    <div style="margin-top: 300px"></div>
    <div class="row justify-content-center m-auto" id="platform">
        <div class="col-12 px-0 text-center">
            <span class="text-center argo-big-title">PLATFORM</span><br>
        </div>

        <div class="col-lg-6 col-sm-8 mt-5 text-center">
            <div class=" argo-title" style="padding-top: 70px; font-size: 25px">
                What if the future of domestic robotics is an open platform where
                <br>
                thousands of developers can make Argo smarter and smarter everyday?
                <br>
                <br>
                Like Android or IOS for smartphones...
                <br>
                <br>
                What if we can give you access to Argo sensors (camera, microphones, lights, ..)
                <br>
                and basic Argo functionalities (voice, autonomous navigation, ..) to unleash your creativity?
            </div>
            <br><br><br><br>


            <div class="col-lg-6 col-sm-8 d-block m-auto">
                <img src="media/banners/banner-lock.png" class="img-fluid" style="margin-top: 20px">
            </div>

            <div class=" argo-title" style="padding-top: 70px; font-size: 25px">
                Let’s say you are a video-security Company aiming at entering the consumer market.
<br>
                Or let’s say you are a Startup developing an ed-tech toy but manufacturing is simply too much to handle.<br><br>
                <br><b>Why not joining the forces together?</b><br><br><br>
                Argo would enable you to forget about procurement, manufacturing and marketing

                to focus only on delivering a great software product, instantly available in everyone’s home.
                <br><br>
                <br>Do you want to be one of the first <b>Companies</b> to be present on our platform?

                We are looking forward to hearing to your idea, don’t hesitate in reaching us out!

            </div>

        </div>
    </div>


    <div class="row  justify-content-center m-auto" style="margin-top: 100px">
        <div class="col-lg-6 col-sm-12">
            <input name="nameSubscription" type="text" class="form-control justify-content-center m-auto w-100"
                   placeholder="FULL NAME"
                   style="border-radius: 15px;margin-top:90px !important;width: 600px;font-size: 20px;">

            <input name="nameSubscription" type="text" class="form-control justify-content-center m-auto w-100"
                   placeholder="EMAIL ADDRESS"
                   style="border-radius: 15px;margin-top:20px !important;width: 600px;font-size: 20px;">

            <textarea name="nameSubscription" type="text" class="form-control justify-content-center m-auto w-100"
                      placeholder="TELL US YOUR IDEA"
                      style="border-radius: 15px;margin-top:20px !important;width: 600px;min-height: 200px;font-size: 20px;"></textarea>

            <input type="button" class="form-control justify-content-center m-auto text-white" value="SEND MESSAGE"
                   style="border-radius: 15px;margin-top:30px !important;width: 200px;font-size: 20px;background-color: black">
        </div>
    </div>


    <div style="margin-bottom: 300px"></div>



</div>
<div class="row">
    <div class="col-12" style="background-color: black;height: 200px">
        <h5 class="argo-title d-block m-auto" style="color: white !important;padding-top: 80px">SPEAK ABOUT US!</h5>
    </div>
</div>
</body>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

</script>

<?php include_once "theme/foot.php"; ?>

