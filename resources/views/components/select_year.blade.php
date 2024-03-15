@foreach ($years[$type] as $year)
<div><a href="#" wire:click.prevent="$dispatch('year_selected', {type: {{ $type }}, year: {{ $year }} })">{{ $year }}</a></div>
@endforeach