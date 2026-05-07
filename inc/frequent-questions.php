<section id="perguntas">
    <div id="img-perguntas">
        <img src="../assets/images/perguntas.png" alt="imagem representando clientes se perguntando">
    </div>
    
    <article>
        <h2>Perguntas frequentes</h2>
            <?php foreach($questions as $question): ?>
             <div class="pergunta-container">
                 <div class="pergunta">
                    <h3><?= $question?->pergunta ?></h3> 
                    
                    <i class="fa-solid fa-arrow-down" id="mostrar"></i>
                    <i class="fa-solid fa-arrow-up-long hidden" id="esconder"></i>
                 </div>
                 <p class="resposta">
                    <?= $question?->response ?>
                 </p>
             </div>
            <?php endforeach; ?> 
      <!--   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt mollitia laboriosam dicta natus, accusamus non. Atque s -->
    </article>
</section>