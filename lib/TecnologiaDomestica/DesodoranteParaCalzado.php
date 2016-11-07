<?php
/**
 * Revista del Consumidor - DesodoranteParaCalzado
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

namespace TecnologiaDomestica;

/**
 * Clase DesodoranteParaCalzado
 */
class DesodoranteParaCalzado extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Desodorante para Calzado';
        $this->autor                      = 'guivaloz';
        $this->fecha                      = '2016-10-02T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'desodorante-para-calzado';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '¿Quieres eliminar el mal olor de los zapatos? A continuación, en la Tecnología Domestica Profeco aprenderás a preparar tu propio desodorante sin gastar mucho dinero. Encuentra este y otros útiles videos en profecotv.';
        $this->claves                     = 'Tecnologia Domestica, Calzado, Desodorante';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Tecnología Doméstica';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/TecnologiaDomestica/DesodoranteParaCalzado.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = FALSE;
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase DesodoranteParaCalzado

?>
