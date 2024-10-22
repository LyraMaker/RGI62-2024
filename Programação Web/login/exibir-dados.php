<?php require __DIR__ . "/header.php"; ?>

<section class="section">
    <div class="container">
        <h1 class="title">Listagem de Usuários</h1>
        <table class="table is-fullwidth is-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Perfil Ativo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        
                        <tr>
                            <td><?= $usuario->getUsername(); ?></td>
                            <td><?= $usuario->getSenha(); ?></td>
                            <td><?= $usuario->getAtiva() == 0 ? "⛔" : "✅"?></td>
                            <td>
                                <a class="button is-small is-info">Editar</a>
                                <a class="button is-small is-danger">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="has-text-centered"><strong>Base de dados vazia!</strong></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php require __DIR__ . "/footer.php"; ?>