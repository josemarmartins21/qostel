<section id="depoimento-de-clientes">
    <h2>Dempoimento de clientes</h2>

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
</section>

