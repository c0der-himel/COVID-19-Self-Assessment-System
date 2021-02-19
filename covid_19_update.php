<!-- Header File -->
<?php

include './templates/header.php';
include './controller/update.php';

?>

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

<!-- Main -->
<main>
    <section class="covid-update">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="covid-title1 mt-5 text-center">
                        <h1>COVID-19 Global Update</h1>
                        <p class="text-black-50">
                            All the country list affected by COVID-19
                        </p>
                        <hr>
                    </div>
                    <!-- Total Cases Update Global -->
                    <div class="row">
                        <div class="col-sm-12 pt-5">
                            <div class="row text-center">
                                <div class="col-sm-4">
                                    <div class="total-confirmed-g shadow-lg rounded-lg py-4 mb-5">
                                        <h4 class="counter text-warning"><?php echo $total_confirmed; ?></h4>
                                        <p class="text-black-50">Total Confirmed <br> Globally</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="total-recovered-g shadow-lg rounded-lg py-4 mb-5">
                                        <h4 class="counter text-success"><?php echo $total_recovered; ?></h4>
                                        <p class="text-black-50">Total Recovered <br> Globally</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="total-deaths-g shadow-lg rounded-lg py-4 mb-5">
                                        <h4 class="counter text-danger"><?php echo $total_deaths; ?></h4>
                                        <p class="text-black-50">Total Deaths <br> Globally</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Total Cases Update Global -->

                    <!-- Global Cases Table -->
                    <div class="record-table text-center mt-3">
                        <table class="table text-center">
                            <thead class="bg-info text-white">
                                <tr>
                                    <th class="font-weight-bold" scope="col">Sl No</th>
                                    <th class="font-weight-bold" scope="col">Countries</th>
                                    <th class="font-weight-bold" scope="col">Confirmed</th>
                                    <th class="font-weight-bold" scope="col">Recovered</th>
                                    <th class="font-weight-bold" scope="col">Deceased</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                <?php foreach ($decoded_json_data as $key => $value) : ?>
                                    <?php ++$i; ?>
                                    <tr>
                                        <td class="text-black-50"><?php echo $i; ?></td>
                                        <td class="text-black-50"><?php echo $key; ?></td>
                                        <td class="text-black-50">
                                            <?php echo $value[$count_days]['confirmed']; ?>
                                        </td>
                                        <td class="text-black-50">
                                            <?php echo $value[$count_days]['recovered']; ?>
                                        </td>
                                        <td class="text-black-50">
                                            <?php echo $value[$count_days]['deaths']; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Global Cases Table -->

                    <!-- Dataset Resource -->
                    <hr>
                    <div class="data-fetch text-center mt-5">
                        <p class="text-black-50 lead">
                            Data is fetching from |
                            <a target="_blank" rel="noopener noreferrer" href="https://github.com/pomber/covid19" class="text-info">COVID-19 Dataset</a>
                        </p>
                    </div>
                    <!-- Dataset Resource -->
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main -->

<!-- Footer File -->
<?php include './templates/footer.php'; ?>
