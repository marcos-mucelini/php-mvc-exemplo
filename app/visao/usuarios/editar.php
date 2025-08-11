<!-- 
/**
 * ----------------------------------------------------------------------------
 * View de tela de edição de Usuários
 * ----------------------------------------------------------------------------
 * 
 * Exibe a tela de edição dos usuários, com os campos preenchidos de acordo com
 * o que está cadastrado no banco de dados.
 * 
 * Utiliza Tailwind CSS para estilização responsiva e limpa.
*/ 
-->

<div>
    <h1>Cadastro de Usuários</h1>

    <form method="post">
        <input type="text" placeholder="Nome" name="nome" class="input" 
          value=" <?= htmlspecialchars($usuario['nome']) ?> "
        />
        <input type="email" placeholder="Email" name="email" class="input" 
          value=" <?= htmlspecialchars($usuario['email']) ?>"
        />
        <input type="text" placeholder="Senha" name="senha" class="input" 
          value=" <?= htmlspecialchars($usuario['senha']) ?>"
        />

        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
</div>