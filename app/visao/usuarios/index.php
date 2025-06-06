<?php
$usuarios = $usuarios ?? []
?>

<div>
    <h1>Lista de usuários</h1>

    <table>
        <thead>
            <td>ID</td>
            <td>Nome</td>
            <td>E-mail</td>
        </thead>

        <tbody>
            <?php if(!empty($usuarios)) : ?>
                
            <?php else: ?>
                <td>Não há usuários cadastrados</td>
            <?php endif; ?>
        </tbody>
    </table>
</div>