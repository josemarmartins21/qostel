<section id="prova-social-container">
    <div class="fundo-preto-2">
        <h2>Nossos Clientes</h2>
        <div id="logos-container">
            <?php dd($renownedClients->getResources()); ?>
            <?php foreach($renownedClients->getResources() as $client): ?>
                <a href="<?= htmlspecialchars($client->url) ?>" title="<?= htmlspecialchars($client->name) ?>" target="_blank" >
                    <img
                        src="../assets/images/logos_client/<?= htmlspecialchars($client->logo) ?>"
                        alt="<?= htmlspecialchars($client->name) ?>"
                        class="logo-empresa"
                    >
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>