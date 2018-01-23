<?php
/**
 * <b>Componentes - Formulário</b>
 * Classe que representará um formulário de cadastro.
 *  
 */
class Form
{
    /**
     * Nome do formulário
     *
     * @var STRING
     */
    private $name; 

    /**
     * URL para qual o formulário será submetido.
     *
     * @var STRING
     */
    private $action;
    
    /**
     * Amazenamento dos campos do fumulário.
     *
     * @var ARRAY
     */
    private $fields;

    /**
     * Título do formulário.
     *
     * @var STRING
     */
    private $title;
    
    /**
     * Usado para definir o nome do fomulário e inicializa os atributos.
     *
     * @param STRING $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->fields = array();
        $this->title = '';
    }
    
    /**
     * Adicona o título. 
     *
     * @param STRING $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Usada para adicionar campos ao formulário saldo-os no vetor $fields.
     *
     * @param STRING $label = Nome do campo que aparecerá para o usuário.
     * @param STRING $name  = Valor do atributo HTML name. 
     * @param STRING $type  = Tipo do campo.
     * @param STRING $value = Valor do atributo HTML value.
     * @param STRING $class = Classe de stylo (CSS).
     * @return void
     */
    public function addField($label, $name, $type, $value, $class = '')
    {
        $this->fields[] = array( 'label' => $label, 'name'  => $name, 'type' => $type,
                                 'value' => $value, 'class' => $class);
    }
    
    /**
     * Seta a ação do formulário.
     *
     * @param STRING $action
     * @return void
     */
    public function setAction($action)
    {
        $this->action = $action;
    }
    
    /**
     * Este método é responsável em ler os atributos e montar visualmente o 
     * formulário resultante, utilizando TAGs de formatação HTML.
     *
     * @return void
     */
    public function show()
    {
        echo "<div class='panel panel-default' style='margin: 40px;'>\n";
        echo "<div class='panel-heading'> {$this->title} </div>\n";
        echo "<div class='panel-body'>\n";
        echo "<form method='POST' action='{$this->action}' class='form-horizontal'>\n";
        if ($this->fields) {
            foreach ($this->fields as $field) {
                echo "<div class='form-group'>\n";
                echo "<label class='col-sm-2 control-label'> {$field['label']} </label>\n";
                echo "<div class='col-sm-10'>\n";
                echo "<input type='{$field['type']}' name='{$field['name']}'
                             value='{$field['value']}' class='{$field['class']}'>\n";
                echo "</div>\n";
                echo "</div>\n";
            }
            echo "<div class='form-group'>\n";
            echo "<div class='col-sm-offset-2 col-sm-8'>\n";
            echo "<input type='submit' class='btn btn-success' value='enviar'>\n";
            echo "</div>\n";
            echo "</div>\n";
        }
        echo "</form>";
        echo "</div>";
        echo "</div>";
    }
}
