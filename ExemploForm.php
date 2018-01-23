<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./__assets/img/Components-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Componentes - Formulario de Cadastro</title>
</head>
<body>
    <?php
        /**
         * Carrega a classe Form
         */
        require './__classes/Form.php';

        /**
         * Intancia o Objeto
         */
        $form = new Form('teste');

        /**
         * Adicionao título do formulário
         */
        $form->setTitle('Cadastro de usuario');

        /**
         * Adiciona os campos, bem como seus stylos e tipos
         */
        $form->addField('Nome', 'name', 'text', '', 'form-control');
        $form->addField('Senha', 'senha', 'password', '', 'form-control');
        $form->addField('Email', 'email', 'email', '', 'form-control');
        
        /**
         * Adiciona a action do formulário
         */
        $form->setAction('#');

        /**
         * Exibe o formulário
         */
        $form->show();
    ?>
</body>
</html>