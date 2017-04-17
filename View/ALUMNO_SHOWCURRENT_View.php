<?php

class ALUMNO_SHOWCURRENT_View
{
    /**
     * @var array $values_list
     */
    private $values_list;

    /**
     * ALUMNO_SHOWCURRENT_View constructor.
     * @param array $values_list
     */
    public function __construct($values_list)
    {
        $this->values_list = $values_list;
    }

    /**
     * @return array
     */
    public function getValuesList()
    {
        return $this->values_list;
    }

    /**
     * @param array $values_list
     */
    public function setValuesList($values_list)
    {
        $this->values_list = $values_list;
    }

    public function render()
    {
        var_dump($this->getValuesList());
    }

}