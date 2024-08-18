<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ewen Le Maux - Portfolio</title>
    <link rel="stylesheet" href="./Asset/Css/main.css">
    <script src="./Asset/Scripts/scroll.js"></script>
</head>

<body>

    <div id="border">
        <header>
            <h1 class="subtitle admin-title">Admin</h1>
        </header>

        <body>
            <nav>
                <a href="./" class="text">Retour au site</a>
            </nav>
            <main data-scroll="area">
                <div class="scroll-container">
                    <div class="content-section">

                        <!-- ====================Formulaire ajout de cv================= -->
                        <h3 class="subtitle-admin">Chargement CV</h3>
                        <?php if (isset($_SESSION["msgCv"])) {
                            $message = $_SESSION["msgCv"];
                        ?>
                            <p class="text"><?php echo $message ?></p>
                        <?php
                            unset($_SESSION['msgCv']);
                        } ?>

                        <form action="./admin/cv/upload" method="POST">
                            <label class="text" for="cv">Choisir un CV</label>
                            <input class="text" type="file" id="cv" name="cv" accept=".pdf, .doc">
                            <button type="submit">Uploader CV</button>
                        </form>

                        <!-- ====================Formualire ajout de projet================ -->

                        <h3 class="subtitle-admin">Ajout Projet</h3>
                        <?php if (isset($_SESSION["msgProject"])) {
                            $message = $_SESSION["msgProject"];
                        ?>
                            <p class="text"><?php echo $message ?></p>
                        <?php
                            unset($_SESSION['msgProject']);
                        } ?>
                        <form action="./admin/project/upload" method="POST" enctype="multipart/form-data">
                            <label class="text" for="title-project">Titre du projet</label>
                            <input class="text" type="text" id="title-project" name="title">

                            <label class="text" for="description">Description</label>
                            <textarea rows="7" class="text" type="text" id="description" name="description"></textarea>

                            <label class="text" for="link">Lien</label>
                            <input class="text" type="text" id="link" name="link">

                            <label class="text" for="github">Github</label>
                            <input class="text" type="text" id="github" name="github">

                            <label class="text" for="image">Image du site</label>
                            <input class="text" type="file" multiple
                            accept="image/png, image/webp, image/jpg, image/jpeg" id="image" name="image[]">

                            <label class="text" for="video">Vidéo du site</label>
                            <input class="text" type="file" accept=".mp4" id="video" name="video">

                            <button type="submit">Ajouter Projet</button>
                        </form>


            </main>
        </body>

</html>