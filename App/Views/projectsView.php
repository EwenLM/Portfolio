<nav>
    <ul id="miniNav">
        <li class="subtitle mini-link">
            <a href="../about">A Propos</a>
        </li>
        <li class="subtitle mini-link">
            <a href="../projects">Projets</a>
        </li>
        <li class="subtitle mini-link">
            <a href="../contact">Contact</a>
        </li>
    </ul>
</nav>
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
                                <p class="text"><?php echo ($dataProjects['descriptions'][$index]); ?></p>
                                <div class="all-link">
                                    <div class="link-project">
                                        <a href="<?= $dataProjects['links'][$index]; ?> "> <img class="img-link" src="./Asset/Images/site.svg" alt="logo site"></a><
                                        <!-- <p class="text">" target="_blank">Site/p> -->
                                    </div>
                                    <div class="link-project">
                                        <a href="<?= $dataProjects['githubs'][$index]; ?>"> <img class="img-link" src="./Asset/Images/github.svg" alt=""></a>
                                        <!-- <p class="text">" target="_blank">GitHub</p> -->
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