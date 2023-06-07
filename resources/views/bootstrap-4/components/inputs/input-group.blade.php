@props([
'field',
'required' => true,
'type' => 'text',
])
<div class="form-group mb-3">
    <x-component::inputs.label :field="$field">{{ $slot }}</x-component::inputs.label>
    <x-component::inputs.input :field="$field" :type="$type" />
    <x-component::inputs.error :field="$field" />
</div>