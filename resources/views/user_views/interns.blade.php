@extends('layouts.components')

@section('title', 'Internship Recommendation')

@section('content')
<div class="wrappers">
    <div id="sidebar">
        <div class="border-end bg-white" id="sidebar-wrapper">
            <br><br>
            <div class="list-group list-group-flush">
                <a href="/interns?code=Frontend Developer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Frontend Developer
                </a>
                <a href="/interns?code=Backend Developer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Backend Developer
                </a>
                <a href="/interns?code=UI/UX Designer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    UI/UX Designer
                </a>
                <a href="/interns?code=Mobile Developer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Mobile Developer
                </a>
                <a href="/interns?code=Data Scientist" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Data Scientist
                </a>
                <a href="/interns?code=Data Analyst" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Data Analyst
                </a>
                <a href="/interns?code=Data Engineer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Data Engineer
                </a>
                <a href="/interns?code=Project Manager" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Project Manager
                </a>
                <a href="/interns?code=Business Analyst" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Business Analyst
                </a>
                <a href="/interns?code=Fullstack Developer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Fullstack Developer
                </a>
                <a href="/interns?code=Game Developer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Game Developer
                </a>
                <a href="/interns?code=DevOps Engineer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    DevOps Engineer
                </a>
                <a href="/interns?code=QA Engineer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    QA Engineer
                </a>
                <a href="/interns?code=IT Support" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    IT Support
                </a>
                <a href="/interns?code=IT Consultant" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    IT Consultant
                </a>
                <a href="/interns?code=IT Quality Assurance" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    IT Quality Assurance
                </a>
                <a href="/interns?code=Artificial Intelligence Engineer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Artificial Intelligence Engineer
                </a>
                <a href="/interns?code=Graphic Designer" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Graphic Designer
                </a>
                <a href="/interns?code=Lainnya" class="text-black list-group-item list-group-item-action list-group-item-light p-3" style="font-size: small;">
                    Lainnya
                </a>
            </div>
        </div>
        <!-- <div class="p-1 mt-4">
            <ul>
                <li>
                    <a href="/interns?code=Frontend Developer" class="text-black" style="font-size: small;">
                        Frontend Developer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Backend Developer" class="text-black" style="font-size: small;">
                        Backend Developer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=UI/UX Designer" class="text-black" style="font-size: small;">
                        UI/UX Designer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Mobile Developer" class="text-black" style="font-size: small;">
                        Mobile Developer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Data Scientist" class="text-black" style="font-size: small;">
                        Data Scientist
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Data Analyst" class="text-black" style="font-size: small;">
                        Data Analyst
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Data Engineer" class="text-black" style="font-size: small;">
                        Data Engineer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Project Manager" class="text-black" style="font-size: small;">
                        Project Manager
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Business Analyst" class="text-black" style="font-size: small;">
                        Business Analyst
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Software Engineer" class="text-black" style="font-size: small;">
                        Software Engineer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Fullstack Developer" class="text-black" style="font-size: small;">
                        Fullstack Developer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Game Developer" class="text-black" style="font-size: small;">
                        Game Developer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=DevOps Engineer" class="text-black" style="font-size: small;">
                        DevOps Engineer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=QA Engineer" class="text-black" style="font-size: small;">
                        QA Engineer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=IT Support" class="text-black" style="font-size: small;">
                        IT Support
                    </a>
                </li>
                <li>
                    <a href="/interns?code=IT Consultant" class="text-black" style="font-size: small;">
                        IT Consultant
                    </a>
                </li>
                <li>
                    <a href="/interns?code=IT Quality Assurance" class="text-black" style="font-size: small;">
                        IT Quality Assurance
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Artificial Intelligence Engineer" class="text-black" style="font-size: small;">
                        Artificial Intelligence Engineer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Graphic Designer" class="text-black" style="font-size: small;">
                        Graphic Designer
                    </a>
                </li>
                <li>
                    <a href="/interns?code=Lainnya" class="text-black" style="font-size: small;">
                        Lainnya
                    </a>
                </li>
            </ul>
        </div> -->
    </div>

    <div id="content" lass="p-4">
        <button class="btn btn-outline-secondary hidden-btn mt-2 mb-4 ps-4 pe-4" id="sidebarBtn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
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
                        {{ $internData['description'] }} <br><br>
                        {{ $internData['requirement'] }} <br><br>
                        <a href="{{ $internData['url_information'] }}">Info Selengkapnya</a>
                    </p>
                    </p>
                </div>
            </div>
            @endif
            @endforeach
            @else
            <h5 class="pt-3 mt-5">Silahkan Pilih Role</h5>
            @endif
        </div>
    </div>
</div>
@endsection

<script>
    // $(document).ready(function() {
    //     $('[data-toggle=offcanvas]').click(function() {
    //         $('.row-offcanvas').toggleClass('active');
    //     });
    // });
</script>