@props(['name'])
@php
    $default = [
        'class' => 'form-control',
        'name' => $name,
    ];
@endphp

<select {{ $attributes($default) }}>
    {{ $slot }}
</select>
@error($name)
    <span class="form-msg">{{ $message }}</span>
@enderror
