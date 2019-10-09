# Sobre a Cammino Digital

Somos a Cammino Digital, um grupo de pessoas que se dedicam ao universo do E-commerce. Com o propósito de pensar, agir e se relacionar com todos os processos que envolvem um projeto digital é que, em 2006, dois sonhadores fundaram a Cammino. 

Hoje somos uma empresa especializada em e-commerce, que acredita em dados, técnicas, insights e pessoas para entregar serviços estratégicos que trazem mais resultados aos clientes.

# Teste de Back-end

Olá Dev! Tudo bem?

Este teste busca avaliar quesitos técnicos para os devs que se candidatem às vagas de desenvolvimento back-end da Cammino Digital.

Então, vamos ao teste!

### O Desafio

- Você deverá criar uma API REST para simular o cálculo de preço de produtos.

- Request
    ```bash
    POST http://localhost:8080/api/products/{id}/price
    ```
- JSON de Produtos
    ```json
    {
        "products": [
            {
                "id": 1,
                "name": "PHP for experts",
                "regular_price": 50.90,
                "special_price": 45.90,
                "sprecial_price_from": "2019-01-01",
                "sprecial_price_tro": "2019-01-31",
                "tier_prices": [
                    { "qty": 3, "price": 40.95 },
                    { "qty": 5, "price": 35.89 },
                    { "qty": 10, "price": 30.25 }
                ]
            },
            {
                "id": 2,
                "name": "TDD using PHP",
                "regular_price": 80.95,
                "special_price": 75.90,
                "sprecial_price_from": "2019-01-01",
                "sprecial_price_tro": "2019-01-31",
                "tier_prices": [
                    { "qty": 3, "price": 70.25 },
                    { "qty": 5, "price": 65.90 },
                    { "qty": 10, "price": 60.85 }
                ]
            },
            {
                "id": 3,
                "name": "Learning Magento",
                "regular_price": 80.95,
                "special_price": 75.90,
                "sprecial_price_from": "2019-01-01",
                "sprecial_price_tro": "2019-01-31",
                "tier_prices": [
                    { "qty": 3, "price": 70.25 },
                    { "qty": 5, "price": 65.90 },
                    { "qty": 10, "price": 60.85 }
                ]
            }
        ]
    }
    ```

- Retornos

    Código | Resposta
    ------------ | -------------
    `201 (Sucesso)` | `Operação realizada com sucesso` 
    `400 (Requisição inválida)` | `Ocorreu um erro desconhecido`
    `412 (Pré-condição falhou)` | `Os valores informados não são válidos.`

### Informações relevantes
- O produto possui 3 atributos básicos relacionados a preço: preço regular, preço promocional e preços por quantidade.
- O preço promocional pode ter período de validade (data de ínicio e data de término)
- O produto pode ter mais de um preço por quantidade. 
- O valor retornado pela requisição deverá ser o menor preço válido.
- Caso o preço especial seja menor que o preço da quantidade requisitada, deverá ser retornado o preço promocional.

### O que será avaliado?
- Padrões de classe, atributos e métodos
- Organização e qualidade do código
- Conhecimento da linguagem, orientação a objetos
- Semântica 

### O que nos impressionaria
- Alguma metodologia para definição e organização do seu código.
- Testes automatizados ( será um grande plus para nós :) ).

### Dificuldades? Não desanime, nós te entendemos!

Iniciou o desenvolvimento da solução, mas por algum motivo, acabou esbarrando em algo? Nós sabemos, às vezes acontece...

E é por isso que, caso você não tenha concluído o teste por algum motivo, sinta-se confortável para mesmo assim, nos enviar o que foi feito. Iremos avaliar seu código para entendermos o que pode ter acontecido e consideraremos mesmo assim, ok?

Então, bora codar?

### Conclusão e apresentação

Ao finalizar o teste, por favor, faça um fork deste repositório e solicite um pull request.

Em caso de dúvidas, envie um e-mail para suporte@cammino.com.br ou pelo WhatsApp (17) 3211-9936

Desejamos à você, boa sorte!