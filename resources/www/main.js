import './main.css'

import Alpine from 'alpinejs'
import tippy from 'tippy.js'

document.addEventListener('alpine:init', () => {
    Alpine.directive('tooltip', (el, { expression }) => {
        tippy(el, { content: expression });
    });
});

window.Alpine = Alpine
Alpine.start()
