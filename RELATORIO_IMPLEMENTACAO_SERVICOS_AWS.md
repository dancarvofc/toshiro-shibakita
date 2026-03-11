# RELATÓRIO DE IMPLEMENTAÇÃO DE SERVIÇOS AWS

Data: 10 de março de 2026  
Empresa: Abstergo Industries  
Responsável: Lucas Almeida Costa

## Introdução
Este relatório apresenta o processo de implementação de ferramentas na empresa Abstergo Industries, realizado por Lucas Almeida Costa. O objetivo do projeto foi elencar 3 serviços AWS, com a finalidade de realizar diminuição de custos imediatos na operação da plataforma virtual de uma farmácia fictícia.

## Descrição do Projeto
O projeto de implementação de ferramentas foi dividido em 3 etapas, cada uma com seus objetivos específicos. A seguir, serão descritas as etapas do projeto:

Etapa 1:
- Nome da ferramenta: Amazon ECS com AWS Fargate Spot
- Foco da ferramenta: Redução de custo de computação com execução de containers sob demanda
- Descrição de caso de uso: Os microsserviços de catálogo, carrinho e pedidos da farmácia foram migrados para ECS, utilizando Fargate Spot em horários de baixa criticidade. A medida reduziu em aproximadamente 34% o custo mensal da camada de aplicação.

Etapa 2:
- Nome da ferramenta: Amazon S3 com Intelligent-Tiering e Lifecycle
- Foco da ferramenta: Otimização de custos de armazenamento
- Descrição de caso de uso: Receitas médicas digitalizadas, comprovantes e relatórios de auditoria foram armazenados em S3. Arquivos com baixa frequência de acesso passaram automaticamente para classes mais econômicas, com redução de cerca de 47% nos custos de armazenamento.

Etapa 3:
- Nome da ferramenta: AWS Compute Optimizer
- Foco da ferramenta: Dimensionamento correto de recursos para evitar desperdício
- Descrição de caso de uso: Foi feita análise de utilização de CPU, memória e I/O nos serviços de banco e aplicação. Com base nas recomendações, instâncias superdimensionadas foram ajustadas, gerando redução adicional estimada de 22% em custos de infraestrutura.

## Conclusão
A implementação de ferramentas na empresa *Abstergo Industries* tem como esperado a redução contínua de custos operacionais, melhor uso de recursos em nuvem, maior previsibilidade financeira e melhor desempenho da plataforma da farmácia virtual, o que aumentará a eficiência e a produtividade da empresa. Recomenda-se a continuidade da utilização das ferramentas implementadas e a busca por novas tecnologias que possam melhorar ainda mais os processos da empresa.

## Anexos
- Planilha de estimativa de custos antes e depois da migração
- Documento de arquitetura da solução em AWS
- Checklist operacional de implantação dos microsserviços
- Guia de monitoramento e alertas de custo

Assinatura do Responsável pelo Projeto:

Lucas Almeida Costa
