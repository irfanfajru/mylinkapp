<div wire:poll.visible>
    <div class="row">
        <div class="col-12 col-md-5">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Manage Link</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Link Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($links!=NULL)
                                @foreach($links as $i)
                                <tr>
                                    <td>{{$i->link_name}}</td>
                                    <td><button wire:click="delete_link({{$i->id}})" class="btn btn-danger">Delete</button></td>
                                </tr>
                                @endforeach
                                @else
                                <p>No Links found</p>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <input type="text" wire:model="link" class="form-control mb-2" placeholder="URL Link...">
                    <input type="text" wire:model="linkname" class="form-control mb-2" placeholder="Link Name...">
                    @error('link') <span class="error">{{ $message }}</span> @enderror
                    <button wire:click="add_link" class="btn btn-success w-100 mb-2">Add Link</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="card-title">Manage Page</h3>
                </div>
                <div class="card-body">
                    <div>
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>
                    <div class="container text-center mb-1">
                        @if($detail_page->picture!=NULL)
                        <img src="{{asset('storage/'.explode('/',$detail_page->picture)[1])}}" class="rounded-circle shadow border" width="175rem" height="175rem" alt="">
                        @else
                        <img src="{{asset('images/ava.svg')}}" class="rounded-circle shadow border" width="175rem" height="175rem" alt="">
                        @endif
                    </div>
                    <div class="container-fluid text-center mt-3">
                        <button wire:click="delete_photo" class="btn btn-danger btn-sm text-center">Delete Photo</button>
                    </div>
                    <label for="photo">Change Photo</label>
                    <input type="file" class="form-control mb-3" wire:model="photo"><br>
                    <div wire:loading wire:target="photo">Uploading...</div>
                    @error('photo') <div class="error">{{ $message }}</div> @enderror
                    <label for="themes">Select Your Theme</label>
                    <select class="form-select" wire:model="themes" aria-label="Default select example">
                        <option value="0">Light</option>
                        <option value="1">Dark</option>
                    </select>
                    <button class="btn btn-success mt-3 w-100" wire:click="manage_page">Save</button>
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
                    <div class="container text-center mb-1">
                        @if($detail_page->picture!=NULL)
                        <img src="{{asset('storage/'.explode('/',$detail_page->picture)[1])}}" class="rounded-circle shadow border" width="175rem" height="175rem" alt="">
                        @else
                        <img src="{{asset('images/ava.svg')}}" class="rounded-circle shadow border" width="175rem" height="175rem" alt="">
                        @endif
                    </div>
                    <h3 class="text-center mb-3">{{$detail_page->page_name}}</h3>
                    @if($links!=NULL)
                    @foreach($links as $i)
                    <a href="{{$i->link}}" target="_aboutblank" class="btn btn-primary w-100 mb-2">{{$i->link_name}}</a>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>