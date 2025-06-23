<?php
$usuarios = $usuarios ?? []
?>

<div class="overflow-x-auto">

    <div>
        <h1>Lista de usuários</h1>
        <button 
            class="btn btn-primary" 
            onclick="window.location.href='/PHP-MVC/index.php?controlador=usuarios&acao=criar'"
        >
                Cadatrar
        </button>
    </div>

    <table class="table">
        <thead>
            <td>ID</td>
            <td>Nome</td>
            <td>E-mail</td>
        </thead>

        <tbody>
            <?php if(!empty($usuarios)) : ?>
                <?php foreach ($usuarios as $user) : ?>
                    <td> <?= htmlspecialchars($user['id']) ?> </td>
                    <td> <?= htmlspecialchars($user['nome']) ?> </td>
                    <td> <?= htmlspecialchars($user['email']) ?> </td>
                <?php endforeach; ?>
            <?php else: ?>
                <td>Não há usuários cadastrados</td>
            <?php endif; ?>
        </tbody>
    </table>
</div>