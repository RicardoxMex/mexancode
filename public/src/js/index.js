// src/index.js
import '../css/main.css'
import Alpine from 'alpinejs';
import { ToggleContent } from './app/ToggleContent';
import { Auth } from './app/Auth';

// Asigna Alpine a la ventana global
window.Alpine = Alpine;

// Registra el componente `ToggleContent`
Alpine.data('ToggleContent', ToggleContent);
Alpine.data('Auth', Auth);

// Inicia Alpine
Alpine.start();
