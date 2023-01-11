@extends('layouts.forum_navbar')

@section('title', 'Forum')

@section('content')
<div class="container mt-3 p-4">
    <h1 class="text-color-primary fw-bold text-center p-5">
        Forum Diskusi<br> <span class="text-black-50 fs-4 fw-normal"></span>
    </h1>
    <a class="floating" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;">
        <iconify-icon inline icon="material-symbols:add" class="my-floating"></iconify-icon>
    </a>
    <form action="" method="get">
        <div class="form-group row">
            <div class="col-sm-11 p-0 m-0">
                <input type="text" name="keyword" class="form-control" placeholder="Masukan Apa Yang Anda Cari">
            </div>
            <button type="submit" class="col-sm-1 btn bg-color-primary text-white">Search</button>
        </div>
    </form>
    <div class="row mt-4">
        @foreach ($forum as $item)
        <div class="card mb-3 shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        @foreach ($user as $userName)
                        @if ($userName->id == $item->user_id)
                        <img src="http://cdn.onlinewebfonts.com/svg/img_561543.png" alt="" width="20px">&nbsp; <b style="font-size: large; color:  #592C75;">{{ $userName->name }}</b>
                        @endif
                        @endforeach
                    </div>
                    <div class="col">
                        <p style="font-size: small; text-align: right;">
                            {{ $item->created_at->diffForHumans() }} <br>
                        </p>
                    </div>
                </div>
                <h5 class="card-title mt-3">
                    {{ $item->title }}
                </h5>
                <p class="card-text">
                    {{ $item->content }}
                </p>
                <a href="/forums/{{ $item->id }}/view">View Discussion</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-4 mb-5">
        {{ $forum->withQueryString()->links() }}
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Diskusi Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="add_forum">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Diskusi">
                            </div>
                        </div>
                        <input hidden type="text" class="form-control" name="user_id" value="{{ Auth::id() }}">
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Content</label>
                            <div class="col-sm-9">
                                <textarea name="content" class="form-control" rows="5" placeholder="Masukkan Pesan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-color-primary text-white">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script>
@endsection