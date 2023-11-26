import './bootstrap.js'
import '../css/app.css'
import.meta.glob(['../images/**'])
import $ from 'jquery';
import 'flowbite';
import('https://kit.fontawesome.com/7824f7faff.js')
import './PusherConfig.js'
// Helper function
let domReady = (cb) => {
    document.readyState === 'interactive' || document.readyState === 'complete'
        ? cb()
        : document.addEventListener('DOMContentLoaded', cb);
};

domReady(() => {
    // Display body when DOM is loaded
    document.body.style.visibility = 'visible';
});

setTimeout(()=> $('#dismiss').hide(),120000);






