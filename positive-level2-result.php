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
                    <div class="img-positive mt-5">
                        <img src="img/positive/doctor1.svg" alt="doctor1" />
                    </div>
                </div>
                <div class="col-sm-10 offset-sm-1">
                    <div class="positive-content text-center mt-5">
                        <div class="positive2 mb-5">
                            <h1>
                                COVID-19
                                <br>
                                Self-Assessment System
                            </h1>
                            <hr />
                        </div>
                        <h4 class="mb-3">
                            Result:
                            <span class="font-weight-light text-danger">Positive
                                <span class="text-black-50">( Highly chance of COVID-19 affected )</span></span>
                        </h4>
                        <h4 class="mb-5">
                            Advice:
                            <span class="font-weight-light text-black-50">Isolation and contact doctor immediately
                                and follow advice</span>
                        </h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info mt-3 mb-5" data-toggle="modal" data-target="#staticBackdrop">
                            Emergency Phone Numbers
                        </button>
                        <div class="again">
                            <p class="text-black-50">
                                Want to test again ?
                            </p>
                            <a href="test-wizard.php" class="btn btn-info">Test Again</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">
                                            Emergency Phone Numbers
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h4>
                                            National Call Center:
                                            <span class="font-weight-light">333</span>
                                        </h4>
                                        <h4>
                                            Health Center:
                                            <span class="font-weight-light">16263</span>
                                        </h4>
                                        <h4>
                                            IEDCR:
                                            <span class="font-weight-light">10655</span>
                                        </h4>
                                        <h4>
                                            Expert Health Center:
                                            <span class="font-weight-light">09611677777</span>
                                        </h4>
                                        <h4>
                                            National Help Line:
                                            <span class="font-weight-light">109</span>
                                        </h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
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
