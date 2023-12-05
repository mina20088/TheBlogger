import './bootstrap.js'
import $ from 'jquery';
import 'admin-lte/plugins/fontawesome-free/css/all.css'
import 'admin-lte/plugins/popper/popper.js'
import 'admin-lte/dist/css/adminlte.css'
import 'admin-lte/dist/js/adminlte.js'
import DataTable from "admin-lte/plugins/datatables/jquery.dataTables.min.mjs";
import 'admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css'
import 'admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js'
import 'flowbite'
import '../css/dashboard.css';
import Trix from 'trix'

let domReady = (cb) => {
    document.readyState === 'interactive' || document.readyState === 'complete'
        ? cb()
        : document.addEventListener('DOMContentLoaded', cb);
};


domReady(() => {
    // Display body when DOM is loaded
    document.body.style.visibility = 'visible';
});


 new DataTable('#mytable',{
    responsive:true
})

  new DataTable('#active',{
    responsive:true
})


$('#toast').hide()

/*
Echo.private('App.Models.User.' + id )
    .notification((notification) => {
        console.log(notification);
    });
*/

Echo.channel('App.Models.User.' + id ).listen('.post.created',(e)=>{
    $('#toast').show();
    $('#name').text(e.username);
    $('#message').text(e.message);
})

