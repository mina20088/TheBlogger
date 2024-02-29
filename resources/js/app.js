import './bootstrap';

import Alpine from 'alpinejs';




import.meta.glob([
    '../images/**',
    '../images/avatars/**'
])
import 'flowbite';

import Swal from 'sweetalert2';


window.Alpine = Alpine;

Alpine.start();


window.addEventListener('livewire:init', function () {
    window.Livewire.on('confirm', function (event) {
        Swal.fire({
            'title': event[0].title,
            'html': event[0].html,
            'icon': 'warning',
            'showCancelButton': true,
            'showCloseButton': true,
            'cancelButtonText': 'No',
            'confirmButtonText': 'Yes',
            'cancelButtonColor': 'rgb(185 28 28)',
            'confirmButtonColor': 'rgb(3 105 161)',
            'allowOutsideClick': false
        }).then(function (result) {
            if (result.isConfirmed) {
                console.log(event[0].checked)
                window.Livewire.dispatch('deleteSelected', [event[0].checked])
            }
        })

    })
})





