<?php
/**
 * ----------------------------------------------------------------------------
 * View de Listagem de Usuários
 * ----------------------------------------------------------------------------
 * 
 * Exibe a tabela com todos os usuários cadastrados no sistema.
 * 
 * Exibe uma mensagem flash de sucesso, se estiver presente na sessão, com
 * um toast que desaparece automaticamente após alguns segundos.
 * 
 * Utiliza Tailwind CSS para estilização responsiva e limpa.
*/

// Esta variavel é a lista de usuários que foi obtida na consulta ao banco
// Se não houver nenhum resultado, ela será uma lista vazia apenas. 
$usuarios = $usuarios ?? []
?>

<div class="overflow-x-auto">

    <div>
        <h1>Lista de usuários</h1>
        <!-- O botão tem uma função de click que redireciona o usuário até a página de cadastro -->
        <!-- Obs.: O caminho da tela deve serguir a estrutura abaixo, apenas mudando de acordo com seu projeto -->
        <button 
            class="btn btn-primary" 
            onclick="window.location.href='/PHP-MVC/index.php?controlador=usuarios&acao=criar'"
        >
                Cadatrar
        </button>
    </div>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </thead>

        <tbody>
            <?php if(!empty($usuarios)) : ?>
                <?php foreach ($usuarios as $user) : ?>
                    <tr>
                        <td> <?= htmlspecialchars($user['id']) ?> </td>
                        <td> <?= htmlspecialchars($user['nome']) ?> </td>
                        <td> <?= htmlspecialchars($user['email']) ?> </td>
                        <td>
                            <a href="/PHP-MVC/index.php?controlador=usuarios&acao=editar&id=<?= $user['id'] ?>">
                              editar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <td>Não há usuários cadastrados</td>
            <?php endif; ?>
        </tbody>
    </table>
</div>