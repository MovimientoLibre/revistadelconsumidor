<?php
/**
 * Revista del Consumidor - Imprenta
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package RevistaDelConsumidorSitioWeb
 */

namespace EstudiosDeCalidad;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'EstudiosDeCalidad';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                   = 'Estudios de Calidad';
        $this->descripcion              = 'El laboratorio de la Profeco evalúa regularmente productos de diferentes marcas.';
        $this->claves                   = 'Estudios de Calidad, Laboratorio';
        $this->encabezado_color         = '#FFFFFF';
        // Opción de Navegación a poner activa
        $this->nombre_menu              = 'Estudios de Calidad';
        // Ruta a la clase para hacer el index.html
        $this->indices_paginas          = '\\Base\\PaginasDetallados'; // Puede ser \Base\PaginasDetallados, \Base\PaginasGalerias, \Base\PaginasListado o \Base\PaginasTarjetas
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio               = 'estudios-de-calidad';
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>
