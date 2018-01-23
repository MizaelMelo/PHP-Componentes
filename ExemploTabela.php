<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./__assets/img/Components-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Exemplo Tabela</title>
</head>
<body>
    <?php
        /**
         * Adiciona a classe Table classe filha de Elemento
         */
        require './__classes/Table.php';

        /**
         * Instancia o objeto Pai Elemento
         */
        $div = new Elemento('div');

        /**
         * Adicionando stylo que será interceptado pelo método __set() de Elemento
         */
        $div->style = 'margin: 60px;';

        /**
         * Todo o processo abaixo acompanha o mesmo raciocinio do exemplo de 
         * uso da classe Elemento
         */
        $p = new Elemento('p');
        $p->style = 'text-align:left;';
        $p->style .= 'font-weight:bold;';
        $p->style .= 'font-size:18px;';
        $p->add('Tabela de funcionários do BusqueJa');
        $div->add($p);

        /**
         * Monta um array qualquer de dados para preenchiimento da tabela
         */
        $dados = [];
        $dados[] = array('1', 'Mizael Melo', 'mizael@busqueja.net', 'CEO');
        $dados[] = array('2', 'Pedro Santos', 'pedro@busqueja.net', 'CEO');
        $dados[] = array('3', 'Fulano de Tal', 'fulano@busqueja.net', 'Development');

        /**
         * Intancia e adiciona uma classe de stylo
         */
        $table = new Table;
        $table->class = 'table table-striped';
        
        // Cabeçalho
        $cabecalho = $table->addRow();
        $cabecalho->style = 'font-weight:bold;';
        $cabecalho->addCell('Código');    
        $cabecalho->addCell('Nome');    
        $cabecalho->addCell('E-mail');    
        $cabecalho->addCell('Cargo'); 
        
        $i = 0;
        $total = 0;

        /**
         * Percorre o array de dados e adiciona as linhas
         */
        foreach ($dados as $dado)
        {
            // Adiciona uma linha
            $linha = $table->addRow();

            // Adiciona as células
            $linha->addCell($dado[0]);
            $linha->addCell($dado[1]);
            $linha->addCell($dado[2]);
            $linha->addCell($dado[3]);
        }
        
        // Adiciona Table dentro da div criada e exibe a tabela na tela
        $div->add($table);
        $div->show();
    ?>
</body>
</html>