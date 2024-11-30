<div class="container">
    <div class="alert-primary my-3">
        <?= \Config\Services::validation() -> listErrors() ?>
    </div>
    <form action="<?= '/gravar' ?>" method="post">
        <div class="form-group">
            <label for="Titulo">Título</label>
            <input type="text" class="form-control" name="Titulo">
        </div>
        <div class="form-group">
            <label for="Texto_curto">Resumo</label>
            <input type="text" class="form-control" name="Texto_curto">
        </div>
        <div class="form-group">
            <label for="">Conteúdo completo</label>
            <textarea name="Texto_completo" class="form-control" rows="5"></textarea>
        </div>
        <input type="hidden" name="id">
        <div class="card my-3">
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
                <a href="javascript:history.back()" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>
</div>