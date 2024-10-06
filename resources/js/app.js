// import './bootstrap';

// import Alpine from 'alpinejs';
// import persist from "@alpinejs/persist";

// Alpine.plugin(persist);
// window.Alpine = Alpine;

// Alpine.start();


import './bootstrap';

import Alpine from 'alpinejs'
import persist from '@alpinejs/persist'
import intersect from '@alpinejs/intersect'
import collapse from '@alpinejs/collapse'
 
Alpine.plugin(collapse)
Alpine.plugin(intersect)
Alpine.plugin(persist)


window.Alpine = Alpine
Alpine.start()