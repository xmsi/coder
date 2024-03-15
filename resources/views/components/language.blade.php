@if (app()->getLocale() != $lang)
<form action="/lang" method="post">
    @csrf
    <input type="hidden" name="lang" value="{{$lang}}">
    <button type="submit" class="dropdown-item">
        <img src="/trimg/{{ $myimg }}" alt='{{ __("$lang") }}'> {{ __("$lang") }}
    </button>
</form>
@endif