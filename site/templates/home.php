<?php snippet("header") ?>

<main class="home-main">
    <ul class="project-list">
        <?php foreach ($page->children()->listed() as $item): ?>
            <li class="project-list-item">
                <div class="project-title-grid">
                    <h2 class="project-title project-title-padding project-title-grid-item">
                        <?= $item->title() ?>
                    </h2>
                    <p class="project-length project-length-padding project-length-grid-item">00:00:01:23</p>
                </div>
                <ul>
                    <li>
                        <?= $item->VideoEmbedURL() ?>
                    </li>
                    <li class="project-camera-used project-camera-used-padding">
                        <h3>
                            <?= $item->CameraUsed() ?>
                        </h3>
                    </li>
                    <li class="project-director project-description-grid project-description-padding">
                        <h3 class="project-director-title project-grid-item-a">Director:</h3>
                        <p class="project-director-text project-grid-item-b">
                            <?= $item->Director() ?>
                        </p>
                    </li>
                    <li class="project-assistant project-description-grid project-description-padding">
                        <h3 class="project-assistant-title project-grid-item-a">Assistant:</h3>
                        <p class="project-assistant-text project-grid-item-b">
                            <?= $item->Assistant() ?>
                        </p>
                    </li>
                    <li class="project-lighting project-description-grid">
                        <h3 class="project-lighting-title project-grid-item-a">Lighting:</h3>
                        <p class="project-lighting-text project-grid-item-b">
                            <?= $item->Lighting() ?>
                        </p>
                    </li>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>
</main>

<?php snippet("footer") ?>