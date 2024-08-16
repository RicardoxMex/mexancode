// src/app/ToggleContent.js
export function ToggleContent() {
    return {
        open: false,
        buttonText: 'Mostrar Contenido',

        toggle() {
            this.open = !this.open;
            this.buttonText = this.open ? 'Ocultar Contenido' : 'Mostrar Contenido';
        }
    };
}
