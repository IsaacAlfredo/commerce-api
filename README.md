# commerce-api

Alunos: Isaac Alfredo de Freitas Silva e Emilly Regina Ferreira Duarte

Projeto para a disciplina de Desenvolvimento de Software Web. O projeto se trata de um backend para um site de compras online (e-commerce). Nesta primeira versão, foi implementado de forma simples, com o banco de dados modelado conforme o diagrama a seguir (caso use um tema escuro no GitHub, sugiro abrir a imagem em uma nova guia, para melhor visualizar os relacionamentos).

![Diagrama_ER_de_banco_de_dados_commerce](https://github.com/IsaacAlfredo/commerce-api/assets/60722914/8ea6c8c1-37d6-46a1-81c5-6bc7d5121ec7)

- user: Usuário logado no sistema;
- order: Pedidos de um usuário;
- product: Produtos cadastrados no sistema;
- productOrder: tabela intermediária para a relação n:n entre order e product.
