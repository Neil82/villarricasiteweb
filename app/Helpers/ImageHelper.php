<?php

namespace App\Helpers;

class ImageHelper
{
    /**
     * Genera la URL de imagen WebP con fallback a formato original
     * 
     * @param string $imagePath Ruta relativa de la imagen desde public/images/
     * @param bool $lazyLoad Si debe usar lazy loading
     * @return array Array con información de la imagen
     */
    public static function webpImage($imagePath, $lazyLoad = true)
    {
        $originalPath = "images/" . $imagePath;
        $pathInfo = pathinfo($imagePath);
        $webpPath = "images/webp/" . $pathInfo['dirname'] . "/" . $pathInfo['filename'] . ".webp";
        
        // Normalizar el path webp (remover ./ si existe)
        $webpPath = str_replace('images/webp/./', 'images/webp/', $webpPath);
        
        // Verificar si existe la versión WebP
        $webpExists = file_exists(public_path($webpPath));
        
        return [
            'webp' => $webpExists ? asset($webpPath) : null,
            'fallback' => asset($originalPath),
            'alt' => $pathInfo['filename'],
            'lazy' => $lazyLoad
        ];
    }
    
    /**
     * Genera el HTML <picture> para imagen responsive con WebP
     * 
     * @param string $imagePath Ruta de la imagen
     * @param string $alt Texto alternativo
     * @param string $classes Clases CSS
     * @param bool $lazyLoad Usar lazy loading
     * @return string HTML del elemento picture
     */
    public static function pictureTag($imagePath, $alt = '', $classes = '', $lazyLoad = true)
    {
        $imageData = self::webpImage($imagePath, $lazyLoad);
        $alt = $alt ?: $imageData['alt'];
        
        $lazyAttr = $lazyLoad ? 'loading="lazy"' : '';
        $srcAttr = $lazyLoad ? 'data-src' : 'src';
        
        $html = '<picture>';
        
        if ($imageData['webp']) {
            $html .= "<source {$srcAttr}=\"{$imageData['webp']}\" type=\"image/webp\">";
        }
        
        $html .= "<img {$srcAttr}=\"{$imageData['fallback']}\" alt=\"{$alt}\" class=\"{$classes}\" {$lazyAttr}>";
        $html .= '</picture>';
        
        return $html;
    }
}