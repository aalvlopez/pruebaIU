<?php

class ASIGNATURA_SHOWALL_View extends SHOWALL_View
{

    /**
     * ALUMNO_SHOWALL_View constructor.
     * @param array $field_list Campos a mostrar en la vista
     * @param array $values_list Lista de valores a mostrar
     */
    public function __construct($field_list, $values_list)
    {
        parent::__construct($field_list, $values_list);
        $this->title = "Listado Asignaturas";
        $this->header = "Listado Asignaturas";
    }

}