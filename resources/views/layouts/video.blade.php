<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($videos as $video)
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">

                            <g>
                                <g transform="translate(0,0) scale(1,1)">
                                <rect x="0" y="0" width="100%" height="100%"></rect>
                                <foreignObject x="0" y="0" width="100%" height="100%">
                                <iframe width="100%" height="100%" src="{{ $video->route }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </foreignObject>
                                </g>
                            </g>

                        </svg>

                        <div class="card-body">
                            <p class="card-text">{{ $video->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                @auth
                                    @if($user[0]->role_id==4)
                                        <a href="{{route('viewvideo')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                        <a href="{{route('updatevideo',$video->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">Editar</button></a>
                                    @elseif($user[0]->role_id==3)
                                        <a href="{{route('viewvideo')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                        <a href="{{route('updatevideo',$video->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">Editar</button></a>
                                    @elseif($user[0]->role_id==2)
                                        <a href="/viewvideo"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                    @elseif($user[0]->role_id==1)
                                        {{ __('Mejora tu plan para ver la peli') }}
                                    @endif
                                @endauth
                                </div>
                                <small class="text-muted">{{ $video->time }} mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> 
    </div>
</div>