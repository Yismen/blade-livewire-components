@props([
'editing',
'footer' => true,
])

<form @if ($editing) wire:submit.prevent="update()" @else wire:submit.prevent="store()" @endif {{ $attributes->merge([
    'class' => 'needs-validation'
    ]) }} autocomplete="off" >

    {{ $slot }}

    @if($footer)
    <div class="mt-3 border-top p-2">
        @if ($editing)
        <x-component::button type="submit" color="warning" class="btn-sm">
            {{ str(__('component::messages.update'))->upper() }}
        </x-component::button>
        @else
        <x-component::button type="submit" color="primary" class="btn-sm">
            {{ str(__('component::messages.create'))->upper() }}
        </x-component::button>
        @endif
    </div>
    @endif

    @push('scripts')
    <script>
        (function() {
            document.addEventListener("DOMContentLoaded", function(){
                let firstInput = $("#formId").find('input[type=text],textarea,select').filter(':visible:first');
                firstInput.focus();
            });     
        })()
    </script>
    @endpush
</form>