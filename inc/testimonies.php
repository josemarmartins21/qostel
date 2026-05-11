<section id="depoimento-de-clientes">
    <h2>Dempoimento de clientes</h2>
    <?php include __DIR__ . "/components/barra.php"; ?>

    <div id="depoimento-container">
        <?php foreach ($testimonies->getResources() as $testimony): ?>
            <div class="depoimento">
                <div>
                    <h4><?= htmlspecialchars($testimony?->name) ?></h4>
                    <p><?= $testimony->cargo ?></p>
                </div>
        
                <p>
                    <?= htmlspecialchars(textLimit($testimony?->testemunho ?? '', 140))  ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

