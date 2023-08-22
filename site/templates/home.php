<?php snippet("header") ?>

<main class="home-main">
    <ul class="project-list">
        <?php foreach ($page->children()->listed() as $item): ?>
            <li class="project-list-item project-grid">
                <div class="project-title-container">
                    <div class="project-title-grid">
                        <h2 class="project-title project-title-padding project-title-grid-item">
                            <?= $item->Title() ?>
                        </h2>
                        <p class="project-length project-length-padding project-length-grid-item">
                            <?= $item->Videolength() ?>
                        </p>
                    </div>
                </div>
                <div class="project-video-container">
                    <?= $item->Videoembedurl() ?>
                </div>
                <ul class="project-details-list">
                    <li class="project-camera-used project-camera-used-padding">
                        <h3>
                            <?= $item->Cameraused() ?>
                        </h3>
                    </li>
                    <li class="project-director project-description-grid project-description-padding">
                        <h3 class="project-director-title project-grid-item-a">
                            <?= $item->FieldTitle1() ?>
                        </h3>
                        <p class="project-director-text project-grid-item-b">
                            <?= $item->FieldDescription1() ?>
                        </p>
                    </li>
                    <li class="project-assistant project-description-grid project-description-padding">
                        <h3 class="project-assistant-title project-grid-item-a">
                            <?= $item->FieldTitle2() ?>
                        </h3>
                        <p class="project-assistant-text project-grid-item-b">
                            <?= $item->FieldDescription2() ?>
                        </p>
                    </li>
                    <li class="project-lighting project-description-grid">
                        <h3 class="project-lighting-title project-grid-item-a">
                            <?= $item->FieldTitle3() ?>
                        </h3>
                        <p class="project-lighting-text project-grid-item-b">
                            <?= $item->FieldDescription3() ?>
                        </p>
                    </li>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>
</main>

<?php snippet("footer") ?>