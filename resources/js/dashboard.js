import 'admin-lte/plugins/fontawesome-free/css/all.css'
import  'admin-lte/plugins/popper/popper.js'
import 'admin-lte/plugins/jquery/jquery.js'
import 'admin-lte/plugins/bootstrap/js/bootstrap.js'
import 'admin-lte/dist/css/adminlte.css'
import 'admin-lte/dist/js/adminlte.js'
import '../css/dashboard.css'
import 'flowbite'

let domReady = (cb) => {
    document.readyState === 'interactive' || document.readyState === 'complete'
        ? cb()
        : document.addEventListener('DOMContentLoaded', cb);
};



domReady(() => {
    // Display body when DOM is loaded
    document.body.style.visibility = 'visible';
});
