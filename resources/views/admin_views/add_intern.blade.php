@extends('layouts.lecturer_navbar')

@section('title', 'Internship Recommendation')

@section('content')
<div class="container">
    <div class="mt-5">
        @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="card shadow p-5">
            <form method="post" action="intern">
                @csrf
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Role</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="role" placeholder="Role">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="company_name" placeholder="Nama Perusahaan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea name="description" class="form-control" rows="5" placeholder="Deskripsi Internship"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Alamat Perusahaan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="company_address" placeholder="Alamat Perusahaan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Informasi Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="url_information" placeholder="Informasi Lengkap">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Periode</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="internship_period" placeholder="Periode">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Persyaratan Internship</label>
                    <div class="col-sm-9">
                        <textarea name="requirement" class="form-control" rows="5" placeholder="Persyaratan Internship"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="table.php">Cancel</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="row p-3 mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Nama Perusahaan</th>
                        <th>Deskripsi</th>
                        <th>Periode</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($internList as $internData)
                    <tr>
                        <td>{{ $internData->role }}</td>
                        <td>{{ substr_replace($internData->company_name, "...", 30) }}</td>
                        <td>{{ substr_replace($internData->description, "...", 30) }}</td>
                        <td>{{ substr_replace($internData->internship_period, "...", 30) }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal-{{ $internData->id }}">
                                <iconify-icon inline icon="material-symbols:edit"></iconify-icon>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="updateModal-{{ $internData->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="row">

                                            <form action="update-intern/{{ $internData->id }}" method="post">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @csrf
                                                    <label class="fw-bold pb-1" for="role">Role</label>
                                                    <input type="text" class="form-control mb-3" name="role" id="role" value="{{ $internData->role }}">

                                                    <label class="fw-bold pb-1" for="company_name">Nama Perusahaan</label>
                                                    <input type="text" class="form-control mb-3" name="company_name" id="company_name" value="{{ $internData->company_name }}">

                                                    <label class="fw-bold pb-1" for="description">Deskripsi Internship</label>
                                                    <textarea class="form-control" name="description" rows="6">{{ $internData->description }}</textarea>

                                                    <label class="fw-bold pb-1" for="company_address">Alamat Perusahaan</label>
                                                    <input type="text" class="form-control mb-3" name="company_address" id="company_address" value="{{ $internData->company_address }}">

                                                    <label class="fw-bold pb-1" for="url_information">Informasi Lengkap</label>
                                                    <input type="text" class="form-control mb-3" name="url_information" id="url_information" value="{{ $internData->url_information }}">

                                                    <label class="fw-bold pb-1" for="internship_period">Periode</label>
                                                    <input type="text" class="form-control mb-3" name="internship_period" id="internship_period" value="{{ $internData->internship_period }}">

                                                    <label class="fw-bold pb-1" for="requirement">Persyaratan Internship</label>
                                                    <textarea class="form-control" name="requirement" rows="6">{{ $internData->requirement }}</textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $internData->id }}">
                                <iconify-icon inline icon="ic:baseline-delete-forever"></iconify-icon>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal-{{ $internData->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">{{ $internData->role }} - {{ $internData->company_name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body pt-3 pb-3">
                                            Are you sure want to delete this intern?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/destroy-intern/{{ $internData->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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