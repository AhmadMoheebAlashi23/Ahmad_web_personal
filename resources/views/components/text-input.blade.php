@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>

@if (isset($attributes['type']) && $attributes['type'] == 'file' && isset($attributes['value']))
<img src="{{ asset($attributes['value']) }}" alt="Current Image" width="100">
@endif
