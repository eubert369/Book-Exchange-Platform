<?php

$tabs = [
    'selling',
    'buying',
    'exchange',
    'rent',
    'donate'
];

$t = in_array($_GET['t'], $tabs) ? $_GET['t'] : 'selling';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/white-logo.png">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <title>How It Works</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">

    <style>
        * {
            color: #8A6342 !important;
            font-family: "Inria Sans", sans-serif;
        }

        body {
            background-image: url('../assets/Desktop\ -\ 17.png');
            background-size: cover;
        }


        #tab-switcher>button {
            position: relative;
        }

        #tab-switcher>button.active::after {
            position: absolute;
            content: '';
            background-color: #E4D9B1;
            left: 50%;
            bottom: -.25rem;
            height: 4px;
            width: 120%;
            transform: translateX(-50%);
        }

        .step-card {
            max-width: 10rem;
        }

        .step-card>span:first-child {
            font-size: 5rem;
            font-family: 'Spicy Rice', cursive;
        }
    </style>
</head>

<body class="vh-100 p-5 vstack">

    <h1 class="text-center mb-4 fw-bold">How It Works</h1>

    <nav id="tab-switcher" role="tablist" class="hstack justify-content-center gap-5 my-3">
        <button class="nav-link fs-4 <?= $t == 'selling' ? 'active' : '' ?>" id="selling-tab" data-bs-toggle="pill" data-bs-target="#selling-panel" type="button" role="tab" aria-controls="selling-panel" aria-selected="<?= $t == 'selling' ? 'true' : 'false' ?>">
            Selling
        </button>
        <button class="nav-link fs-4 <?= $t == 'buying' ? 'active' : '' ?>" id="buying-tab" data-bs-toggle="pill" data-bs-target="#buying-panel" type="button" role="tab" aria-controls="buying-panel" aria-selected="<?= $t == 'buying' ? 'true' : 'false' ?>">
            Buying
        </button>
        <button class="nav-link fs-4 <?= $t == 'exchange' ? 'active' : '' ?>" id="exchange-tab" data-bs-toggle="pill" data-bs-target="#exchange-panel" type="button" role="tab" aria-controls="exchange-panel" aria-selected="<?= $t == 'exchange' ? 'true' : 'false' ?>">
            Exchange
        </button>
        <button class="nav-link fs-4 <?= $t == 'rent' ? 'active' : '' ?>" id="rent-tab" data-bs-toggle="pill" data-bs-target="#rent-panel" type="button" role="tab" aria-controls="rent-panel" aria-selected="<?= $t == 'rent' ? 'true' : 'false' ?>">
            Rent
        </button>
        <button class="nav-link fs-4 <?= $t == 'donate' ? 'active' : '' ?>" id="donate-tab" data-bs-toggle="pill" data-bs-target="#donate-panel" type="button" role="tab" aria-controls="donate-panel" aria-selected="<?= $t == 'donate' ? 'true' : 'false' ?>">
            Donate
        </button>
    </nav>


    <div class="tab-content flex-grow-1 d-grid align-content-center" id="pills-tabContent">

        <!-- SELLING -->
        <div class="tab-pane fade vstack text-center justify-content-around <?= $t == 'selling' ? 'show active' : '' ?>" id="selling-panel" role="tabpanel" aria-labelledby="selling-tab">
            <div class="hstack justify-content-around ">
                <div class="step-card vstack ">
                    <span>1</span>
                    <span class="fs-6">Create an account</span>
                </div>
                <div class="step-card vstack">
                    <span>2</span>
                    <span class="fs-6">Create book listings</span>
                </div>
                <div class="step-card vstack">
                    <span>3</span>
                    <span class="fs-6">Specify the available shipping and delivery options</span>
                </div>
            </div>
            <div class="hstack justify-content-around">
                <div class="step-card vstack">
                    <span>4</span>
                    <span class="fs-6">Manage communication for potential buyer</span>
                </div>
                <div class="step-card vstack">
                    <span>5</span>
                    <span class="fs-6">Finalize the sale</span>
                </div>
                <div class="step-card vstack">
                    <span>6</span>
                    <span class="fs-6">Payment disbursement</span>
                </div>
            </div>
        </div>

        <!-- BUYING -->
        <div class="tab-pane fade vstack text-center justify-content-around <?= $t == 'buying' ? 'show active' : '' ?>" id="buying-panel" role="tabpanel" aria-labelledby="buying-tab" tabindex="0">
            <div class="hstack justify-content-around ">
                <div class="step-card vstack ">
                    <span>1</span>
                    <span class="fs-6">Create an account</span>
                </div>
                <div class="step-card vstack">
                    <span>2</span>
                    <span class="fs-6">Browser and search books</span>
                </div>
                <div class="step-card vstack">
                    <span>3</span>
                    <span class="fs-6">View book listings</span>
                </div>
            </div>
            <div class="hstack justify-content-around">
                <div class="step-card vstack">
                    <span>4</span>
                    <span class="fs-6">Seller communication</span>
                </div>
                <div class="step-card vstack">
                    <span>5</span>
                    <span class="fs-6">Purchase and payment confirmation</span>
                </div>
                <div class="step-card vstack">
                    <span>6</span>
                    <span class="fs-6">Inspect the purchased book and confirm receipt</span>
                </div>
            </div>
        </div>

        <!-- EXCHANGE -->
        <div class="tab-pane fade vstack text-center justify-content-around <?= $t == 'exchange' ? 'show active' : '' ?>" id="exchange-panel" role="tabpanel" aria-labelledby="exchange-tab" tabindex="0">
            <div class="hstack justify-content-around ">
                <div class="step-card vstack ">
                    <span>1</span>
                    <span class="fs-6">Create an account</span>
                </div>
                <div class="step-card vstack">
                    <span>2</span>
                    <span class="fs-6">Browse available books for exchange</span>
                </div>
                <div class="step-card vstack">
                    <span>3</span>
                    <span class="fs-6">Initiate exchange proposal</span>
                </div>
            </div>
            <div class="hstack justify-content-around">
                <div class="step-card vstack">
                    <span>4</span>
                    <span class="fs-6">Negotiate and finalize exchange terms</span>
                </div>
                <div class="step-card vstack">
                    <span>5</span>
                    <span class="fs-6">Ship or arrange meet-up</span>
                </div>
                <div class="step-card vstack">
                    <span>6</span>
                    <span class="fs-6">Confirm the exchange</span>
                </div>
            </div>
        </div>

        <!-- RENT -->
        <div class="tab-pane fade vstack text-center justify-content-around <?= $t == 'rent' ? 'show active' : '' ?>" id="rent-panel" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
            <div class="hstack justify-content-around ">
                <div class="step-card vstack ">
                    <span>1</span>
                    <span class="fs-6">Create an account</span>
                </div>
                <div class="step-card vstack">
                    <span>2</span>
                    <span class="fs-6">Browse available books for rent</span>
                </div>
                <div class="step-card vstack">
                    <span>3</span>
                    <span class="fs-6">Check availability and rental terms</span>
                </div>
                <div class="step-card vstack">
                    <span>4</span>
                    <span class="fs-6">Initiate rental request</span>
                </div>
            </div>
            <div class="hstack justify-content-around">
                <div class="step-card vstack">
                    <span>5</span>
                    <span class="fs-6">Agree on rental terms</span>
                </div>
                <div class="step-card vstack">
                    <span>6</span>
                    <span class="fs-6">Payment and security deposit</span>
                </div>
                <div class="step-card vstack">
                    <span>7</span>
                    <span class="fs-6">Book delivery of pickup</span>
                </div>
                <div class="step-card vstack">
                    <span>8</span>
                    <span class="fs-6">Rental period and return the book and security desposit</span>
                </div>
            </div>
        </div>

        <!-- DONATE -->
        <div class="tab-pane fade vstack text-center justify-content-around <?= $t == 'donate' ? 'show active' : '' ?>" id="donate-panel" role="tabpanel" aria-labelledby="donate-tab" tabindex="0">
            <div class="hstack justify-content-around ">
                <div class="step-card vstack ">
                    <span>1</span>
                    <span class="fs-6">Create an account</span>
                </div>
                <div class="step-card vstack">
                    <span>2</span>
                    <span class="fs-6">List books for free</span>
                </div>
                <div class="step-card vstack">
                    <span>3</span>
                    <span class="fs-6">Manage communication</span>
                </div>
            </div>
            <div class="hstack justify-content-around">
                <div class="step-card vstack">
                    <span>4</span>
                    <span class="fs-6">Donation confirmation</span>
                </div>
                <div class="step-card vstack">
                    <span>5</span>
                    <span class="fs-6">Shipping and delivery</span>
                </div>
                <div class="step-card vstack">
                    <span>6</span>
                    <span class="fs-6">Confirmation and acknowledgement</span>
                </div>
            </div>
        </div>

    </div>

    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script>
    </script>
</body>

</html>