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
            kajian: ['Design Mobile App', 'Design Web App', 'Mobile Games']
        },
        'Multimedia': {
            kajian: ['Create AR', 'Create Logo', 'Photo Editing']
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
        options[kbkselect.value].kajian.forEach(e => kajianselect.innerHTML += `<option value=${e}">${e}</option>`)
    }
    kbkselect.addEventListener('change', updatekajianByKbk);
    updatekajianByKbk();
</script>

<!-- <script>
    const dataOptions = ['Machine Learning', 'Big Data', 'Deep Learning'];
    const rplOptions = ['Design Mobile App', 'Design Web App', 'Mobile Games'];
    const mulmedOptions = ['Create AR', 'Create Logo', 'Photo Editing'];
    const aiOptions = ['OpenCV', 'Image Classification', 'TensorFlow'];
    const jarkomOptions = ['Arsitektur Jaringan Komputer', 'Topologi Jaringan', 'Tipe Jaringan Komputer'];
    const siOptions = ['System Engineering', 'Information Management', 'Business Analytics'];

    function updatekajianByKbk() {
    kajianselect.innerHTML = "";
    if (kbkselect.value == "Data") {
        dataOptions.forEach(e => kajianselect.innerHTML += `<option value=${e}">${e}</option>`)
    } else if(kbkselect.value == "RPL") {
        rplOptions.forEach(e => kajianselect.innerHTML += `<option value=${e}">${e}</option>`)
    }
    else if(kbkselect.value == "Multimedia") {
        mulmedOptions.forEach(e => kajianselect.innerHTML += `<option value=${e}">${e}</option>`)
    }
    else if(kbkselect.value == "Artificial Intelligent") {
        aiOptions.forEach(e => kajianselect.innerHTML += `<option value=${e}">${e}</option>`)
    }
    else if(kbkselect.value == "Jaringan Komputer") {
        jarkomOptions.forEach(e => kajianselect.innerHTML += `<option value=${e}">${e}</option>`)
    }
    else {
        siOptions.forEach(e => kajianselect.innerHTML += `<option value=${e}">${e}</option>`)
    }
    }
    kajianselect.addEventListener('change', updatekajianByKbk);
    updatekajianByKbk();
</script> -->

<!-- <script>
const toyotaOptions = ['MarkX', 'Avensis'];
const nissanOptions = ['bluebird', 'Murano', 'Tiida'];

function updateCarByBrand() {
  carselect.innerHTML = "";
  if (brandselect.value == "Toyota") {
    toyotaOptions.forEach(e => carselect.innerHTML += `<option value=${e}">${e}</option>`)
  } else {
    nissanOptions.forEach(e => carselect.innerHTML += `<option value=${e}">${e}</option>`)
  }
}
brandselect.addEventListener('change', updateCarByBrand);
updateCarByBrand();
</script> -->



@endsection