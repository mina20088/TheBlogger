import 'admin-lte/plugins/fontawesome-free/css/all.css'
import  'admin-lte/plugins/popper/popper.js'
import 'admin-lte/dist/css/adminlte.css'
import 'admin-lte/dist/js/adminlte.js'
import DataTable from "admin-lte/plugins/datatables/jquery.dataTables.min.mjs";
import '../css/dashboard.css'
import 'flowbite'
import 'admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css'
import 'admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js'

let domReady = (cb) => {
    document.readyState === 'interactive' || document.readyState === 'complete'
        ? cb()
        : document.addEventListener('DOMContentLoaded', cb);
};



domReady(() => {
    // Display body when DOM is loaded
    document.body.style.visibility = 'visible';
});


let table = new DataTable('#mytable',{
    responsive:true
})

let activeLoginsTable =  new DataTable('#active',{
    responsive:true
})
