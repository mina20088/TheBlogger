import './bootstrap.js'
import '../css/app.css'
import 'flowbite';
import.meta.glob(['../images/**'])
import $ from 'jquery';

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






