# Docker: Utilização prática no cenário de Microsserviços

**Denilson Bonatti, Instrutor - Digital Innovation One**

Muito se tem falado de containers e consequentemente do Docker no ambiente de desenvolvimento. Mas qual a real função de um container no cenário de microsserviços? Qual a real função e quais exemplos práticos podem ser aplicados no dia a dia?

Essas são algumas das questões que serão abordadas de forma prática pelo Expert Instructor Denilson Bonatti nesta Live Coding.

> IMPORTANTE: As Live Codings acontecem no canal oficial da `dio._` no YouTube.

## Pré-requisitos

- Conhecimentos básicos em Linux
- Conhecimentos básicos em Docker
- Conhecimentos básicos em AWS

## Descrição do Desafio

A tecnologia de Containers promete mudar a maneira como as operações de TI são realizadas, abstraindo ambientes de desenvolvimento e otimizando o consumo de recursos.

Neste contexto, o objetivo é conhecer o Docker e implementar uma estrutura de microsserviços com boas práticas de mercado, conquistando maior independência entre aplicações e infraestrutura.

Neste desafio, a proposta é replicar (e também melhorar) o projeto prático, criando um repositório próprio para fortalecer o portfólio no GitHub.

## Dica

Você pode fazer um fork do repositório original para organizar suas alterações e evoluções, mantendo uma referência direta ao código base.

## Melhorias Aplicadas

- Aplicacao PHP configuravel por variaveis de ambiente (`DB_HOST`, `DB_USER`, `DB_PASSWORD`, `DB_NAME`, `DB_PORT`)
- Insercao no banco usando `prepared statement`
- Schema SQL com chave primaria auto incremento e coluna de data/hora
- Balanceamento com Nginx usando 3 instancias da aplicacao
- Ambiente completo com `docker-compose` (MySQL + app1/app2/app3 + load balancer)

## Como Executar

```bash
docker compose up --build -d
```

Depois, acesse:

- http://localhost:4500

## Links Úteis

- [Repositório no GitHub](https://github.com/dancarvofc/toshiro-shibakita)
