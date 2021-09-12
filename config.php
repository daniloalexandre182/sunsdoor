<?php 

//VARIÁVEIS GLOBAIS
$email = 'atendimento@sunsdoor.com.br';
$telefone = '(13) 99999-9999';
$whatsapp = '(13) 99999-9999';
$whatsapp_link = '5513999999999';
$nome_loja = 'Sunsdoor Surf Suplly Co.';
$texto_destaque = 'Equipamentos de Surf, Pranchas novas e usadas!';
$endereco_loja = 'Rua da Aviação, 13, Centro, São Vicente/SP';

$url_loja = 'localhost/sunsdoor';


//VARIAVEIS DO BANCO DE DADOS
$servidor = 'localhost';
$usuario = '';
$senha = '';
$banco = '';


//VARIAVEIS DO SITE
$itens_por_pagina = 6;



//CONFIGURAÇÕES DO FRETE DOS CORREIOS
$cep_origem = '11390-150';

//INFORMAÇÕES EM CM (EMBALAGEM DE ENVIO)
$comprimento_caixa = '30';
$largura_caixa = '20';
$altura_caixa = '20';
$diametro_caixa = '25';

//Indica  se  a  encomenda  será  entregue  com  o  serviço adicional mão própria.Valores possíveis: S ou N   (S –Sim, N –Não)
$mao_propria = 'N';

//Valor declarado, 1 para sim e 0 para não
$valor_declarado = 0;

//Aviso de recebimento  S ou N
$aviso_recebimento = 'N';

//1 Para caixa/Pacote  -   2 para rolo/prisma  -   3 para envelope
$formato_frete = 1;



//VARIAVEIS PARA O CUPOM
//total de cartões para o cliente trocar pelo cumpom de desconto
$total_cartoes_troca = 10;
//valor do desconto para quando o cliente completar x cupons (colocar o valor aqui inteiro)
$valor_cupom_cartao = 10;
$dias_uso_cupom = 30;


//NIVEL MINIMO PARA ALERTA NO ESTOQUE
$nivel_estoque = 5;


//VARIAVEL QUE DEFINE A LIMPEZA DO CARRINHO APÓS 2 DIAS SEM O USUÁRIO FECHAR A COMPRA (NO CASO ABAIXO EU OPTEI POR DOIS DIAS)
$dias_limpar_carrinho = 2;


//definir se vai ser possível retirar o produto no local sim ou não!
$retirada_local = 'sim';

//nota minima para mostrar a avaliação do produto na página do produto
//no exemplo abaixo com valor 3, ele só mostra produto avaliado de 3 a 5
$nota_minima = 3;


//DISPAROS AUTOMATIZADOS DE EMAIL MARKETING
//total de emails que o seu servidor suporta enviar por hora (no meu hostgator são 500)
$enviar_total_emails = 480;
$intervalo_envio_email = 70;  //tempo em minutos (enviar de 70 em 70 minutos 480 emails por vez, essa é a configuração que fiz)
 ?>