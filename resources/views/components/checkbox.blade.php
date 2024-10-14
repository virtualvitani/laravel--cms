@props(['label' => '', 'for', 'checked'])

<div class="flex h-6 items-center">
    <input {{ $attributes }} type="checkbox" @checked($checked) class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" {{ $checked }}>
</div>
<div class="text-sm leading-6">
    <label for="{{ $for }}" class="font-medium text-gray-900">{{ $label }}</label>
</div>