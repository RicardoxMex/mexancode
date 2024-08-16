<div x-data="ToggleContent">
    <button @click="toggle">
        <span x-text="buttonText"></span>
    </button>

    <!-- Contenido que será mostrado/ocultado -->
    <div x-show="open" style="margin-top: 10px;">
        <p>Este es el contenido que se muestra y se oculta al hacer clic en el botón.</p>
    </div>
</div>