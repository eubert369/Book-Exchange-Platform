<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="../assets/white-logo.png">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">

    <style>
        /* Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: #8A6342 #FFFFFF;
        }

        /* Chrome, Edge and Safari */
        *::-webkit-scrollbar {
            width: 14px;
            width: 14px;
        }

        *::-webkit-scrollbar-track {
            border-radius: 0px;
            background-color: #FFFFFF;
        }

        *::-webkit-scrollbar-track:hover {
            background-color: #FFFFFF;
        }

        *::-webkit-scrollbar-track:active {
            background-color: #FFFFFF;
        }

        *::-webkit-scrollbar-thumb {
            border-radius: 20px;
            background-color: #8A6342;
            border: 3px solid #FFFFFF;
        }

        *::-webkit-scrollbar-thumb:hover {
            background-color: #8A6342;
        }

        *::-webkit-scrollbar-thumb:active {
            background-color: #8A6342;
        }


        * {
            font-family: 'Inria Sans', sans-serif;
            color: #8A6342 !important;
        }

        body {
            background-image: url('../assets/Desktop\ -\ 5.png');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }

        #carousel-indicator {
            background-color: rgba(217, 217, 217, 23%);
        }

        #carousel-indicator>button {
            background-color: #969696;
            border: none;
            height: 1.25rem;
            width: 1.25rem;
            border-radius: 1.5rem;
        }

        #carousel-indicator>button.active {
            background-color: #DEA057;
        }

        .bg-brown {
            background-color: #8A6342;
        }

        .border-brown {
            border-color: #8A6342 !important;
        }
    </style>

</head>

