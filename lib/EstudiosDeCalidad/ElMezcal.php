<?php
/**
 * Revista del Consumidor - ElMezcal
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
 * @package TrcIMPLANSitioWeb
 */

namespace EstudiosDeCalidad;

/**
 * Clase ElMezcal
 */
class ElMezcal extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'El Mezcal';
        $this->autor                      = 'guivaloz';
        $this->fecha                      = '2016-10-04T15:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'el-mezcal';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El mezcal es un orgullo mexicano que cuenta con denominación de origen, esto quiere decir que no cualquier bebida de agave puede llamarse mezcal, pues además de cubrir ciertos requisitos, sólo se puede producir en una región que abarca ocho estados del país. Un mezcal auténtico debe cumplir ciertas características, y para saber cuáles sí lo hacen, el laboratorio de Profeco verificó 34 marcas de este producto.';
        $this->claves                     = 'Estudios de Calidad, Mezcal, Mexicano, Denominacion, Origen, Laboratorio';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Platillo Sabio';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/EstudiosDeCalidad/ElMezcal.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = FALSE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase ElMezcal

?>
