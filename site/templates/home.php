<?php snippet("header") ?>

<body>

    <p> Hello </p>

    <ul>
        <?php foreach ($page->children()->listed() as $item): ?>
            <li>
                <h2>
                    <?= $item->title() ?>
                </h2>
                <ul>
                    <li>
                        <?= $item->CameraUsed() ?>
                    </li>
                    <li>
                        <h3>Director</h3>
                        <?= $item->Director() ?>
                    </li>
                    <li>
                        <h3>Assistant</h3>
                        <?= $item->Assistant() ?>
                    </li>
                    <li>
                        <h3>Lighting</h3>
                        <?= $item->Lighting() ?>
                    </li>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>

</body>

<?php snippet("footer") ?>