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
                        <input type="text" class="form-control" name="deskripsi_kajian" placeholder="Isi deskripsi kajian dengan judul materi">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">Content</label>
                    <div class="col-sm-9">
                        <input id="content" type="hidden" name="content">
                        <trix-editor input="content" value="content" placeholder="Isi konten dengan pembahasan materi"></trix-editor>
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

        <div class="row mt-5">
            <div class="row">
                <div class="col-md-4">
                    <form action="/add-topic/search" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit" id="">Search</button>
                        </div>
                    </form>
                </div>
            </div>
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
                        <td style="width: 20%;">{{ $topicData->kbk }}</td>
                        <td style="width: 18%;">{{ substr_replace($topicData->kajian, "...", 30) }}</td>
                        <td style="width: 18%;">{{ substr_replace($topicData->deskripsi_kajian, "...", 30) }}</td>
                        <td style="width: 32%;">{{ substr_replace($topicData->content, "...", 50) }}</td>
                        <td>
                            <div class="row justify-content-center">
                                <div class="col" align="center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal-{{ $topicData->id }}">
                                        <iconify-icon inline icon="material-symbols:edit"></iconify-icon>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $topicData->id }}">
                                        <iconify-icon inline icon="ic:baseline-delete-forever"></iconify-icon>
                                    </button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <form action="update-topic/{{ $topicData->id }}" method="post">
                                <div class="modal fade" id="updateModal-{{ $topicData->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
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
                                                    <option value="Data" <?php if($topicData->kbk=="Data") echo 'selected="selected"'; ?> >Data</option>
                                                    <option value="RPL" <?php if($topicData->kbk=="RPL") echo 'selected="selected"'; ?> >Rekayasa Perangkat Lunak</option>
                                                    <option value="Multimedia" <?php if($topicData->kbk=="Multimedia") echo 'selected="selected"'; ?> >Multimedia</option>
                                                    <option value="Artificial Intelligent" <?php if($topicData->kbk=="Artificial Intelligent") echo 'selected="selected"'; ?> >Artificial Intelligent</option>
                                                    <option value="Jaringan Komputer" <?php if($topicData->kbk=="Jaringan Komputer") echo 'selected="selected"'; ?> >Jaringan Komputer</option>
                                                    <option value="Sistem Informasi" <?php if($topicData->kbk=="Sistem Informasi") echo 'selected="selected"'; ?> >Sistem Informasi</option>
                                                </select>
                                                <!-- value="{{ $topicData->kbk }}"> -->

                                                <label class="fw-bold pb-1" for="kajian">Kajian</label>
                                                <!-- <select id="kajian2select-{{ $topicData->id }}" name="kajian" class="form-control"></select> -->
                                                <select name= "kajian" class="form-control">
                                                    <option value="Machine Learning" <?php if($topicData->kajian=="Machine Learning") echo 'selected="selected"'; ?> >Machine Learning</option>
                                                    <option value="Big Data" <?php if($topicData->kajian=="Big Data") echo 'selected="selected"'; ?> >Big Data</option>
                                                    <option value="Deep Learning" <?php if($topicData->kajian=="Deep Learning") echo 'selected="selected"'; ?> >Deep Learning</option>
                                                    <option value="Design Mobile App" <?php if($topicData->kajian=="Design Mobile App") echo 'selected="selected"'; ?> >Design Mobile App</option>
                                                    <option value="Web App" <?php if($topicData->kajian=="Web App") echo 'selected="selected"'; ?> >Web App</option>
                                                    <option value="Mobile Games" <?php if($topicData->kajian=="Mobile Games") echo 'selected="selected"'; ?> >Mobile Games</option>
                                                    <option value="Create AR" <?php if($topicData->kajian=="Create AR") echo 'selected="selected"'; ?> >Create AR</option>
                                                    <option value="How To Make Logo" <?php if($topicData->kajian=="How To Make Logo") echo 'selected="selected"'; ?> >How To Make Logo</option>
                                                    <option value="Photo Editing" <?php if($topicData->kajian=="Photo Editing") echo 'selected="selected"'; ?> >Photo Editing</option>
                                                    <option value="OpenCV" <?php if($topicData->kajian=="OpenCV") echo 'selected="selected"'; ?> >OpenCV</option>
                                                    <option value="Image Classification" <?php if($topicData->kajian=="Image Classification") echo 'selected="selected"'; ?> >Image Classification</option>
                                                    <option value="TensorFlow" <?php if($topicData->kajian=="TensorFlow") echo 'selected="selected"'; ?> >TensorFlow</option>
                                                    <option value="Arsitektur Jaringan Komputer" <?php if($topicData->kajian=="Arsitektur Jaringan Komputer") echo 'selected="selected"'; ?> >Arsitektur Jaringan Komputer</option>
                                                    <option value="Topologi Jaringan" <?php if($topicData->kajian=="Topologi Jaringan") echo 'selected="selected"'; ?> >Topologi Jaringan</option>
                                                    <option value="Tipe Jaringan Komputer" <?php if($topicData->kajian=="Tipe Jaringan Komputer") echo 'selected="selected"'; ?> >Tipe Jaringan Komputer</option>
                                                    <option value="System Engineering" <?php if($topicData->kajian=="System Engineering") echo 'selected="selected"'; ?> >System Engineering</option>
                                                    <option value="Information Management" <?php if($topicData->kajian=="Information Management") echo 'selected="selected"'; ?>>Information Management</option>
                                                    <option value="Business Analytics" <?php if($topicData->kajian=="Business Analytics") echo 'selected="selected"'; ?> >Business Analytics</option>
                                                </select>

                                                <label class="fw-bold pb-1" for="deskripsi_kajian">Deskripsi Kajian</label>
                                                <input type="text" class="form-control mb-3" name="deskripsi_kajian" id="deskripsi_kajian" value="{{ old( 'deskripsi_kajian' , $topicData->deskripsi_kajian) }}">

                                                <label class="fw-bold pb-1" for="content">Content</label>
                                                
                                                <input id="konten-{{ $topicData->id }}" type="hidden" name="content" placeholder="Isi konten dengan pembahasan materi" value="{!! old('content', $topicData->content) !!}">
                                                <trix-editor input="konten-{{ $topicData->id }}"></trix-editor>
                                                

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                           
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
            {{ $topicList->links() }}
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