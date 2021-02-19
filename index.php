<!-- Header File -->
<?php

include './templates/header.php';
include './controller/update.php';

?>

<!-- Header Section -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top mx-4">
                    <a class="navbar-brand font-weight-bolder text-info" href="./index.php">
                        <img class="mr-2" src="img/logo/logo.png" alt="logo" width="40" height="40" />
                        COVID-19 SAS
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active mx-3">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="#transmission">Transmission</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="#symptoms">Symptoms</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="#prevention">Prevention</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="#follow">Follow</a>
                            </li>
                        </ul>
                        <a href="./records-table.php" class="btn btn-info ml-2 px-3 shadow-lg">See List</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Section -->

<!-- Main Section -->
<main>
    <!-- Home -->
    <section class="home" id="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <div class="img-content">
                        <img class="img-fluid" src="img/hero/hero2.svg" alt="hero2" />
                    </div>
                </div>
                <div class="col-sm-8 offset-sm-2">
                    <div class="text-content text-center">
                        <h1 class="mb-4">
                            COVID-19
                            <br />
                            Self-Assessment System
                        </h1>
                        <p class="mb-4 text-black-50">
                            This COVID-19 Self Assessment System is a automated system which will show you result based on your information whether you are COVID-19 Positive or Negative. If you are positive the what you need to do this SAS ( Self Assessment System ) will inform you. The world is at its utmost crisis moments now. Due to COVID-19
                            we lost many lives and many have been facing financial crisis all
                            over the world. Economics are down due to pandemic.
                            <br>
                            So if you have any kind of doubt that you need help then first you can test it by your self.
                        </p>
                        <a href="./test-wizard.php" class="btn btn-info btn-lg mr-2 px-3 shadow-lg">Take Test</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home -->

    <!-- COVID-19 Update Bangladesh-->
    <section class="update" id="update">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 pb-5">
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <div class="total-bd-confirmed shadow-lg rounded-lg py-4 mt-5">
                                <h4 class="counter text-warning"> <?php echo $total_bd_confirmed; ?></h4>
                                <p class="text-black-50">Total Confirmed <br> Bangladesh</p>
                            </div>
                        </div>
                        <div class="col-sm-4 text-success">
                            <div class="total-bd-recovered shadow-lg rounded-lg py-4 mt-5">
                                <h4 class="counter"> <?php echo $total_bd_recovered; ?></h4>
                                <p class="text-black-50">Total Recovered <br> Bangladesh</p>
                            </div>
                        </div>
                        <div class="col-sm-4 text-danger">
                            <div class="total-bd-deaths shadow-lg rounded-lg py-4 mt-5">
                                <h4 class="counter"> <?php echo $total_bd_deaths; ?></h4>
                                <p class="text-black-50">Total Deaths <br> Bangladesh</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="g-link text-center">
                        <a href="covid_19_update.php" class="text-info lead">
                            Check Global Situation Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COVID-19 Update Bangladesh-->

    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-img mt-4">
                        <img src="img/about/about.svg" alt="about">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-content">
                        <h1 class="mb-4">
                            COVID-19 <br>
                            Coronavirus disease
                        </h1>
                        <p class="text-black-50">
                            Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered
                            coronavirus. Most people infected with the COVID-19 will experience mild to moderate
                            respiratory illness and recover without requiring special treatment. Older people, and those
                            with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory
                            disease, and cancer are more likely to develop serious illness.
                        </p>
                        <p class="text-black-50">
                            The best way to prevent and slow down transmission is be well informed about the COVID-19
                            virus, the disease it causes and how it spreads. Protect yourself & others from infection by
                            washing your hands or using an alcohol based rub frequently and not touching your face.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->

    <!-- Transmission -->
    <section class="transmission" id="transmission">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="transmission-title text-center">
                        <h1 class="mb-4">
                            Coronavirus COVID-19 Transmission
                        </h1>
                        <p class="px-5 text-black-50">
                            People can catch COVID-19 from others who have the virus. The disease can spread from person
                            to person through small droplets from the nose or mouth which are spread when a person with
                            COVID-19 coughs or exhales.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-deck mt-5 text-center">
                    <div class="card shadow-lg rounded-lg p-2">
                        <img src="img/transmission/transmission1.svg" class="card-img-top" alt="transmission1">
                        <div class="card-body">
                            <h5 class="card-title">Sneezes from Infected Person</h5>
                            <hr>
                            <p class="card-text text-black-50">
                                Sneezes from infected person can transmitte the virus.
                                So stay at home if possible and maintain social distance.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg rounded-lg p-2">
                        <img src="img/transmission/transmission2.svg" class="card-img-top" alt="transmission2">
                        <div class="card-body">
                            <h5 class="card-title">Contact with Infected Person</h5>
                            <hr>
                            <p class="card-text text-black-50">
                                Contact with infected person can transmitte the virus.
                                So stay at home if possible and maintain social distance.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg rounded-lg p-2">
                        <img src="img/transmission/transmission3.svg" class="card-img-top" alt="transmission3">
                        <div class="card-body">
                            <h5 class="card-title">Coughs from Infected Person</h5>
                            <hr>
                            <p class="card-text text-black-50">
                                Coughs from infected person can transmitte the virus.
                                So stay at home if possible and maintain social distance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Transmission -->

    <!-- Symptoms -->
    <section class="symptoms" id="symptoms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="symptoms-title text-center">
                        <h1 class="mb-4">
                            Coronavirus COVID-19 Symptoms
                        </h1>
                        <p class="px-5 text-black-50">
                            The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may
                            have aches and pains, nasal congestion, runny nose, sore throat or diarrhea.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-deck mt-5 text-center">
                    <div class="card shadow-lg rounded-lg p-2">
                        <img src="img/symptoms/symptoms1.svg" class="card-img-top" alt="symptoms1">
                        <div class="card-body">
                            <h5 class="card-title">Sneezing</h5>
                            <hr>
                            <p class="card-text text-black-50">
                                Sneezing is very common symptom in Coronavirus patient. Sneezing (sternutation) is the act of expelling a sudden
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg rounded-lg p-2">
                        <img src="img/symptoms/symptoms2.svg" class="card-img-top" alt="symptoms2">
                        <div class="card-body">
                            <h5 class="card-title">High Fever</h5>
                            <hr>
                            <p class="card-text text-black-50">
                                According to the WHO, the most common symptoms of Covid-19 are fever. Fever is a key symptom, experts say.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg rounded-lg p-2">
                        <img src="img/symptoms/symptoms3.svg" class="card-img-top" alt="symptoms3">
                        <div class="card-body">
                            <h5 class="card-title">Sore Throat</h5>
                            <hr>
                            <p class="card-text text-black-50">
                                A scratchy sensation in the throat, pain in the throat area that becomes worse when swallowing or talking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Symptoms -->

    <!-- Prevention -->
    <section class="prevention" id="prevention">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="prevention-title text-center">
                        <h1 class="mb-4">
                            Coronavirus COVID-19 Prevention
                        </h1>
                        <p class="px-5 text-black-50">
                            The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may
                            have aches and pains, nasal congestion, runny nose, sore throat or diarrhea.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-deck mt-5 text-center">
                    <div class="card shadow-lg rounded-lg p-2">
                        <img src="img/prevention/prevention1.svg" class="card-img-top" alt="prevention1">
                        <div class="card-body">
                            <h5 class="card-title">Wash Your Hands</h5>
                            <hr>
                            <p class="card-text text-black-50">
                                Wash your hands frequently and regularly with an alcohol based hand rub or wash them with soap and water.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg rounded-lg p-2">
                        <img src="img/prevention/prevention3.svg" class="card-img-top" alt="prevention3">
                        <div class="card-body">
                            <h5 class="card-title">Stay at Home</h5>
                            <hr>
                            <p class="card-text text-black-50">
                                Stay home, stay safe. if you feel unwell. If you have a fever, cough and difficulty breathing, seek medical attention.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg rounded-lg p-2">
                        <img src="img/prevention/prevention2.svg" class="card-img-top" alt="prevention2">
                        <div class="card-body">
                            <h5 class="card-title">Wear Face Mask</h5>
                            <hr>
                            <p class="card-text text-black-50">
                                Wear sergical mask and avoid touching face. Hands touch many surfaces and can pick up viruses once contaminated.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Prevention -->

    <!-- Follow -->
    <section class="follow" id="follow">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="follow-title text-center">
                        <h1 class="mb-4">
                            Try to Follow these Rules
                        </h1>
                        <p class="px-5 text-black-50">
                            Try to follow these rules every time you go out. Don't touch anything, Take off shoes,
                            Remove mask, Remove clothes, Disinfect your phone, Leave keys bags, Wash your hands
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-sm-2 mt-5">
                    <img src="img/follow/follow.svg" alt="follow">
                </div>
            </div>
        </div>
    </section>
    <!-- Follow -->

    <!-- Test -->
    <section class="test1" id="test1">
        <div class="container bg-info rounded-lg p-4 shadow-lg px-4">
            <div class="row">
                <div class="col-sm-10">
                    <div class="mt-2 text-white">
                        <h4>Want to test yourself whether you are affected by COVID-19 or not</h4>
                    </div>
                </div>
                <div class="col-sm-2">
                    <a href="./test-wizard.php" class="btn btn-light btn-lg px-4 py-2 float-right shadow-lg">Take Test</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Test -->
</main>
<!-- Main Section -->

<!-- Footer File -->
<?php include './templates/footer.php'; ?>
