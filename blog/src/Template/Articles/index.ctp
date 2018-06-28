<div class="content">
    <!-- File: src/Template/Articles/index.ctp  (edit links added) -->

    <h1>Blog articles</h1>
    <p ><?= $this->Html->link("Adicionar artigo", ['action' => 'add']) ?></p>
    <div class="box-body no-padding">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Criado</th>
                <th>Ações</th>
            </tr>

        <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $article->id ?></td>
                <td>
                    <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
                </td>
                <td>
                    <?= $article->created->format(DATE_RFC850) ?>
                </td>
                <td>
                <button style="color:#fff" type="button" class="btn btn-success"><?= $this->Html->link('Editar', ['action' => 'edit', $article->id]) ?></button>
                </td>
            </tr>
        <?php endforeach; ?>

        </table>
    </div>
</div>