@props([
'field',
'required' => true,
'options',
'type' => 'checkbox',
'placeholder' => true,
'inline' => false,
])
<div class="mb-3 custom-control custom-switch">
    <x-component::inputs.label :field="$field" :required="$required" :label="$slot" />

    <br>
    @foreach ($options as $key => $value)
    <div {{ $attributes->class([
        'form-check',
        'is-invalid' => $errors->has($field)
        ])->merge([
        ]) }}>
        <input class="form-check-input" type="{{ $type }}" wire:model='{{ $field }}' id="{{  $field }}-{{ $key }}"
            value="{{ $key }}" style="cursor: pointer;">
        <label class="form-check-label" for="{{ $field }}-{{ $key }}" style="cursor: pointer;">
            {{ $value }}
        </label>
    </div>
    @endforeach
    <x-component::inputs.error :field="$field" />
</div>