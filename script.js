/*modeClair.addEventListener("click", () => {
  document.body.classList.add("darkMode");
});
modeSombre.addEventListener("click", () => {
  document.body.classList.remove("darkMode");
});*/

// Vérifie le mode au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            const savedMode = localStorage.getItem('darkMode');
            if (savedMode === 'enabled') {
                document.body.classList.add('darkMode');
                document.getElementById('modeSombre').style.visibility = 'hidden';
                document.getElementById('modeClair').style.visibility = 'visible';
            }
        });

        function toggleDarkMode() {
            const body = document.body;
            body.classList.toggle('darkMode');
            
            const darkModeEnabled = body.classList.contains('darkMode');
            localStorage.setItem('darkMode', darkModeEnabled ? 'enabled' : 'disabled');
            
            // Gestion de l'affichage des icônes
            document.getElementById('modeClair').style.visibility = 
                darkModeEnabled ? 'visible' : 'hidden';
            document.getElementById('modeSombre').style.visibility = 
                darkModeEnabled ? 'hidden' : 'visible';
        }

