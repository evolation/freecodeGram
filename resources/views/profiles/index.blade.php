@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div  class="col-3 p-5">
            <img src="/svg/temp_profile.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class='d-flex justify-content-between align-items-baseline'>
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            <div class="d-flex">
                <div class="pe-5"><strong>{{$user->posts()->count()}}</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>122</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="https://www.pilones.de">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>

    </div>

    <div class="row pt-5" >

        @foreach ($user->posts as $post )
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img class="w-100" src="/storage/{{$post->image}}">
            </a>
        </div>
        @endforeach

    </div>

</div>
@endsection