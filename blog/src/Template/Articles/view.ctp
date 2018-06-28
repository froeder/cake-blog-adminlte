<div class="content">
    <div class="col-lg-12 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
        <div class="inner">
            <h2><?= h($article->title) ?></h2>
            <h4><?= h($article->body) ?></h4>
            <p><strong>Criado: <?= $article->created->format(DATE_RFC850) ?></strong></p>

            
        </div>
        <a href="#" class="small-box-footer">
            <button style="color:#fff" type="button" class="btn btn-info">
                <?= $this->Html->Link('Voltar' , ['action' => 'index']) ?> <i class="fa fa-arrow-circle-left"></i>
            </button>
        </a>
        </div>
    </div>
</div>