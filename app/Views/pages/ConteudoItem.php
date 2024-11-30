<div class="container">
    <div class="card my-3">
        <div class="card-body">
            <h3><?php echo $conteudo['Titulo']; ?></h3>
            <?= $conteudo['Texto_completo'] ?>
        </div>
        <div class="card-footer">
            <a href="javascript:history.back()" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>