<div>
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Page</h3>
                    <div class="card-tools">
                        <!-- Collapse Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form wire:submit.prevent="add_page">
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        <input type="text" wire:model="page_name" placeholder="Url Name..." class="form-control mb-3">
                        @error('page_name') <span class="error">{{ $message }}</span> @enderror
                        <button type="submit" class="btn btn-primary w-100">Add Page</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Pages</span>
                    <span class="info-box-number">{{$pages}}/3</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: {{$pages/3*100}}%"></div>
                    </div>
                    <span class="progress-description">
                        You only have 3 pages
                    </span>
                </div>
            </div>
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="far fa-flag"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Links</span>
                    <span class="info-box-number">0/Unlimited</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 0%"></div>
                    </div>
                    <span class="progress-description">
                        Unlimited Link :)
                    </span>
                </div>
            </div>
        </div>
    </div>