@props(['boja' => 'indigo', 'link' => false])

@if ($link)
<a {{ $attributes->merge(['type' => 'button', 'class' => "cursor-pointer rounded-md bg-$boja-600 px-3 py-2 text-sm font-semibold text-white
    shadow-sm hover:bg-$boja-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
    focus-visible:outline-$boja-600"]) }}>{{ $slot }}</a>
@else
<button {{ $attributes->merge(['type' => 'button', 'class' => "rounded-md bg-$boja-600 px-3 py-2 text-sm font-semibold text-white
    shadow-sm hover:bg-$boja-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
    focus-visible:outline-$boja-600"]) }}>{{ $slot }}</button>
@endif