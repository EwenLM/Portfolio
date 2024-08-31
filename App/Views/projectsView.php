</header>
<main data-scroll="area">

    <section class="scroll-container">
        <div class="content-section">
            <div id="presentProject">
                <p class="text">
                    There is my projects, always made with love and passion. <br> <br>
                    I consider all of them like not finished, because I'm a new dev and I try to update them when i learn new things who make them evolve <br><br>
                    So you can come back to see what's new on them ( or just to try to beat your score on Space Invaders ). <br>

                </p>
            </div>
            <div id="allProjects">
                <?php if (!empty($dataProjects['titles'])): ?>
                    <?php foreach ($dataProjects['titles'] as $index => $title): ?>
                        <div class="project">
                            <h3 class="title-project"><?php echo ($title); ?></h3>
                            <div class="project-detail">
                                <p class="text">
                                    <?php echo ($dataProjects['descriptions'][$index]); ?>
                                </p> <br>
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