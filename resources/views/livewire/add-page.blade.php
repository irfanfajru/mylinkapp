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
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://mylink.com/</span>
                            <input type="text" class="form-control" wire:model="page_name" placeholder="Url Name..." id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        @error('page_name') <span class="error">{{ $message }}</span> @enderror
                        <button type="submit" class="btn btn-primary w-100">Add Page</button>
                    </form>
                </div>
            </div>

            <div class="card card-outline card-success">
                <h3 class="card-title text-center">Manage Pages</h3>
                <hr>
                @forelse($manage_pages as $i)
                <div class="container mb-2 mt-3 d-flex p-2">
                    <p><span class="text-muted">mylink.com/</span>{{$i->page_name}}</p>
                    <a href="edit/{{$i->id}}" class="btn btn-warning rounded shadow-sm mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                        </svg></a>
                    <button wire:click="delete_page('{{$i->id}}')" class="btn btn-danger rounded shadow-sm mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg></button>
                </div>
                @empty
                <h4 class="text-center">No Page Found</h4>
                @endforelse
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
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">News!</h3>
                    <div class="card-tools">
                        <!-- Remove Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul>
                        <li>Traffic Visitors (Coming Soon)</li>
                    </ul>
                </div>
            </div>
            <div class="info-box">
                <div class="info-box-content">
                <span class="info-box-text text-center">About Developer</span>
                    <div class="row">
                        <div class="col-4 text-center">
                            <a href="https://www.instagram.com/irfanfajru/" class=""><img src="https://irfanfajru.github.io/img/ig.png" width="50rem" alt=""></a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="https://t.me/irfanfajru" class=""><img src="https://irfanfajru.github.io/img/tele.png" width="50rem" alt=""></a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="https://www.linkedin.com/in/muhammad-irfan-fajru-ramadhan-1497a2205/" class=""><img src="https://irfanfajru.github.io/img/in.png" width="50rem" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>