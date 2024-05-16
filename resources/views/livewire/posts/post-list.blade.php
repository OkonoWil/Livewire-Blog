<div>

    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Articles
                    </h2>
                    <div class="text-muted mt-1">1-12 of 241 photos</div>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="d-flex">
                        <div class="me-3">
                            <div class="input-icon">
                                <input type="text"  class="form-control" placeholder="Rechercher…">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                  </span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            Créer un article
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                @forelse($posts as $post)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm tw-max-h-max">
                            <a href="#" class=" tw-w-[417] tw-h-[281]"><img loading="lazy" decoding="async" src="{{$post->photo->thumbnail_url}}" class=" tw-overflow-hidden tw-object-cover tw-max-h-max tw-h-[281]"></a>
                            <div class="card-body">

                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm me-3 rounded">{{getInitials($post->user->name)}}</span>
                                    <div>
                                        <div>{{$post->user->name}}</div>
                                        <div class="text-muted">{{$post->created_at->diffForHumans()}}</div>
                                    </div>
                                    <div class="ms-auto tw-flex tw-flex-row">

                                        <a href="#" class="ms-3 text-muted tw-flex tw-flex-row">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                                            <span>25</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
            <div>
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>
