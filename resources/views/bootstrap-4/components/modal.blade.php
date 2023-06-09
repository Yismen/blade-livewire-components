@props([
'modalName',
'footer',
'titleClass' => '',
'backdrop' => true
])
<div>
    <!-- Modal -->
    <div class="modal fade" @if ((bool)$backdrop==false) data-backdrop="static" data-keyboard="false" @endif
        id="{{ $modalName }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true"
        wire:ignore.self>
        <div {{ $attributes->merge([
            'class' => "modal-dialog modal-dialog-centered"
            ]) }} role="document">
            <div class="modal-content">
                <div class="modal-header">
                    @isset($header)
                    {{ $header }}
                    @endisset
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    {{ $slot }}
                </div>
                @isset($footer)
                <div class="modal-footer">
                    {{ $footer }}
                </div>
                @endisset
            </div>
        </div>
    </div>

</div>
@push('scripts')
<script>
    document.addEventListener('{{ $modalName }}', (event) => {
        let element = $('#' + '{{ $modalName }}');

        element.modal('show');

        element.on('shown.bs.modal', function (event) {
            let firstInput = $(element).find('input[type=text],textarea,select').filter(':visible:first');
            
            firstInput.focus();
        });
    })
    document.addEventListener('closeModal', (event) => {
        let element = $('#' + '{{ $modalName }}');
        element.modal('hide');
    })
</script>
@endpush