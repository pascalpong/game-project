@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-white bg-transparent border-white focus:border-yellow-300 focus:ring-yellow-500 rounded-md shadow-sm']) !!}>
