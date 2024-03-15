<div>
    @push('scripts')
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/projects_carousel.js"></script>
    @endpush

    @push('css')
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    @endpush
    <!-- News Start -->
    <div class="container-fluid news py-5" id="news">
        <div class="container py-5">
            <h1 class="display-4 mb-4">{{__('Проекты')}}</h1>
            <div class="row">
                <div class="col-md-3 mb-5">
                    <div class="accordion" id="accordionExample">
                        <x-accordion_types :years="$years"/>
                    </div>
                </div>
                <div class="col-md-9">
                    <livewire:project-data :initialYear="$years[0][0]" />
                </div>
            </div>
        </div>
    </div>
    <!-- News End -->
</div>