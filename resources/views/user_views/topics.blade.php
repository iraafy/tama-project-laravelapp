@extends('layouts.components')

@section('title', 'Topic Recommendation')

@section('content')
<div class="wrappers">
    <div id="sidebar">
        <div class="mt-3 pt-4">
            <div class="accordion accordion-flush m-3" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Rekayasa Perangkat Lunak
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-1">
                            <ul>
                                @foreach ($topicList as $topicData)
                                @if ($topicData->kbk == "Rekayasa Perangkat Lunak")
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
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Data
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-1">
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
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Multimedia
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-1">
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
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Jaringan Komputer
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-1">
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

    <div id="content" lass="p-4">
        <button class="btn btn-outline-secondary hidden-btn mt-2 mb-4 ps-4 pe-4" id="sidebarBtn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
@endsection