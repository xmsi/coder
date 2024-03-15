@foreach (App\Enums\ProjectType::cases() as $type)
    

<div class="accordion-item">
    <h2 class="accordion-header" id="heading{{ $type->value }}">
        <button class="accordion-button {{ $type->value != 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $type->value }}" aria-expanded="true" aria-controls="collapse{{ $type->value }}">
            {{ $type->getLabel() }}
        </button>
    </h2>
    <div id="collapse{{ $type->value }}" class="accordion-collapse collapse {{ $type->value == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $type->value }}" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <x-select_year :years="$years" type="{{ $type->value }}" />
        </div>
    </div>
</div>

@endforeach