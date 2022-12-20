@extends('layouts.components')

@section('title', 'Internship Recommendation')

@section('content')
    <div class="wrappers">
        <div id="sidebar">
            <div class="border-end bg-white" id="sidebar-wrapper">
                <br><br>
                <div class="list-group list-group-flush">
                    <a href="/interns/Frontend-Developer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Frontend Developer
                    </a>
                    <a href="/interns/Backend-Developer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Backend Developer
                    </a>
                    <a href="/interns/UI-UX-Designer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        UI/UX Designer
                    </a>
                    <a href="/interns/Mobile-Developer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Mobile Developer
                    </a>
                    <a href="/interns/Data-Scientist"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Data Scientist
                    </a>
                    <a href="/interns/Data-Analyst"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Data Analyst
                    </a>
                    <a href="/interns/Data-Engineer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Data Engineer
                    </a>
                    <a href="/interns/Project-Manager"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Project Manager
                    </a>
                    <a href="/interns/Business-Analyst"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Business Analyst
                    </a>
                    <a href="/interns/Fullstack-Developer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Fullstack Developer
                    </a>
                    <a href="/interns/Game-Developer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Game Developer
                    </a>
                    <a href="/interns/DevOps-Engineer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        DevOps Engineer
                    </a>
                    <a href="/interns/QA-Engineer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        QA Engineer
                    </a>
                    <a href="/interns/IT-Support"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        IT Support
                    </a>
                    <a href="/interns/IT-Consultant"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        IT Consultant
                    </a>
                    <a href="/interns/IT-Quality-Assurance"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        IT Quality Assurance
                    </a>
                    <a href="/interns/Artificial-Intelligence-Engineer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Artificial Intelligence Engineer
                    </a>
                    <a href="/interns/Graphic-Designer"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Graphic Designer
                    </a>
                    <a href="/interns/Lainnya"
                        class="text-black list-group-item list-group-item-action list-group-item-light p-3"
                        style="font-size: small;">
                        Lainnya
                    </a>
                    <!-- <a href="/add-intern"><button type="button" class="btn btn-primary">Tambah Rekomendasi</button></a> -->
                </div>
            </div>
        </div>

        <div id="content" lass="p-4">
            <button class="btn btn-outline-secondary hidden-btn mt-2 mb-4 ps-4 pe-4" id="sidebarBtn" type="button"
                data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="true" aria-label="Toggle navigation">
                <span class="iconify-inline" data-icon="cil:menu"></span>
                &nbsp;Internship List
            </button>
            <div class="row pt-3">
                @if (isset($_GET['code']))
                    @foreach ($internList as $internData)
                        @if ($_GET['code'] == $internData['role'])
                            <div class="ps-5 pe-5">
                                <div class="card shadow p-3">
                                    <div class="row">
                                        <div class="col">
                                            <b>
                                                {{ $internData['company_name'] }}
                                            </b>
                                            <p style="font-size: 14px">
                                                {{ $internData['role'] }}
                                            </p>
                                        </div>
                                        <div class="col" style="text-align: right; font-size: 13px">
                                            {{ $internData['internship_period'] }}
                                        </div>
                                    </div>
                                    <p class="mt-2">
                                        {{ $internData['description'] }} <br>
                                        {{ $internData['requirement'] }} <br>
                                        {{ $internData['url_information'] }}
                                    </p>
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @else
                    <h5 class="pt-3">Silahkan Pilih Role</h5>
                @endif
            </div>
        </div>
    </div>
@endsection

<script>
    $(document).ready(function() {
        $('[data-toggle=offcanvas]').click(function() {
            $('.row-offcanvas').toggleClass('active');
        });
    });
</script>
