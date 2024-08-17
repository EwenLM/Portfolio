<body>
    <nav>
        <a href="./" class="text">Retour au site</a>
    </nav>
    <h2 class="subtitle admin-title">Admin</h2>
    </header>
    <main data-scroll="area">
        <div class="scrollable-content ">

        <div class="content-section">
            <h3 class="subtitle2">Chargement CV</h3>
            <form action="./cv/upload">
                <label class="text" for="cv">Choisir un CV</label>
                <input class="text" type="file" id="cv" name="cv" accept=".pdf, .doc">
                <button type="submit">Uploader CV</button>
            </form>

            <h3 class="subtitle2">Ajout Projets</h3>
            <form action="./project/upload">
                <label class="text" for="title-project">Titre du projet</label>
                <input class="text" type="text" id="title-project" name="title-project">

                <label class="text" for="description">Description</label>
                <input class="text" type="text" id="description" name="description">

                <label class="text" for="image">Image du site</label>
                <input class="text" type="file" accept="image/png, image/webp, image/jpg, image/jpeg" id="image" name="image">

                <label class="text" for="image">Vidéo du site</label>
                <input class="text" type="file" accept=".mp4" id="image" name="image">

                <button type="submit">Ajouter Projet</button>
            </form>


    </main>
</body>

</html>