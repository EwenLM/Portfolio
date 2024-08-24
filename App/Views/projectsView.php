</header>
<main data-scroll="area">

    <section class="scroll-container">
        <div class="content-section">
            <div id="allProjects">
                <?php if (!empty($dataProjects['titles'])): ?>
                    <?php foreach ($dataProjects['titles'] as $index => $title): ?>
                        <div class="project">
                            <h3 class="title-project"><?php echo ($title); ?></h3>
                            <div class="project-detail">
                                <p class="text">
                                    <?php echo ($dataProjects['descriptions'][$index]); ?>
                                </p>
                                <p class="text">
                                    Technologies used : <?php echo ($dataProjects['techno'][$index]) ?>
                                </p>
                                <div class="all-link">
                                    <div class="link-project">
                                        <a href="<?= $dataProjects['links'][$index]; ?> " target="_blank"> <img class="img-link" src="./Asset/Images/site.png" alt="logo site"></a>  
                                    </div>
                                    <div class="link-project">
                                        <a href="<?= $dataProjects['githubs'][$index]; ?>" target="_blank"> <img class="img-link" src="./Asset/Images/github.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text">Aucun projet disponible.</p>
                <?php endif; ?>

            </div>
        </div>
    </section>
</main>