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
                        <li class="nav-item">
                            <a class="nav-link" href="test-wizard.php">Take Test</a>
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
    <!-- Disclaimer Section -->
    <section class="disclaimer">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="dis-title text-center pb-3">
                        <h1>Disclaimer</h1>
                        <hr>
                    </div>
                    <div class="mt-5 p-5 shadow-lg rounded-lg note">
                        <p class="lead text-black-50">
                            This COVID-19 Self Assessment System is only for software
                            development purpose and may not yield actual result. Any
                            information given by users of this system will not be
                            disclosed or store to anywhere.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Disclaimer Section -->
</main>
<!-- Main Section -->

<!-- Footer File -->
<?php include './templates/footer.php'; ?>
