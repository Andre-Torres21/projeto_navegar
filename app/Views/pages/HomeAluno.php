<div class="container">
    <?php if(!empty($conteudo)): ?>
        <?php foreach($conteudo as $conteudo_item): ?>
            <div class="card my-5">
                <div class="card-body">
                    <h3><?= $conteudo_item['Titulo'] ?></h3>
                    <p><?= $conteudo_item['Texto_curto'] ?></p>
                </div>
                <div class="card-footer">
                    <a href="<?= $conteudo_item['ID_Conteudo'] ?>" class="btn btn-success">Saiba mais</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <h3>Sem conteúdo</h3>
        <p>Não existe conteúdo cadastrado.</p>
    <?php endif; ?>
</div>