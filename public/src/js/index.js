// src/index.js
import '../css/main.css'
import Alpine from 'alpinejs';
import { ToggleContent } from './app/ToggleContent';
import { Auth } from './app/Auth';
import Turbolinks from 'turbolinks';
import { collapse } from '@alpinejs/collapse';
import { eventTable } from './app/events/crud';
import { General } from './app/General';
import { persist } from '@alpinejs/persist';

//Turbolinks.start();
// Asigna Alpine a la ventana global
window.Alpine = Alpine;
Alpine.plugin(collapse)
Alpine.plugin(persist)
// Registra el componente `ToggleContent`
document.addEventListener('alpine:init', () => {
    Alpine.data('General', General);
    Alpine.data('ToggleContent', ToggleContent);
    Alpine.data('Auth', Auth);
    Alpine.data('EventTable', eventTable);
})
Alpine.start();

// Inicia Alpine



