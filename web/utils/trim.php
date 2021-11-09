<?php

    /**
     * funcion que sirve para validar y limpiar un campo
     * @param $campo Tiene que ser de tipo POST
     * @return string
     */
    function validar_campo($campo){
        $campo = trim($campo);
        $campo = stripcslashes($campo);
        $campo = htmlspecialchars($campo);

        return $campo;
    }
?>