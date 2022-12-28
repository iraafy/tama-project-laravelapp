@extends('layouts.admin_navbar')

@section('title', 'Super Admin')

@section('content')
<div class="container">
    <div class="mt-5">
        @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="card shadow p-5">
            <form method="post" action="user">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>
                 <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div> 
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Role</label>
                    <div class="col-sm-9">
                        <select id="roleselect" name="role" class="form-control">
                            <option selected disabled>Choose...</option>
                            <option value="Admin">Admin</option>
                            <option value="Lecturer">Lecturer</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button  type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-primary" type="cancel" href="/add-user">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="card shadow p-3" >
            <div class="row p-3 md-5">
            <div class="a"><h3>Data Admin</h3></div>
                <table class="table" style="width:100%">
                    <thead>
                        <tr style="height:10px">
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <br>
                    <br>
                    <tbody>
                        @foreach ($userList as $userData)
                        @if ($userData->role != "Student" )
                        <tr>
                            <td>{{ $userData->name }}</td>
                            <td>{{ $userData->email }}</td>
                            <td>{{ $userData->status }}</td>
                            <td>{{ $userData->role }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal-{{ $userData->id }}">
                                    <iconify-icon inline icon="material-symbols:edit"></iconify-icon>
                                </button>
                                <!-- Modal -->
                            <!-- <form action="update-user/{{ $userData->id }}" method="post"> -->
                                    <div class="modal fade" id="updateModal-{{ $userData->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                            <form action="update-user/{{ $userData->id }}" method="post">    
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @csrf
                                                    <input hidden type="text" class="form-control mb-3" name="id" id="id" value="{{ $userData->id }}">

                                                    <label class="col-sm-3 col-form-label mt-3">Nama Lengkap</label>
                                                    <input value="{{ $userData->name }}" type="text" name="name" class="form-control" placeholder="Nama Lengkap">

                                                    <label class="col-sm-3 col-form-label mt-3">Email</label>
                                                    <input value="{{ $userData->email }}" type="email" class="form-control" name="email" placeholder="Email">

                                                    <label class="col-sm-3 col-form-label mt-3">Status</label>
                                                    <input value="{{ $userData->status }}" type="status" class="form-control" name="status" placeholder="Status">

                                                    <label class="col-sm-3 col-form-label mt-3">Role</label>
                                                    <select id="roleselect" name="role" class="form-control">
                                                        <option value="Admin">Admin</option>
                                                        <option value="Lecturer">Lecturer</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                                </div>
                                        </div>
                                    </div>
                                <!-- </form> -->

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $userData->id }}">
                                    <iconify-icon inline icon="ic:baseline-delete-forever"></iconify-icon>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal-{{ $userData->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">{{ $userData->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body pt-3 pb-3">
                                                Are you sure want to delete this user?
                                            </div>
                                            <div class="modal-footer">
                                                <form action="/destroy-user/{{ $userData->id }}" method="post">
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
                        @endif
                        @endforeach
                    </tbody>
                </table>
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