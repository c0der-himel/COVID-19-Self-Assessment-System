<?php

// Header File
include './templates/header.php';
include 'config/db.config.php';
include 'controller/score.php';

$i = 0;
$sql    = 'SELECT * FROM records';
$result = mysqli_query($conn, $sql);
$records = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

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

<!-- Main Section -->
<main>
    <section class="records">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-title text-center mb-5">
                        <h1>
                            COVID-19
                            <br>
                            Self-Assessment System
                        </h1>
                        <p class="text-black-50">
                            Total tests & Results
                        </p>
                        <hr>
                    </div>
                    <div class="record-table text-center">
                        <table class="table text-center">
                            <thead class="bg-info text-white">
                                <tr>
                                    <th class="font-weight-bold" scope="col">Sl No</th>
                                    <th class="font-weight-bold" scope="col">Age</th>
                                    <th class="font-weight-bold" scope="col">Sex</th>
                                    <th class="font-weight-bold" scope="col">Temperature</th>
                                    <th class="font-weight-bold" scope="col">Assessment Date</th>
                                    <th class="font-weight-bold" scope="col">Assessment Score</th>
                                    <th class="font-weight-bold" scope="col">COVID-19 Result</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Retrieve Data from Database -->
                                <?php foreach ($records as $record) { ?>
                                    <tr>
                                        <td class="text-black-50"><?php echo ++$i; ?></td>
                                        <td class="text-black-50"><?php echo $record['age']; ?></td>
                                        <td class="text-black-50"><?php echo $record['sex']; ?></td>
                                        <td class="text-black-50"><?php echo $record['temperature']; ?></td>
                                        <td class="text-black-50"><?php echo $record['date_t']; ?></td>
                                        <td class="text-black-50"><?php echo $record['score']; ?></td>
                                        <td class="text-black-50"><?php echo $record['result']; ?></td>
                                    </tr>
                                <?php } ?>
                                <!-- Retrieve Data from Database -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main Section -->

<!-- Footer File -->
<?php include './templates/footer.php'; ?>
