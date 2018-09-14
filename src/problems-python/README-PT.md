## problem one - validar cartão de crédito ##

Você e Fredrick são bons amigos. Ontem, Fredrick recebeu cartões de crédito do ABCD Bank. Ele quer verificar se seus números de cartão de crédito são válidos ou não. Você é ótimo na regex, então ele está pedindo sua ajuda!

Um cartão de crédito válido do ABCD Bank possui as seguintes características:

► Deve começar com 4, 5 ou 6.
► Deve conter exatamente 16 dígitos.
► Deve consistir apenas em dígitos (0-9).
► Pode ter dígitos em grupos de 4, separados por um hífen "-".
► NÃO deve usar nenhum outro separador como '', '_', etc.
► NÃO deve ter 4 ou mais dígitos repetidos consecutivos.

Exemplos:

    Números de cartão de crédito válidos

    4253625879615786
    4424424424442444
    5122-2368-7954-3214

    Números de cartão de crédito inválidos

    42536258796157867 # 17 dígitos no número do cartão → Inválido
    4424444424442444 #Dígitos consecutivos estão repetindo 4 ou mais vezes → Inválido
    5122-2368-7954 - 3214 #Separadores diferentes de '-' são usados ​​→ Inválido
    44244x4424442444 #Contém caracteres não dígitos → Inválido
    0525362587961578 # Não começa com 4, 5 ou 6 → Inválido
    
Formato de entrada

    A primeira linha de entrada contém um inteiro N.
    As próximas N linhas contêm números de cartão de crédito.


Restrições

    0 <N <100

Formato de saída

    Imprima "Válido" se o número do cartão de crédito for válido. Caso contrário, imprima "Inválido". Não imprima as cotas.


Entrada de amostra

    6
    4123456789123456
    5123-4567-8912-3456
    61234-567-8912-3456
    4123356789123456
    5133-3367-8912-3456
    5123 - 3567 - 8912 - 3456

Saída de Amostra

    Válido
    Válido
    Inválido
    Válido
    Inválido
    Inválido

## Problema dois: posto de gasolina ##

    Usando a linguagem Python, temos a função GasStation (strArr) tomando strArr que será um array composto pelos seguintes elementos: N qual será o número de postos de gasolina em uma rota circular e cada elemento subseqüente será a string g: c onde g é a quantidade de gás em galões naquele posto de gasolina e c será a quantidade de galões de gás necessários para chegar ao posto de gasolina seguinte. Por exemplo, strArr pode ser: ["4", "3: 1", "2: 2", "1: 2", "0: 1"]. Seu objetivo é retornar o índice do posto de gasolina inicial que permitirá que você percorra toda a rota uma vez, caso contrário, a seqüência será impossível. Para o exemplo acima, existem 4 postos de gasolina, e seu programa deve retornar a string 1, porque a partir da estação 1 você recebe 3 galões de gasolina e gasta 1 chegando à próxima estação. Então você tem 2 galões + 2 mais na próxima estação e você gasta 2 então você tem 2 galões quando você chegar à 3ª estação. Você então tem 3 mas você gasta 2 chegando à estação final, e na estação final você recebe 0 galões e você gasta o seu galão final chegando ao seu ponto de partida. Começar em qualquer outro posto de gasolina tornaria impossível contornar a rota, então a resposta é 1. Se houver vários postos de gasolina que podem começar, retorne o menor índice (do posto de gasolina). N será> = 2.


Entrada da amostra:
    "4", "1: 1", "2: 2", "1: 2", "0: 1"
    "4", "0: 1", "2: 2", "1: 2", "3: 1"

Exemplo de saída:
    "impossível"
    "4"