<body class="vstack vh-100 p-5 overflow-hidden">

    <!-- CAROUSEL INDICATORS -->
    <div id="carousel-indicator" class="align-self-start hstack gap-3 p-3 px-4 rounded-pill">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="5" aria-label="Slide 2"></button>
    </div>

    <!-- CAROUSEL -->
    <div id="carousel" class="flex-grow-1 carousel slide overflow-hidden">
        <div class="carousel-inner h-100">

            <!-- WELCOME -->
            <div class="h-100 carousel-item active" data-carousel-index="0">
                <div class="h-100 w-75 mx-auto vstack align-items-center justify-content-between">
                    <h2 class="fs-1">Welcome Nestine Navarro!</h2>
                    <p class="fs-4">We’re delighted to have you join our platform, whether you’re an avid reader, a student seeking textbooks, or simply someone looking to declutter their bookshelf, BookLoopPH offers an exciting world of possibilities.</p>
                    <p class="fs-4">Before we get started, we’d love to know more about you! Setting up your additional details will help us tailor your BookLoopPH experience, making it easier for you to connect with like-minded individuals, discover your favorite genres, adn find the perfect books for you reading journey.</p>
                    <button id="welcome-next" class="btn rounded-pill w-25 text-light bg-brown">Continue</button>
                </div>
            </div>

            <!-- SETUP PERSONAL INFORMATION -->
            <div class="h-100 carousel-item" data-carousel-index="1">
                <div class="h-100 w-75 mx-auto vstack align-items-center justify-content-between">
                    <h2 class="fs-1">Setup Your Account</h2>
                    <div class="row g-3">
                        <!-- FIRSTNAME -->
                        <div class="col-6">
                            <label for="firstname" class="form-label fs-4">First name</label>
                            <input type="text" class="form-control form-control-lg border-brown" id="firstname" name="firstname">
                        </div>
                        <!-- ADDRESS -->
                        <div class="col-6">
                            <label for="address" class="form-label fs-4">Address</label>
                            <input type="text" class="form-control form-control-lg border-brown" id="address" name="address">
                        </div>
                        <!-- LAST NAME -->
                        <div class="col-6">
                            <label for="lastname" class="form-label fs-4">Last name</label>
                            <input type="text" class="form-control form-control-lg border-brown" id="lastname" name="lastname">
                        </div>
                        <!-- GENDER -->
                        <div class="col-6">
                            <label for="exampleFormControlInput1" class="form-label fs-4">Gender</label>
                            <select class="form-select form-select-lg border-brown">
                                <option selected disabled>Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <!-- EMAIL -->
                        <div class="col-6">
                            <label for="email" class="form-label fs-4">Email address</label>
                            <input type="email" class="form-control form-control-lg border-brown" id="email" name="email">
                        </div>
                        <!-- BIRTHDATE -->
                        <div class="col-6">
                            <label for="birthday" class="form-label fs-4">Birthday</label>
                            <input type="date" class="form-control form-control-lg border-brown" id="birthday" name="birthday">
                        </div>
                        <!-- PHONE NUMBER -->
                        <div class="col-6">
                            <label for="phonenumber" class="form-label fs-4">Phone number</label>
                            <input type="text" class="form-control form-control-lg border-brown" id="phonenumber" name="phonenumber">
                        </div>
                        <!-- AGE -->
                        <div class="col-6">
                            <label for="age" class="form-label fs-4">Age</label>
                            <input type="text" class="form-control form-control-lg border-brown" id="age" name="age">
                        </div>
                    </div>
                    <button id="welcome-next" class="btn rounded-pill w-25 text-light bg-brown">Next</button>
                </div>
            </div>

            <!-- SETUP PHOTO -->
            <div class="h-100 carousel-item" data-carousel-index="1">
                <div class="h-100 w-75 mx-auto vstack align-items-center justify-content-between">
                    <h2 class="fs-1">Setup Your Account</h2>

                    <div class="d-grid place-items-center">
                        <img src="../assets/Group 311.png" alt="">
                        <span class="fs-4 text-center">Add your photo</span>
                    </div>

                    <button id="welcome-next" class="btn rounded-pill w-25 text-light bg-brown">Next</button>
                </div>
            </div>

            <!-- YOUR INTERESTS -->
            <div class="h-100 carousel-item" data-carousel-index="1">
                <div class="h-100 w-75 mx-auto vstack align-items-center justify-content-between overflow-hidden">
                    <h2 class="fs-1">Your Interests</h2>
                    <div class="flex-grow-1 overflow-y-auto overflow-x-hidden border rounded bg-white my-3">
                        <div class="row px-5 py-3 gy-3">
                            <div class=" col-3">
                                <label class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Crime & Thriller
                                </label>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Romance & Saga
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Fantasy & Adventure
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Science Fiction
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Historical Fiction
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Mystery & Suspense
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Young Adult
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Non-fiction & Biography
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Horror & Supernatural
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Comedy & Satire
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Poetry & Prose
                                </p>
                            </div>
                            <div class="col-3">
                                <p class="h-100 fs-4 border border-2 rounded-4 border-brown text-center d-grid align-content-center p-3">
                                    Self-help
                                </p>
                            </div>
                        </div>
                    </div>

                    <button id="welcome-next" class="btn rounded-pill w-25 text-light bg-brown">Next</button>
                </div>
            </div>

            <!-- VERIFY EMAIL -->
            <div class="h-100 carousel-item" data-carousel-index="1">
                <div class="h-100 w-75 mx-auto vstack align-items-center justify-content-between overflow-hidden">
                    <h2 class="fs-1">Verify Your Email Address</h2>
                    <p class="text-center fs-2 vstack justify-content-center">
                        <span>
                            You’re almost there!<br>
                            To continue using BookLoopPH, we have sent you an email.<br>
                            Please verify your email address:
                        </span>
                        <span class="fw-bold my-3">
                            2002155@lnu.edu.ph
                        </span>
                        <span>
                            If you don’t see it, you may need to <b>check your spam</b> folder.
                        </span>
                    </p>
                    <button id="welcome-next" class="btn rounded-pill w-25 text-light bg-brown">Next</button>
                </div>
            </div>

            <!-- WELL DONE! -->
            <div class="h-100 carousel-item" data-carousel-index="1">
                <div class="h-100 w-75 mx-auto vstack align-items-center justify-content-center overflow-hidden">
                    <h2 class="fs-1">Well done!</h2>
                    <p class="text-center fs-2">
                        Your account is all set up.<br>Happy Exploring!
                    </p>
                    <button id="welcome-next" class="btn rounded-pill w-25 text-light bg-brown">
                        Explore
                    </button>
                </div>
            </div>

        </div>
    </div>

    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script>
        const carousel = new bootstrap.Carousel('#carousel')

        const carouselIndicators = document.getElementById('carousel-indicator')

        Object.values(carouselIndicators.children).forEach(carouselIndicator => {
            console.log(carouselIndicator)
            carouselIndicator.addEventListener('click', function() {
                Object.values(carouselIndicators.children).forEach(btn => {
                    btn.classList.toggle('active', false)
                })
                this.classList.toggle('active', true)
            })
        });

        document.getElementById('welcome-next').addEventListener('click', function() {
            carousel.next()
            document.querySelector(`#carousel-indicator > button.active`).classList.toggle('active', false)
            document.querySelector(`#carousel-indicator > button[data-bs-slide-to="${carousel._activeElement.getAttribute('data-carousel-index')}"]`).classList.toggle('active', true)
        })
    </script>
</body>

</html>