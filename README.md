# Sistema de Suporte - Registro de Reclamações e Chamados

Este projeto é um sistema simples para que usuários possam registrar reclamações, dúvidas ou problemas técnicos através de um formulário web. Os dados enviados ficam armazenados em um banco MySQL para que a equipe de suporte possa analisar e resolver posteriormente.

---
## Funcionalidades principais

- Formulário para registro de chamados com campos essenciais (nome, email, telefone, descrição do problema, prioridade)
- Armazenamento seguro dos dados em banco MySQL
- Interface web simples, responsiva e amigável
- Utiliza PHP para processamento dos dados no backend
- Possibilidade de priorizar os chamados (Baixa, Média, Alta)

---

## Exemplos de problemas/reclamações que podem ser registrados

- Erros ou falhas no sistema
- Dúvidas sobre o uso do serviço/produto
- Solicitação de suporte técnico
- Reclamações sobre atendimento ou serviço
- Sugestões de melhorias
- Problemas com pagamento ou faturamento
- Outros incidentes que necessitem análise e resolução

---

## Como usar localmente

### Pré-requisitos

- XAMPP instalado (Apache e MySQL ativos)
- Navegador

### Passos para rodar

1. Clone este repositório ou baixe os arquivos:

git clone https://github.com/seuusuario/suporte.git
Copie a pasta suporte para a pasta do XAMPP:


C:\xampp\htdocs\
Inicie Apache e MySQL no XAMPP Control Panel

Crie o banco e tabela no phpMyAdmin:

Acesse: http://localhost/phpmyadmin
Crie o banco suporte_db se ainda não existir e execute:

CREATE TABLE chamados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    numero VARCHAR(20),
    descricao TEXT,
    prioridade ENUM('Baixa', 'Média', 'Alta') DEFAULT 'Baixa',
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Ajuste salvar.php caso precise mudar usuário, senha ou banco

Abra no navegador:


http://localhost/suporte/index.html
Preencha o formulário para registrar um chamado/reclamação

Próximos passos recomendados
Criar página administrativa para listar e gerenciar chamados

Implementar envio de notificações por email para equipe de suporte

Adicionar autenticação para acesso restrito ao painel de suporte

Implementar filtros e buscas por prioridade, data e status do chamado

Suporte e contribuições
Se quiser melhorar, criar funcionalidades ou reportar bugs, abra uma issue ou faça um pull request.

LINK TESTAVEL: https://joaovitor323.github.io/Suporte/

Feito por João Vitor da Silva Oliveira

