<?php

/**
 * Created by PhpStorm.
 * User: Adolfo
 * Date: 17/04/2017
 * Time: 21:20
 */
class ALUMNO_ADD_View
{
    public function render()
    {
        ?>
        <html>
        <head>
            <title> Add Alumno</title>
            <meta charset="UTF-8">
        </head>
        <body>
        <h3>Añadir alumno</h3>
        <form action="?controller=ALUMNO&action=ADD" method="post">
            <label for="dni">DNI</label><br>
            <input id="dni" type="text" name="dni"><br>

            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text" name="nombre"><br>

            <label for="apellidos">apellidos</label><br>
            <input type="text" id="apellidos" name="apellidos"><br>

            <label for="fecha_nacimiento">fecha_nacimiento</label><br>
            <input type="text" id="fecha_nacimiento" name="fecha_nacimiento"><br>

            <label for="telefono">telefono</label><br>
            <input type="number" min="0" id="telefono" name="telefono"><br>

            <label for="direccion">direccion</label><br>
            <input type="text" id="direccion" name="direccion"><br>

            <input type="checkbox" id="es_becario" name="es_becario">
            <label for="es_becario">es_becario</label><br>

            <input type="submit" value="Añadir">

        </form>
        </body>
        </html>
        <?php
    }

}