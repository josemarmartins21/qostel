<section id="depoimento-de-clientes">
    <h2>Dempoimento de clientes</h2>

    <?php foreach ($testimonies as $testimony): ?>
        <div class="depoimento">
            <div>
                <h4><?= $testimony?->name ?></h4>
            </div>
        
            <p>
                <?= textLimit($testimony?->testemunho ?? '', 140)  ?>
            </p>
        </div>
    <?php endforeach; ?>
</section>

