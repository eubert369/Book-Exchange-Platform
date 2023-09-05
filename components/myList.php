<link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="./css/myList-style.css?v=<?php echo time(); ?>">
<div class="container-fuid px-3">
    <div class="row border mx-2 mt-3 p-3 shadow rounded">
        <div class="col d-flex align-items-center">
            <p class="fs-3 order mx-auto fw-bold m-0">Order Status</p>
        </div>
        <div class="btn book-status col-2 ms-1 rounded rounded-4 py-2">
            <p class="my-0 text-center fw-bold fs-3">0</p>
            <p class="my-0 text-center fs-6">To ship</p>
        </div>
        <div class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
            <p class="my-0 text-center fw-bold fs-3">0</p>
            <p class="my-0 text-center fs-6">Completed</p>
        </div>
        <div class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
            <p class="my-0 text-center fw-bold fs-3">0</p>
            <p class="my-0 text-center fs-6">Cancelled</p>
        </div>
        <div class="btn book-status col-2 me-1 rounded rounded-4 py-2">
            <p class="my-0 text-center fw-bold fs-3">0</p>
            <p class="my-0 text-center fs-6">Return</p>
        </div>
    </div>
    <!-- My List contents -->
    <div class="row contents px-3 mt-4">
        <div class="row justify-content-between mx-auto">
            <div class="col-4 d-flex flex-row">
                <h3 class="fw-bold">My List</h3>
                <button class="create-btn btn px-3 ms-2 d-flex align-items-center h-75" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create listing</button>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <label class="fw-bold" for="sort">Sort by</label>
                <select class="px-3 py-1 h-75 ms-2" name="" id="sort">
                    <option value="Sale">Sale</option>
                    <option value="Exchange">Exchange</option>
                    <option value="Rent">Rent</option>
                </select>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="card col-3 m-2 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <a class="fw-bold p-0 edit-book">Edit</a>
                            <div class="btns d-flex flex-row mb-2 dropdown">
                                <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-2 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <a class="fw-bold p-0 edit-book">Edit</a>
                            <div class="btns d-flex flex-row mb-2 dropdown">
                                <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-2 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <a class="fw-bold p-0 edit-book">Edit</a>
                            <div class="btns d-flex flex-row mb-2 dropdown">
                                <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-2 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <a class="fw-bold p-0 edit-book">Edit</a>
                            <div class="btns d-flex flex-row mb-2 dropdown">
                                <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-2 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <a class="fw-bold p-0 edit-book">Edit</a>
                            <div class="btns d-flex flex-row mb-2 dropdown">
                                <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-2 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <a class="fw-bold p-0 edit-book">Edit</a>
                            <div class="btns d-flex flex-row mb-2 dropdown">
                                <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-2 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <a class="fw-bold p-0 edit-book">Edit</a>
                            <div class="btns d-flex flex-row mb-2 dropdown">
                                <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-2 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <a class="fw-bold p-0 edit-book">Edit</a>
                            <div class="btns d-flex flex-row mb-2 dropdown">
                                <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add listing for </h1>
                <select name="" class="btn mx-2 px-0" id="modal-category">
                    <option value="Sale">Sale</option>
                    <option value="Exchange">Exchange</option>
                    <option value="Rent">Rent</option>
                </select>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container-fluid px-5">                
                <div class="row">
                    <div class="col-5 me-1 border rounded">
                        sample
                    </div>
                    <div class="col">
                        <select name="" id="" class="w-100 mb-2 px-3 rounded">
                            <option value="">Genre</option>
                        </select>
                        <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="price">
                        <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Shipping Fee">
                        <select name="" id="" class="w-100 mb-2 px-3 rounded">
                            <option value="">Condition</option>
                        </select>
                        <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Language">
                    </div>
                    <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Title">
                    <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Author">
                    <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Edition">
                    <textarea name="" id="" class="px-3 rounded" cols="30" rows="4" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>