<link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="./css/wishlist-style.css?v=<?php echo time(); ?>">
<div class="container-fluid py-0 px-3">
    <div class="row mt-3 justify-content-between">
        <div class="col-4 d-flex flex-row">
            <h2 class="fw-bold">Wish List</h2>
            <button class="create-btn btn px-3 py-1 ms-2 d-flex align-items-center my-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create Album</button>
        </div>
        <div class="col-4 d-flex justify-content-end">
            <label class="fw-bold" for="sort">Sort by</label>
            <select class="px-3 py-1 h-75 ms-2" name="" id="sort">
                <option value="Author (A to Z)">Author (A to Z)</option>
                <option value="Author(Z to A)">Author(Z to A)</option>
                <option value="Date Added(Newest)">Date Added(Newest)</option>
                <option value="Date Added(Oldest)">Date Added(Oldest)</option>
                <option value="Title(A to Z)">Title(A to Z)</option>
                <option value="Title(Z to A)">Title(Z to A)</option>
            </select>
        </div>
    </div>
    <div class="wishlist mx-3 mt-2">
        <h4>Nestine Wish List</h4>
        <div class="mx-3 pb-3 d-flex overflow-x-auto">
            <div class="card mx-2 shadow" style="width: 8rem; flex: 0 0 auto;">
                <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                <div class="card-body p-0">
                    <p class="card-text my-0 text-center bg-primary text-white">Magic Falling</p>
                    <p class="card-text my-0 text-center">See More ></p>
                </div>
            </div>
            <div class="card mx-2 shadow" style="width: 8rem; flex: 0 0 auto;">
                <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                <div class="card-body p-0">
                    <p class="card-text my-0 text-center bg-primary text-white">Magic Falling</p>
                    <p class="card-text my-0 text-center">See More ></p>
                </div>
            </div>
            <div class="card mx-2 shadow" style="width: 8rem; flex: 0 0 auto;">
                <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                <div class="card-body p-0">
                    <p class="card-text my-0 text-center bg-primary text-white">Magic Falling</p>
                    <p class="card-text my-0 text-center">See More ></p>
                </div>
            </div>
            <div class="card mx-2 shadow" style="width: 8rem; flex: 0 0 auto;">
                <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                <div class="card-body p-0">
                    <p class="card-text my-0 text-center bg-primary text-white">Magic Falling</p>
                    <p class="card-text my-0 text-center">See More ></p>
                </div>
            </div>
            <div class="card mx-2 shadow" style="width: 8rem; flex: 0 0 auto;">
                <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                <div class="card-body p-0">
                    <p class="card-text my-0 text-center bg-primary text-white">Magic Falling</p>
                    <p class="card-text my-0 text-center">See More ></p>
                </div>
            </div>
            <div class="card mx-2 shadow" style="width: 8rem; flex: 0 0 auto;">
                <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                <div class="card-body p-0">
                    <p class="card-text my-0 text-center bg-primary text-white">Magic Falling</p>
                    <p class="card-text my-0 text-center">See More ></p>
                </div>
            </div>
            <div class="card mx-2 shadow" style="width: 8rem; flex: 0 0 auto;">
                <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                <div class="card-body p-0">
                    <p class="card-text my-0 text-center bg-primary text-white">Magic Falling</p>
                    <p class="card-text my-0 text-center">See More ></p>
                </div>
            </div>
            <div class="card mx-2 shadow" style="width: 8rem; flex: 0 0 auto;">
                <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                <div class="card-body p-0">
                    <p class="card-text my-0 text-center bg-primary text-white">Magic Falling</p>
                    <p class="card-text my-0 text-center">See More ></p>
                </div>
            </div>
            <div class="card mx-2 shadow" style="width: 8rem; flex: 0 0 auto;">
                <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                <div class="card-body p-0">
                    <p class="card-text my-0 text-center bg-primary text-white">Magic Falling</p>
                    <p class="card-text my-0 text-center">See More ></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>