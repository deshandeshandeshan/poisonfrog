<?php snippet("header") ?>

<body class="home-main">
    <ul class="project-list">
        <?php foreach ($page->children()->listed() as $item): ?>
            <li class="project-list-item">
                <h2 class="project-title">
                    <?= $item->title() ?>
                </h2>
                <ul>
                    <li class="project-camera-used">
                        <p>
                            <?= $item->CameraUsed() ?>
                        </p>
                    </li>
                    <li class="project-director">
                        <h3 class="project-director-title">Director</h3>
                        <p class="project-director-text">
                            <?= $item->Director() ?>
                        </p>
                    </li>
                    <li class="project-assistant">
                        <h3 class="project-assistant-title">Assistant</h3>
                        <p class="project-assistant-text">
                            <?= $item->Assistant() ?>
                        </p>
                    </li>
                    <li class="project-lighting">
                        <h3 class="project-lighting-title">Lighting</h3>
                        <p class="project-lighting-text">
                            <?= $item->Lighting() ?>
                        </p>
                    </li>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>
</body>

<?php snippet("footer") ?>