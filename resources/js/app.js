import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();




import "@tabler/core/dist/libs/apexcharts/dist/apexcharts";
import "@tabler/core/dist/libs/jsvectormap/dist/js/jsvectormap";
import "@tabler/core/dist/libs/jsvectormap/dist/maps/world";
import "@tabler/core/dist/libs/jsvectormap/dist/maps/world-merc";
import "@tabler/core/dist/js/tabler";
import '@tabler/core/dist/js/demo';
import 'https://kit.fontawesome.com/7824f7faff.js';
import.meta.glob([
    '../images/**',
    '../images/avatars/**'
])
import 'flowbite';