@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#F4CA59]']) }}>
    {{ $value ?? $slot }}
</label>
