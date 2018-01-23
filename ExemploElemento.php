<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./__assets/img/Components-icon.png" type="image/x-icon">
    <title>Exemplo Elemento</title>
</head>
<body>
    <?php
        /**
         * Adiciona a classe Elemento
         */
        require './__classes/Elemento.php';

        /**
         * Instancia o Objeto passando o nome do elemento HTML
         * que deverá ser criado
         */
        $div = new Elemento('div');

        /**
         * Adicionando os stylos
         * 
         * Neste ponto é importante lembrar que estamos adiconando
         * informações em atributos que não existem na classe elemento
         * e que esses atributos serão interceptados pelo método mágico
         * __set() da classe.
         */
        $div->style = 'text-align:center;';
        $div->style .= 'font-weight:bold;';
        $div->style .= 'font-size:14px;';

        /**
         * Instancia o Objeto passando o nome do elemento HTML
         * que deverá ser criado
         */
        $p = new Elemento('p');

        /**
         * Adiciona o conteúdo a Tag
         */
        $p->add('Sport Clube do Recife');

        /**
         * Adiciona a tag p dentro da tag div
         */
        $div->add($p);

        
        $p = new Elemento('p');
        $p->add('O Sport é um time de tradição do Nordeste, tem uma grande torcida e possuí uma excelente estrutura.');
        $p->style = 'margin-top: 100px';
        $div->add($p);

        $a = new Elemento('a');
        $a->add('Para saber mais, clique aqui!');
        $a->style = 'margin-top: 100px';
        $a->href = 'http://www.sportrecife.com.br';
        $a->target = '_blank';
        $p->add($a);

        /**
         * Exibe as informações geradas
         */    
        $div->show();

    ?>
</body>
</html>