@props([
'field',
'required' => true
])
<label for="{{ $field }}" class="form-label">
    {{ $slot }}
    @if ($attributes->has('required') || $required)
    <span class="text-sm text-danger" title="Required">**</span>
    @endif
</label>