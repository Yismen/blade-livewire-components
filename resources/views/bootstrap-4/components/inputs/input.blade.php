@props([
'field',
'type' => 'text',
])
<input type="{{ $type }}" id="{{ $field }}" aria-describedby="{{ $field }}Help" wire:model='{{ $field }}' {{
    $attributes->class([
'form-control',
'is-invalid' => $errors->has($field)
])->merge([])
}}
>