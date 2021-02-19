<!-- Header File -->
<?php include './templates/header.php'; ?>

<!-- Header Section -->
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
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <a href="./records-table.php" class="btn btn-info ml-2 px-3 shadow-lg">See List</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header Section -->

<!-- Main Section -->
<main>
    <section class="result">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 offset-sm-4">
                    <div class="img-negative mt-5">
                        <img src="img/negative/negative1.svg" alt="negative1" />
                    </div>
                </div>
                <div class="col-sm-8 offset-sm-2">
                    <div class="negative-content text-center mt-5">
                        <div class="negative-title mb-5">
                            <h1>
                                COVID-19
                                <br>
                                Self-Assessment System
                            </h1>
                            <hr />
                        </div>
                        <h4 class="mb-3">
                            Result:
                            <span class="font-weight-light text-info">Negative
                                <span class="text-black-50">( Merely have chance to get affected )</span></span>
                        </h4>
                        <h4 class="mb-5">
                            Advice:
                            <span class="font-weight-light text-black-50">Isolation and contact doctor and follow advice if needed.</span>
                        </h4>
                        <div class="again">
                            <p class="text-black-50">
                                Want to test again ?
                            </p>
                            <a href="test-wizard.php" class="btn btn-info">Test Again</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main Section -->

<!-- Footer File -->
<?php include './templates/footer.php'; ?>
