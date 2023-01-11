@extends('layouts.components')

@section('title', 'Forum')

@section('content')
<div class="container p-4 mt-5">
    <h2 class="text-color-primary fw-bold text-center p-5" style="color: #592C75 ;">
        {{ $forum->title }}
    </h2>
    <div class="row">
        <div class="card shadow mb-3 p-3">
            <div class="card-body">
                <div class="card-title">
                    @foreach ($user as $userName)
                    @if ($userName->id == $forum->user_id)
                    <img src="http://cdn.onlinewebfonts.com/svg/img_561543.png" alt="" width="20px">&nbsp; <b style="font-size: large; color:  #592C75;">{{ $userName->name }}</b>
                    @endif
                    @endforeach
                </div>
                <p class="card-text pt-3 pb-3">
                    {{ $forum->content }} <br>
                    <span style="font-size: small">
                        {{ $forum->created_at->diffForHumans() }}
                    </span>
                </p>
                <form action="/add-comment" method="post">
                    @csrf
                    <textarea name="content" class="form-control" rows="5" placeholder="Tambah komentar"></textarea>
                    <input hidden type="text" name="user_id" id="" value="{{ Auth::id() }}">
                    <input hidden type="text" name="forum_id" id="" value="{{ $forum->id }}">
                    <button type="submit" class="btn bg-color-primary text-white mt-3 ps-4 pe-4" style="background-color: #592C75;">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <h4 class="mb-4">
            <b>
                Komentar
            </b>
        </h4>
        @foreach ($comment as $commentData)
        @if ($commentData->forum_id == $forum->id)
        <div class="card mb-3 shadow pt-2 pb-2">
            <div class="card-body">
                @foreach ($user as $userName)
                @if ($userName->id == $commentData->user_id)
                <img src="http://cdn.onlinewebfonts.com/svg/img_561543.png" alt="" width="20px">&nbsp; <b style="font-size: large; color:  #592C75;">{{ $userName->name }}</b>
                @endif
                @endforeach
                <p class="card-text pt-4">
                    {{ $commentData->content }} <br>
                    <span style="font-size: small">
                        {{ $forum->created_at->diffForHumans() }}
                    </span>
                </p>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection