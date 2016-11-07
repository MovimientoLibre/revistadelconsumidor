<?php
/**
 * Revista del Consumidor - FileteDeCerdoEnSalsaDePiloncillo
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

namespace PlatilloSabio;

/**
 * Clase FileteDeCerdoEnSalsaDePiloncillo
 */
class FileteDeCerdoEnSalsaDePiloncillo extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Filete de Cerdo en Salsa de Piloncillo';
        $this->autor                      = 'guivaloz';
        $this->fecha                      = '2016-10-01T09:30';
        // El nombre del archivo a crear
        $this->archivo                    = 'filete-de-cerdo-en-salsa-de-piloncillo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Prepara una receta deliciosa con nuestro Platillo Sabio: Filete de cerdo glaseado con piloncillo. Incluye cada uno de los Platillos Sabios en tu recetario de cocina. Encuentra este y otros útiles videos en profecotv.';
        $this->claves                     = 'Platillo Sabio, Filete, Cerdo, Salsa, Piloncillo';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Platillo Sabio';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/PlatilloSabio/FileteDeCerdoEnSalsaDePiloncillo.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = FALSE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase FileteDeCerdoEnSalsaDePiloncillo

?>
