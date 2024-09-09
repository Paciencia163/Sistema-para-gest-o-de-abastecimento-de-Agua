## Sistema de Gestão de Abastecimento de Água

Este repositório contém o código-fonte para um sistema web de gestão de abastecimento de água. O sistema permite que usuários registrem pedidos de água, visualizem o histórico de seus pedidos e gerenciem suas informações de conta. 

### Recursos

* **Registro de Usuários:** Permite que novos usuários se registrem com suas informações pessoais.
* **Login de Usuários:** Autenticação segura de usuários existentes.
* **Pedido de Água:** Permite que os usuários façam pedidos de água, especificando a quantidade, o tipo de água, o método de pagamento e o ID da transação (se aplicável).
* **Gerenciamento de Pedidos:** Permite que os usuários vejam o histórico de seus pedidos e cancelem pedidos pendentes.
* **Painel Administrativo:** Fornece um painel para os administradores gerenciarem pedidos, usuários e produtos.
* **Gerenciamento de Produtos:** Permite que os administradores adicionem, editem e removam produtos de água.

### Tecnologias

* **Linguagem:** PHP
* **Banco de Dados:** MySQL
* **Framework:** Bootstrap (para o design responsivo)

### Instalação

1. **Clone o repositório:** `git clone https://github.com/seu-usuario/sistema-abastecimento-agua.git`
2. **Crie um banco de dados:** Crie um banco de dados chamado "water" no seu servidor MySQL.
3. **Importe o script SQL:** Importe o arquivo `schema.sql` para o banco de dados "water".
4. **Configure as credenciais do banco de dados:** Edite o arquivo `config.php` com as credenciais do seu banco de dados.
5. **Acesse o sistema:** Acesse a página `index.php` no seu navegador web.

### Documentação

A documentação completa está disponível no repositório, incluindo:

* **Arquivos SQL:** `water.sql` (esquema do banco de dados)
* **Arquivos PHP:** Documentação interna (Comentários)
* **README.md:** Este arquivo

### Contribuições

Contribuições são bem-vindas! Se você encontrar algum problema, gostaria de adicionar um novo recurso ou melhorar o código existente, sinta-se à vontade para criar um fork do repositório e enviar um pull request.


### Licença

Este projeto está sob a licença MIT. Consulte o arquivo `LICENSE` para mais detalhes.

---
