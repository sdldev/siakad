import './bootstrap';

import Alpine from 'alpinejs'
import persist from '@alpinejs/persist'
import intersect from '@alpinejs/intersect'
import collapse from '@alpinejs/collapse'

window.Alpine = Alpine
 
Alpine.plugin(collapse)
Alpine.plugin(intersect)
Alpine.plugin(persist)

Alpine.start()