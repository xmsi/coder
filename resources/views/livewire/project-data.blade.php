@php use Illuminate\Support\Carbon; @endphp
<div>
    @foreach ($projects as $project)
    <div style="margin-bottom: 100px;" class="projects_data">
        <div class="row">
            <div class="col-lg-7 me-auto">
                <h4 class='fw-bold text-center text-md-start'>{{ $project->getLocalizedAttribute('title') }}</h4>
            </div>
            <div class="col-lg-auto">
                @if($project->logos)
                <div class="mylogos">
                    @foreach ($project->logos as $logo)
                    <img src="/storage/{{$logo}}" class="project_logos" alt="">
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        <h5 class="text-muted text-center text-md-start">{{ Carbon::parse($project->started_at)->translatedFormat('F Y') }}</h5>
        <p class="mt-4">
            {!! $project->getLocalizedAttribute('description') !!}
        </p>

        @if($project->images)
        <div class="owl-carousel owl-theme">
            @foreach ($project->images as $image)
            <div class="item">
                <img src="/storage/{{$image}}" style="height: 280px;object-fit:cover">
            </div>
            @endforeach
        </div>
        @endif

    </div>

    @endforeach


</div>