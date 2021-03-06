@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="/storage/{{$user->profile->image}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 p-5">
        <div class="d-flex justify-content-between align-items-baseline">
           <div class="d-flex align-items-center pb-3" id="app">
            <h1>{{$user->username}}</h1>
          
           <novo user-id="{{$user->id}}" follows="{{$follows}}"></novo>

        </div>
            @can('update', $user->profile)
           <a href="/p/create">Add Posts</a>
           @endcan
        </div>
        @can('update', $user->profile)
            
       
    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
    @endcan
        <div class="d-flex">
        <div class="pr-3"><strong>{{$user->posts->count()}}</strong> posts</div>
        <div class="pr-3"><strong>{{$user->profile->followers->count()}}</strong> Followers</div>
        <div class="pr-3"><strong>{{$user->following->count()}}</strong> followings</div>
        </div>
    <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
    <div>{{$user->profile->description}}</div>
    <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-4">

        @foreach ($user->posts as $post)
            
        <div class="col-4 pb-4">
        <a href="/p/{{$post->id}}">

                    <img src="/storage/{{$post->image}}" class="w-100">
               </a>
            </div>

        @endforeach
      
       

    

    </div>
    

</div>
@endsection
