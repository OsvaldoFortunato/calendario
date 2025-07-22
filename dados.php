<?php

class DiasDaSemana
{
    public $dia;
    public $numero_dia;

    function __construct($dia, $numero_dia)
    {
        $this->dia = $dia;
        $this->numero_dia = $numero_dia;
    }
}

$dias_semana = array();

$datess = new DateTime("last day of this month");
$ultimoDia = (int)$datess->format('d');
for ($i = 1; $i <= $ultimoDia; $i++) {
    $data = new DateTime("2025-07-" . $i);
    $numero_dia = (int)($data->format("d"));
    $dia_semana = $data->format("l");
    $dias_semana[] = new DiasDaSemana($dia_semana, $numero_dia);
}

echo json_encode($dias_semana);
