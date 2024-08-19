</header>
<main data-scroll="area">
    <h2 class="subtitle">Projets</h2>

    <section class="scroll-container">
        <div class="content-section">
            <div>
                <?php if (!empty($dataProjects['titles'])): ?>
                    <?php foreach ($dataProjects['titles'] as $index => $title): ?>
                        <div class="project">
                            <h3 class="title-project"><?php echo htmlspecialchars($title); ?></h3>
                            <div class="project-detail">
                                <p class="text"><?php echo htmlspecialchars($dataProjects['descriptions'][$index]); ?></p>
                                <p class="text"><a href="<?= $dataProjects['links'][$index]; ?>" target="_blank">Site</a></p>
                                <p class="text"><a href="<?= $dataProjects['githubs'][$index]; ?>" target="_blank">GitHub</a></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Aucun projet disponible.</p>
                <?php endif; ?>

            </div>
        </div>
    </section>
</main>