<!-- Header File -->
<?php include './templates/header.php'; ?>

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
</header>
<!-- Header Section -->

<!-- Main Section -->
<main>
    <section class="demo">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <div class="tw-title text-center">
                        <h2>
                            COVID-19 SAS Wizard
                        </h2>
                        <hr>
                    </div>
                </div>
                <div class="col-sm-4 offset-sm-4">
                    <div class="disclaimer-img-content">
                        <img class="img-fluid" src="img/disclaimer/disclaimer1.svg" alt="disclaimer1" />
                    </div>
                </div>
                <!-- Disclaimer -->
                <div class="col-sm-8 offset-sm-2">
                    <div class="disclaimer-text-content">
                        <div class="disc text-center">
                            <p class="text-black-50">
                                This COVID-19 Self Assessment System is only for software
                                development purpose and may not yield actual result. Any
                                information given by users of this system will not be
                                disclosed or store to anywhere.
                                This is a three step process. On each step you have to give
                                some basic information about yourself, symptoms and
                                syndromes you are facing. The this system will analyze your
                                problem and give a result according your inputs.
                                <br>
                                Again, don't worry. Any information given by you of this
                                system will not be disclosed or store to anywhere.
                            </p>
                            <div class="col-auto my-3">
                                <div class="custom-control custom-checkbox">
                                    <input name="agree" value="agree" type="checkbox" class="custom-control-input agree" id="customControlAutosizing1" />
                                    <label class="custom-control-label" for="customControlAutosizing1">I Agree</label>
                                </div>
                            </div>
                            <div class="col-auto mt-3 mb-5">
                                <button type="button" id="form-1" class="btn btn-info test shadow-lg">
                                    Take Test
                                </button>
                            </div>
                            <!-- Frequently Asked Questions & Answers -->
                            <div class="tw-title text-center pt-5">
                                <h2>
                                    FAQs
                                </h2>
                                <hr>
                            </div>
                            <div class="accordion my-5" id="accordionExample">
                                <div class="card shadow-lg mt-4 rounded-lg">
                                    <div class="card-header bg-info rounded-lg" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-center text-light font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                #1. Is my data safe ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body rounded-lg text-black-50">
                                            100% safe. We won't save any personal data into our database. So, please
                                            dont't worry.
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-lg mt-4 rounded-lg">
                                    <div class="card-header bg-info rounded-lg" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-center text-light font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                #2. What kind of information required ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body rounded-lg text-black-50">
                                            Don't worry. No personal data will be asked. Only some basic info like your
                                            age, sex, body temperature and the symptoms you are facing. That's it,
                                            nothing more nothing less.
                                        </div>
                                    </div>
                                </div>
                                <div class="card shadow-lg mt-4 rounded-lg">
                                    <div class="card-header bg-info rounded-lg" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-center text-light font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                #3. Is the test result 100% accurate ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body rounded-lg text-black-50">
                                            See, this is not an actual COVID-19 test. It is test system that will try to
                                            inform you whether you should stay home or you need to take advice from a
                                            doctor or you need to hospitalize. The result is automated by your input
                                            information.
                                            So, what we suggest you what ever the result is please contact a doctor.
                                            This system is only for software
                                            development purpose
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Form Wizard -->
                        <div class="forms">
                            <form action="controller/score.php" method="POST">
                                <!-- Step 1 Basic Information -->
                                <div class="form-1">
                                    <div class="modal fade" id="form1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel1">
                                                        Basic Information
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="progress mb-3 mt-2" style="height: 30px;">
                                                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
                                                            Step 1
                                                        </div>
                                                    </div>
                                                    <div class="warning text-center px-5">
                                                        <p>
                                                            Please choose the correct information
                                                            (<span class="text-info">Require all three fields</span>)
                                                        </p>
                                                        <hr />
                                                    </div>
                                                    <div class="form-row align-content-center justify-content-center">
                                                        <div class="form-group col-md-10">
                                                            <label for="inputState1">Age</label>
                                                            <select name="age" id="inputState1" class="form-control" require>
                                                                <option hidden selected>Choose...</option>
                                                                <?php for ($i = 5; $i <= 100; $i++) : ?>
                                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?>
                                                                    </option>
                                                                <?php endfor; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row align-content-center justify-content-center">
                                                        <div class="form-group col-md-10">
                                                            <label for="inputState2">Sex</label>
                                                            <select name="sex" id="inputState2" class="form-control" require>
                                                                <option hidden selected>Choose...</option>
                                                                <option value="M">Male</option>
                                                                <option value="F">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row align-content-center justify-content-center">
                                                        <div class="form-group col-md-10">
                                                            <label for="inputState">Body Temperature (°F)</label>
                                                            <select name="body-temperature" id="inputState" class="form-control" require>
                                                                <option hidden selected>Choose...</option>
                                                                <option value="98.6">98.6</option>
                                                                <option value="98.7">98.7</option>
                                                                <option value="98.8">98.8</option>
                                                                <option value="98.9">98.9</option>
                                                                <option value="99">99</option>
                                                                <option value="99.1">99.1</option>
                                                                <option value="99.2">99.2</option>
                                                                <option value="99.3">99.3</option>
                                                                <option value="99.4">99.4</option>
                                                                <option value="99.5">99.5</option>
                                                                <option value="99.6">99.6</option>
                                                                <option value="99.7">99.7</option>
                                                                <option value="99.8">99.8</option>
                                                                <option value="99.9">99.9</option>
                                                                <option value="100">100</option>
                                                                <option value="100.1">100.1</option>
                                                                <option value="100.2">100.2</option>
                                                                <option value="100.3">100.3</option>
                                                                <option value="100.4">100.4</option>
                                                                <option value="100.5">100.5</option>
                                                                <option value="100.6">100.6</option>
                                                                <option value="100.7">100.7</option>
                                                                <option value="100.8">100.8</option>
                                                                <option value="100.9">100.9</option>
                                                                <option value="101">101</option>
                                                                <option value="101.1">101.1</option>
                                                                <option value="101.2">101.2</option>
                                                                <option value="101.3">101.3</option>
                                                                <option value="101.4">101.4</option>
                                                                <option value="101.5">101.5</option>
                                                                <option value="101.6">101.6</option>
                                                                <option value="101.7">101.7</option>
                                                                <option value="101.8">101.8</option>
                                                                <option value="101.9">101.9</option>
                                                                <option value="102">102</option>
                                                                <option value="102.1">102.1</option>
                                                                <option value="102.2">102.2</option>
                                                                <option value="102.3">102.3</option>
                                                                <option value="102.4">102.4</option>
                                                                <option value="102.5">102.5</option>
                                                                <option value="102.6">102.6</option>
                                                                <option value="102.7">102.7</option>
                                                                <option value="102.8">102.8</option>
                                                                <option value="102.9">102.9</option>
                                                                <option value="103">103</option>
                                                                <option value="103.1">103.1</option>
                                                                <option value="103.2">103.2</option>
                                                                <option value="103.3">103.3</option>
                                                                <option value="103.4">103.4</option>
                                                                <option value="103.5">103.5</option>
                                                                <option value="103.6">103.6</option>
                                                                <option value="103.7">103.7</option>
                                                                <option value="103.8">103.8</option>
                                                                <option value="103.9">103.9</option>
                                                                <option value="104">104</option>
                                                                <option value="104.1">104.1</option>
                                                                <option value="104.2">104.2</option>
                                                                <option value="104.3">104.3</option>
                                                                <option value="104.4">104.4</option>
                                                                <option value="104.5">104.5</option>
                                                                <option value="104.6">104.6</option>
                                                                <option value="104.7">104.7</option>
                                                                <option value="104.8">104.8</option>
                                                                <option value="104.9">104.9</option>
                                                                <option value="105">105</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary shadow-lg" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" id="form-2" class="btn btn-info next shadow-lg">
                                                        Next
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2 Common Symptoms -->
                                <div class="form-2">
                                    <div class="modal fade" id="form2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel2">
                                                        Common Symptoms
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="progress mb-3 mt-2" style="height: 30px;">
                                                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                                            Step 2
                                                        </div>
                                                    </div>
                                                    <div class="warning text-center px-5">
                                                        <p>
                                                            Please choose the correct information
                                                        </p>
                                                        <hr />
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms1[]" value="bp" type="checkbox" class="custom-control-input" id="customControlAutosizing2" />
                                                            <label class="custom-control-label" for="customControlAutosizing2">Breathing
                                                                problem</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms1[]" value="dc" type="checkbox" class="custom-control-input" id="customControlAutosizing3" />
                                                            <label class="custom-control-label" for="customControlAutosizing3">Dry cough
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms1[]" value="st" type="checkbox" class="custom-control-input" id="customControlAutosizing4" />
                                                            <label class="custom-control-label" for="customControlAutosizing4">Sore throat</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms1[]" value="w" type="checkbox" class="custom-control-input" id="customControlAutosizing5" />
                                                            <label class="custom-control-label" for="customControlAutosizing5">Weakness</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms1[]" value="rn" type="checkbox" class="custom-control-input" id="customControlAutosizing6" />
                                                            <label class="custom-control-label" for="customControlAutosizing6">Runny nose</label>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-auto mt-3 text-center">
                                                        <p class="text-info">
                                                            If you don't have any of these symptoms then click next
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button id="prev-2" type="button" class="btn btn-secondary shadow-lg">
                                                        Previous
                                                    </button>
                                                    <button type="button" id="form-3" class="btn btn-info shadow-lg">
                                                        Next
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 3 Serious Symptoms -->
                                <div class="form-3">
                                    <div class="modal fade" id="form3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel3">
                                                        Serious Symptoms
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="progress mb-3 mt-2" style="height: 30px;">
                                                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                            Step 3
                                                        </div>
                                                    </div>
                                                    <div class="warning text-center px-5">
                                                        <p>
                                                            Please choose the correct information
                                                        </p>
                                                        <hr />
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms2[]" value="ap" type="checkbox" class="custom-control-input" id="customControlAutosizing7" />
                                                            <label class="custom-control-label" for="customControlAutosizing7">Abdominal pain</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms2[]" value="v" type="checkbox" class="custom-control-input" id="customControlAutosizing8" />
                                                            <label class="custom-control-label" for="customControlAutosizing8">Vomiting
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms2[]" value="d" type="checkbox" class="custom-control-input" id="customControlAutosizing9" />
                                                            <label class="custom-control-label" for="customControlAutosizing9">Diarrhoea</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms2[]" value="c" type="checkbox" class="custom-control-input" id="customControlAutosizing10" />
                                                            <label class="custom-control-label" for="customControlAutosizing10">Chest pain or pressure
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms2[]" value="mp" type="checkbox" class="custom-control-input" id="customControlAutosizing11" />
                                                            <label class="custom-control-label" for="customControlAutosizing11">Muscle pain
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms2[]" value="lts" type="checkbox" class="custom-control-input" id="customControlAutosizing12" />
                                                            <label class="custom-control-label" for="customControlAutosizing12">Loss of taste or smell
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms2[]" value="lsm" type="checkbox" class="custom-control-input" id="customControlAutosizing13" />
                                                            <label class="custom-control-label" for="customControlAutosizing13">Loss of speech or
                                                                movement
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input name="symptoms2[]" value="rsdft" type="checkbox" class="custom-control-input" id="customControlAutosizing14" />
                                                            <label class="custom-control-label" for="customControlAutosizing14">Rash on skin, or
                                                                discoloration of fingers
                                                                or toes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-auto mt-3 text-center">
                                                        <p class="text-info">
                                                            If you don't have any of these symptoms then click next
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button id="prev-3" type="button" class="btn btn-secondary shadow-lg">
                                                        Previous
                                                    </button>
                                                    <button type="button" id="form-4" class="btn btn-info shadow-lg">
                                                        Next
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Confirmation -->
                                <div class="form-4">
                                    <div class="modal fade" id="form4" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel2">
                                                        Confirmation
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="progress mb-3 mt-2" style="height: 30px;">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                            Steps Completed
                                                        </div>
                                                    </div>
                                                    <div class="warning text-center px-5">
                                                        <p>
                                                            Do you want to submit ?
                                                        </p>
                                                        <hr />
                                                    </div>
                                                    <div class="col-sm-8 offset-sm-2">
                                                        <img class="img-fluid" src="img/confirm/confirm1.svg" alt="confirm1" />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button id="prev-4" type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        No
                                                    </button>
                                                    <button type="submit" name="submit" class="btn btn-info">
                                                        Yes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
