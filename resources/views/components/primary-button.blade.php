<button {{ $attributes->merge(['type' => 'submit', 'class' => 'banner__buttons banner__buttons-login button-lg border-white']) }}>
    {{ $slot }}
</button>
