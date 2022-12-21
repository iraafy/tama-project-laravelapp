@extends('layouts.lecturer_navbar')

@section('title', 'Topic')

@section('content')
<div class="container">
    <div class="mt-5">
        @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="card shadow p-5">
            <form method="post" action="topic">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nama KBK</label>
                    <div class="col-sm-9">
                        <select id="kbkselect" name="kbk" class="form-control">
                            <!-- <option selected disabled>Choose...</option> -->
                            <option value="Data">Data</option>
                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Artificial Intelligent">Artificial Intelligent</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Kajian</label>
                    <div class="col-sm-9">
                        <select id="kajianselect" name="kajian" class="form-control"></select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Deskripsi Kajian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="deskripsi_kajian" placeholder="Deskripsi Kajian">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Content</label>
                    <div class="col-sm-9">
                        <input id="content" type="hidden" name="content">
                        <trix-editor input="content" value="content"></trix-editor>
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
                        <th>KBK</th>
                        <th>Kajian</th>
                        <th>Deskripsi Kajian</th>
                        <th>Content</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topicList as $topicData)
                    <tr>
                        <td>{{ $topicData->kbk }}</td>
                        <td>{{ substr_replace($topicData->kajian, "...", 30) }}</td>
                        <td>{{ substr_replace($topicData->deskripsi_kajian, "...", 30) }}</td>
                        <td>{{ substr_replace($topicData->content, "...", 30) }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal-{{ $topicData->id }}">
                                <iconify-icon inline icon="material-symbols:edit"></iconify-icon>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="updateModal-{{ $topicData->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <form action="update-topic/{{ $topicData->id }}" method="post">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                <!-- @method('PUT') -->
                                                <input hidden type="text" class="form-control mb-3" name="id" id="id" value="{{ $topicData->id }}">

                                                <label class="fw-bold pb-1" for="kbk">KBK</label>
                                                <select id="kbk2select" name="kbk" class="form-control">
                                                    <!-- <option selected disabled>Choose...</option> -->
                                                    <option value="Data">Data</option>
                                                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                                                    <option value="Multimedia">Multimedia</option>
                                                    <option value="Artificial Intelligent">Artificial Intelligent</option>
                                                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                                </select>
                                                <!-- value="{{ $topicData->kbk }}"> -->

                                                <label class="fw-bold pb-1" for="kajian">Kajian</label>
                                                <!-- <select id="kajian2select-{{ $topicData->id }}" name="kajian" class="form-control"></select> -->
                                                <select name= "kajian" class="form-control">
                                                    <option value="Machine Learning">Machine Learning</option>
                                                    <option value="Big Data">Big Data</option>
                                                    <option value="Deep Learning">Deep Learning</option>
                                                    <option value="Design Mobile App">Design Mobile App</option>
                                                    <option value="Web App">Web App</option>
                                                    <option value="Mobile Games">Mobile Games</option>
                                                    <option value="Create AR">Create AR</option>
                                                    <option value="How To Make Logo">How To Make Logo</option>
                                                    <option value="Photo Editing">Photo Editing</option>
                                                    <option value="OpenCV">OpenCV</option>
                                                    <option value="Image Classification">Image Classification</option>
                                                    <option value="TensorFlow">TensorFlow</option>
                                                    <option value="Arsitektur Jaringan Komputer">Arsitektur Jaringan Komputer</option>
                                                    <option value="Topologi Jaringan">Topologi Jaringan</option>
                                                    <option value="Tipe Jaringan Komputer">Tipe Jaringan Komputer</option>
                                                    <option value="System Engineering">System Engineering</option>
                                                    <option value="Information Management">Information Management</option>
                                                    <option value="Business Analytics">Business Analytics</option>
                                                </select>

                                                <label class="fw-bold pb-1" for="deskripsi_kajian">Deskripsi Kajian</label>
                                                <input type="text" class="form-control mb-3" name="deskripsi_kajian" id="deskripsi_kajian" value="{{ $topicData->deskripsi_kajian }}">

                                                <label class="fw-bold pb-1" for="content">Content</label>
                                                <textarea class="form-control" name="content" rows="6">{{ $topicData->content }}</textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $topicData->id }}">
                                <iconify-icon inline icon="ic:baseline-delete-forever"></iconify-icon>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal-{{ $topicData->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">{{ $topicData->kajian }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body pt-3 pb-3">
                                            Are you sure want to delete this topic?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/destroy-topic/{{ $topicData->id }}" method="post">
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

<!-- <script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script> -->

<script>
    const options = {
        'Data': {
            kajian: ['Machine Learning', 'Big Data', 'Deep Learning']
        },
        'RPL': {
            kajian: ['Design Mobile App', 'Web App', 'Mobile Games']
        },
        'Multimedia': {
            kajian: ['Create AR', 'How To Make Logo', 'Photo Editing']
        },
        'Artificial Intelligent': {
            kajian: ['OpenCV', 'Image Classification', 'TensorFlow']
        },
        'Jaringan Komputer': {
            kajian: ['Arsitektur Jaringan Komputer', 'Topologi Jaringan', 'Tipe Jaringan Komputer']
        },
        'Sistem Informasi': {
            kajian: ['System Engineering', 'Information Management', 'Business Analytics']
        }
    }

    function updatekajianByKbk() {
        kajianselect.innerHTML = "";
        options[kbkselect.value].kajian.forEach(e => kajianselect.innerHTML += `<option value="${e}">${e}</option>`)
    }
    kbkselect.addEventListener('change', updatekajianByKbk);
    updatekajianByKbk();
</script>




@endsection