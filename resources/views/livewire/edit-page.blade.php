<div>
    <div class="row">
        <div class="col-12 col-md-5">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Manage Link</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <button class="btn btn-primary">Link Name</button>
                        <button class="btn btn-danger mx-2">Delete</button>
                    </div>
                    <hr>
                    <input type="text" class="form-control mb-2" placeholder="URL Link...">
                    <input type="text" class="form-control mb-2" placeholder="Link Name...">
                    <button class="btn btn-success w-100 mb-2">Add Link</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="card-title">Manage Page</h3>
                </div>
                <div class="card-body">
                    <div class="container text-center mb-1">
                        <img src="{{asset('images/ava.svg')}}" class="rounded-circle shadow border" width="100rem" alt="">
                    </div>
                    <label for="photo">Change Photo</label>
                    <input type="file" class="form-control mb-3" id="photo">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Your Theme</option>
                        <option value="1">Light</option>
                        <option value="2">Dark</option>
                        <option value="3">Custom (coming soon)</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="card-title">Preview Page</h3>
                    <div class="card-tools">
                        <!-- Collapse Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
    </div>