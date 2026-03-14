# 🎮 PHPJogos - Biblioteca de Jogos

Um sistema de gerenciamento de biblioteca de jogos (CRUD) com interface inspirada na Steam. Este projeto foi desenvolvido como TCC para o curso de PHP da **AvançaTech**.

## 🚀 Funcionalidades

* **Cadastro de Jogos:** Adicione novos títulos informando nome, gênero, preço, desenvolvedora, link da capa e descrição.
* **Listagem (Read):** Exibição de todos os jogos cadastrados em formato de cards responsivos.
* **Atualização (Update):** Edição completa das informações de qualquer jogo da biblioteca.
* **Exclusão (Delete):** Remoção de jogos com alertas de confirmação para evitar exclusões acidentais.
* **Busca:** Filtro de jogos pelo nome.
* **Carregar Jogos de Exemplo:** Botão prático para carregar automaticamente uma lista de jogos de diretamente para a biblioteca, para testes rápidos.
* **Armazenamento em Sessão:** Os dados são temporariamente salvos na sessão do PHP (`$_SESSION`) como solicitado para o trabalho, criando um CRUD funcional que dispensa a configuração imediata de um banco de dados relacional.

## 🛠️ Tecnologias Utilizadas

* **Back-end:** PHP 8+ (Lógica de negócios e gerenciamento de estado)
* **Front-end:** HTML5, CSS3, JavaScript
* **Framework CSS:** Bootstrap 5.3.3 (Para tipografia, grid e responsividade)
* **Alertas:** SweetAlert2 (Para modais modernos e personalizados)
* **Arquitetura:** Separação de responsabilidades (MVC Simplificado) com arquivos isolados para configuração, lógica de controle e visualização.

## 📁 Estrutura do Projeto

```text
biblioteca-jogos-php/
├── assets/
│   ├── css/
│   │   └── style.css      # Estilização customizada (Tema Steam)
│   └── js/
│       └── main.js        # Scripts de interatividade e modais
├── img/                   # Imagens locais (logo, ícones de alerta e fallback)
├── config.php             # Configurações de sessão, fuso horário e funções auxiliares
├── logica.php             # Controlador (Processamento dos formulários e exclusões)
└── index.php              # Interface do usuário (View)