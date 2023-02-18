import { Toast } from 'bootstrap';

let toastsElement = document.getElementById('toasts-livewire');

Livewire.on('showBootstrapToast', () => {
    let toast = Toast.getOrCreateInstance(toastsElement);

    toast.show();
});

Livewire.hook('message.processed', (message) => {
    if (Object.keys(message.response.serverMemo.errors).length) {
        Livewire.emit('showToast', 'danger', toastsElement.dataset.errorMessage);
    }
});
