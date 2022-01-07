@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="/storage/{{ $post->user->profile->image}}"
                             class="rounded-circle w-100"
                             style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="fw-bold d-flex">
                            <a class="text-decoration-none" href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            <span class="pe-1 ps-1"> &#10172; </span>
                            <a class="text-decoration-none" href="#" class="pl-3">Follow</a>
                        </div>
                    </div>



                </div>

                <hr>

                <p>
                    <span class="fw-bold">
                        <a class="text-decoration-none" href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
