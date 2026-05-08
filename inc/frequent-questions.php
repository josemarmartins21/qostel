<section id="perguntas">
    <div id="img-perguntas">
        <img src="../assets/images/perguntas.png" alt="imagem representando clientes se perguntando">
    </div>
    
    <article>
        <h2>Perguntas frequentes</h2>
            <?php foreach($questions->getResources() as $question): ?>
             <div class="pergunta-container">
                <div class="pergunta">
                    <h3><?= htmlspecialchars(mb_ucfirst($question?->pergunta)) ?></h3> 
                
                    <i class="fa-solid fa-arrow-down" id="mostrar"></i>
                    <i class="fa-solid fa-arrow-up-long hidden" id="esconder"></i>
                </div>
                
                <p class="resposta">
                    <?= htmlspecialchars(mb_ucfirst($question?->response)) ?>
                </p>
             </div>
            <?php endforeach; ?> 
    </article>
</section>