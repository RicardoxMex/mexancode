// src/index.js
import '../css/main.css'
import Alpine from 'alpinejs';
import { ToggleContent } from './app/ToggleContent';

// Asigna Alpine a la ventana global
window.Alpine = Alpine;

// Registra el componente `ToggleContent`
Alpine.data('ToggleContent', ToggleContent);

// Inicia Alpine
Alpine.start();
