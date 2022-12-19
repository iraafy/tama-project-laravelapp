@extends('layouts.components')

@section('title', 'Topic Recommendation')

@section('content')
<div class="wrappers">
    <div id="sidebar">
        <div class="mt-3 pt-4">
            <div class="accordion m-3" id="accordion">
                <div class="accordion-item" id="accordion">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Data
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                        <div class="accrodion-item" id="inneraccordion">
                            <div class="accordion" id="innerheadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseOne" aria-expanded="true" aria-controls="innercollapseOne" style="padding-left: 30px">
                                    Machine Learning
                                </button>
                                <div id="innercollapseOne" class="accordion-collapse collapse" aria-labelledby="innerheadingOne" data-bs-parent="#inneraccordion">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Data")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseOneB" aria-expanded="true" aria-controls="innercollapseOne" style="padding-left: 30px">
                                    Big Data
                                </button>	
                                <div id="innercollapseOneB" class="accordion-collapse collapse" aria-labelledby="innerheadingOne" data-bs-parent="#inneraccordion">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Data")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseOneC" aria-expanded="true" aria-controls="innercollapseOne" style="padding-left: 30px">
                                    Deep Learning
                                </button>	
                                <div id="innercollapseOneC" class="accordion-collapse collapse" aria-labelledby="innerheadingOne" data-bs-parent="#inneraccordion">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Data")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>			
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="accordion-item" id="accordion">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Rekayasa Perangkat Lunak
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                        <div class="accrodion-item" id="inneraccordion">
                            <div class="accordion" id="innerheadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseOne" aria-expanded="true" aria-controls="innercollapseOne">
                                    Design Mobile App
                                </button>
                                <div id="#innercollapseOne" class="accordion-collapse collapse" aria-labelledby="innerheadingOne" data-bs-parent="#inneraccordion">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "RPL")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="accordion-item" id="accordionTwo">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Rekayasa Perangkat Lunak
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                        <div class="accordion-item" id="inneraccordionTwo">
                            <div class="accordion" id="innerheadingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseTwo" aria-expanded="false" aria-controls="innercollapseTwo" style="padding-left: 30px;">
                                    Design Mobile App
                                </button>
                                <div id="innercollapseTwo" class="accordion-collapse collapse" aria-labelledby="innerheadingTwo" data-bs-parent="#inneraccordionTwo">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "RPL")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseTwoB" aria-expanded="true" aria-controls="innercollapseTwo" style="padding-left: 30px">
                                    Design Web App
                                </button>	
                                <div id="innercollapseTwoB" class="accordion-collapse collapse" aria-labelledby="innerheadingTwo" data-bs-parent="#inneraccordionTwo">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "RPL")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseTwoC" aria-expanded="true" aria-controls="innercollapseTwo" style="padding-left: 30px">
                                    Mobile Games
                                </button>	
                                <div id="innercollapseTwoC" class="accordion-collapse collapse" aria-labelledby="innerheadingTwo" data-bs-parent="#inneraccordionTwo">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "RPL")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>			
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item" id="accordionThree">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Sistem Informasi
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                        <div class="accrodion-item" id="inneraccordionThree">
                            <div class="accordion" id="innerheadingThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseThree" aria-expanded="false" aria-controls="innercollapseThree" style="padding-left: 30px"									>
                                    lorem
                                </button>
                                <div id="innercollapseThree" class="accordion-collapse collapse" aria-labelledby="innerheadingThree" data-bs-parent="#inneraccordionThree">
                                    <div class="accordion-body">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Sistem Informasi")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseThreeB" aria-expanded="true" aria-controls="innercollapseThree" style="padding-left: 30px">
                                    lorem
                                </button>	
                                <div id="innercollapseThreeB" class="accordion-collapse collapse" aria-labelledby="innerheadingThree" data-bs-parent="#inneraccordionThree">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Sistem Informasi")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseThreeC" aria-expanded="true" aria-controls="innercollapseThree" style="padding-left: 30px">
                                    loren
                                </button>	
                                <div id="innercollapseThreeC" class="accordion-collapse collapse" aria-labelledby="innerheadingThree" data-bs-parent="#inneraccordionThree">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Sistem Informasi")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Sistem Informasi
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-1">
                            <ul>
                                @foreach ($topicList as $topicData)
                                @if ($topicData->kbk == "Sistem Informasi")
                                <li>
                                    <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                        {{ $topicData->kajian }}
                                    </a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Artificial Intelligent
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-1">
                            <ul>
                                @foreach ($topicList as $topicData)
                                @if ($topicData->kbk == "Artificial Intelligent")
                                <li>
                                    <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                        {{ $topicData->kajian }}
                                    </a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="accordion-item" id="accordionFive">
                    <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Multimedia
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
                        <div class="accrodion-item" id="inneraccordionFive">
                            <div class="accordion" id="innerheadingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseFive" aria-expanded="false" aria-controls="innercollapseFive" style="padding-left: 30px"									>
                                    Create AR
                                </button>
                                <div id="innercollapseFive" class="accordion-collapse collapse" aria-labelledby="innerheadingFive" data-bs-parent="#inneraccordionFive">
                                    <div class="accordion-body">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Multimedia")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseFiveB" aria-expanded="true" aria-controls="innercollapseFive" style="padding-left: 30px">
                                    Create Logo
                                </button>	
                                <div id="innercollapseFiveB" class="accordion-collapse collapse" aria-labelledby="innerheadingFive" data-bs-parent="#inneraccordionFive">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Multimedia")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseFiveC" aria-expanded="true" aria-controls="innercollapseFive" style="padding-left: 30px">
                                    Photo Editing
                                </button>	
                                <div id="innercollapseFiveC" class="accordion-collapse collapse" aria-labelledby="innerheadingFive" data-bs-parent="#inneraccordionFive">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Multimedia")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item" id="accordionSix">
                    <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Artificial Intelligent
                    </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion">
                        <div class="accrodion-item" id="inneraccordionSix">
                            <div class="accordion" id="innerheadingSix">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseSix" aria-expanded="false" aria-controls="innercollapseSix" style="padding-left: 30px"									>
                                    OpenCV
                                </button>
                                <div id="innercollapseSix" class="accordion-collapse collapse" aria-labelledby="innerheadingSix" data-bs-parent="#inneraccordionSix">
                                    <div class="accordion-body">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Artificial Intelligent")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseSixB" aria-expanded="true" aria-controls="innercollapseSix" style="padding-left: 30px">
                                    Image Classification
                                </button>	
                                <div id="innercollapseSixB" class="accordion-collapse collapse" aria-labelledby="innerheadingSix" data-bs-parent="#inneraccordionSix">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Artificial Intelligent")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseSixC" aria-expanded="true" aria-controls="innercollapseSix" style="padding-left: 30px">
                                    TensorFlow
                                </button>	
                                <div id="innercollapseSixC" class="accordion-collapse collapse" aria-labelledby="innerheadingSix" data-bs-parent="#inneraccordionSix">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Artificial Intelligent")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item" id="accordionSeven">
                    <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                       Jaringan Komputer
                    </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion">
                        <div class="accrodion-item" id="inneraccordionSeven">
                            <div class="accordion" id="innerheadingSeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseSeven" aria-expanded="false" aria-controls="innercollapseSeven" style="padding-left: 30px"									>
                                    Arsitektur Jaringan Komputer
                                </button>
                                <div id="innercollapseSeven" class="accordion-collapse collapse" aria-labelledby="innerheadingSeven" data-bs-parent="#inneraccordionSeven">
                                    <div class="accordion-body">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Jaringan Komputer")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseSevenB" aria-expanded="true" aria-controls="innercollapseSeven" style="padding-left: 30px">
                                    Topologi Jaringan
                                </button>	
                                <div id="innercollapseSevenB" class="accordion-collapse collapse" aria-labelledby="innerheadingSeven" data-bs-parent="#inneraccordionSeven">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Jaringan Komputer")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#innercollapseSevenC" aria-expanded="true" aria-controls="innercollapseSeven" style="padding-left: 30px">
                                    Tipe Jaringan Komputer
                                </button>	
                                <div id="innercollapseSevenC" class="accordion-collapse collapse" aria-labelledby="innerheadingSeven" data-bs-parent="#inneraccordionSeven">
                                    <div class="accordion-body row" style="padding-left: 20px;">
                                        <ul>
                                            @foreach ($topicList as $topicData)
                                            @if ($topicData->kbk == "Jaringan Komputer")
                                            <li>
                                                <a href="/topics?id_topic={{$topicData->id}}" class="text-black" style="font-size: small;">
                                                    {{ $topicData->kajian }}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" lass="p-4">
        <button class="btn btn-outline-secondary hidden-btn mt-2 mb-4 ps-4 pe-4" id="sidebarBtn" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="iconify-inline" data-icon="cil:menu"></span>
            &nbsp;Topik
        </button>

        <div class="row">
            <br><br>
            @if (isset($_GET['id_topic']))
            @foreach ($topicList as $topicData)
            @if ($_GET['id_topic'] == $topicData['id'])
            <div class="row pe-4 mb-5 mt-3">
                <h4>
                    {{ $topicData['kajian'] }}
                </h4>
                <p class="mt-2" style="text-align: justify">
                    {{ $topicData['deskripsi_kajian'] }}
                    {{ $topicData['content'] }}
                </p>
            </div>
            @endif
            @endforeach
            @else
            <h5 class="pt-3">Silahkan Pilih Topik</h5>
            @endif
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {

    $('#sidebarBtn').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    });
</script>
@endsection