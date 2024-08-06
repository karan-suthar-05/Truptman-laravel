@props(['name'])
@php
    $default = [
        'type' => 'text',
        'class' => 'form-control',
        'name' => $name,
    ];
    if ($attributes['type'] != 'password') {
        $default['value'] = old($name);
    }
@endphp

<input {{ $attributes($default) }}>
<span class="form-msg d-none">This field is required</span>
@error($name)
    <span class="form-msg">{{ $message }}</span>
@enderror
