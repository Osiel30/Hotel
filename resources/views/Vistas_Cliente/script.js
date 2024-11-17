// Selección de todos los enlaces de navegación
document.querySelectorAll('.tab-navigation a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault(); // Prevenir el comportamiento predeterminado del enlace

        // Obtener el ID del contenido objetivo
        const targetId = this.getAttribute('href').substring(1); // Remover el '#' del href
        const targetContent = document.getElementById(targetId);

        // Ocultar todos los contenidos
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.remove('active'); // Remueve la clase 'active'
        });

        // Mostrar el contenido correspondiente
        if (targetContent) {
            targetContent.classList.add('active'); // Agrega la clase 'active' al contenido objetivo
        }
    });
});
