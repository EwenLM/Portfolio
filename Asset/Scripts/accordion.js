//Accordeon pour detail projet
//Ajoute ou retire la class 'activ' sur les projets cliquer

document.addEventListener('DOMContentLoaded', function() {
    let projectTitles = document.querySelectorAll('.title-project');

    projectTitles.forEach(function(title) {
        title.addEventListener('click', function () {
            let content = this.nextElementSibling;

            // Fermer tous les autres projets
            document.querySelectorAll('.project-detail').forEach(function(detail) {
                if (detail !== content) { // Ne pas retirer 'active' du contenu actuel
                    detail.classList.remove('active');
                }
            });
            document.querySelectorAll('.title-project').forEach(function(item) {
                if (item !== title) { // Ne pas retirer 'active' du titre actuel
                    item.classList.remove('active');
                }
            });

            // Ouvrir ou fermer le projet actuel
            if (content.classList.contains('active')) {
                content.classList.remove('active');
                this.classList.remove('active');
            } else {
                content.classList.add('active');
                this.classList.add('active');
            }
        });
    });
});

