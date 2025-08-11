<!-- 
/**
 * ----------------------------------------------------------------------------
 * View de Cadastro de Usuário
 * ----------------------------------------------------------------------------
 *
 * Esta página exibe o formulário para criar um novo usuário no sistema.
 * O formulário envia os dados via POST para o mesmo endpoint que está
 * responsável por tratar o cadastro no UserController.
 *
 * Utiliza classes do Tailwind CSS para estilização simples e responsiva.
 */
-->
<div>
    <h1>Cadastro de Usuários</h1>

    <form method="post">
        <input type="text" placeholder="Nome" name="nome" class="input" />
        <input type="email" placeholder="Email" name="email" class="input" />
        <input type="text" placeholder="Senha" name="senha" class="input" />

        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
</div>