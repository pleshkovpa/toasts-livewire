<div id="toasts-livewire" data-bs-delay="{{ config('toasts-livewire.hide_delay') }}"
    data-error-message="{{ __(config('toasts-livewire.error_message')) }}"
    class="toast position-fixed align-items-center text-white bg-{{ $color }} border-0 fade hide"
    style="top: 1rem; right: 1rem; width: 18rem; z-index: 1090;">

    <div class="d-flex">
        <div class="toast-body">
            {{ $message }}
        </div>

        <button type="button" data-bs-dismiss="toast" class="btn-close btn-close-white me-2 m-auto"></button>
    </div>

</div>
