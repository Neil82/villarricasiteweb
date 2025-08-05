#!/bin/bash

# Script para convertir imágenes a formato WebP
echo "🚀 Iniciando conversión de imágenes a WebP..."

# Crear directorio para imágenes WebP si no existe
mkdir -p public/images/webp

# Función para convertir archivos
convert_to_webp() {
    local source_dir="$1"
    local target_dir="public/images/webp${source_dir#public/images}"
    
    echo "📁 Procesando directorio: $source_dir"
    mkdir -p "$target_dir"
    
    # Convertir JPG y JPEG
    find "$source_dir" -maxdepth 1 -type f \( -iname "*.jpg" -o -iname "*.jpeg" \) | while read -r file; do
        filename=$(basename "$file")
        name="${filename%.*}"
        target_file="$target_dir/$name.webp"
        
        if [ ! -f "$target_file" ]; then
            echo "🔄 Convirtiendo: $filename -> $name.webp"
            convert "$file" -quality 85 -define webp:lossless=false "$target_file"
        else
            echo "✅ Ya existe: $name.webp"
        fi
    done
    
    # Convertir PNG
    find "$source_dir" -maxdepth 1 -type f -iname "*.png" | while read -r file; do
        filename=$(basename "$file")
        name="${filename%.*}"
        target_file="$target_dir/$name.webp"
        
        if [ ! -f "$target_file" ]; then
            echo "🔄 Convirtiendo: $filename -> $name.webp"
            convert "$file" -quality 90 -define webp:lossless=false "$target_file"
        else
            echo "✅ Ya existe: $name.webp"
        fi
    done
}

# Convertir imágenes en subdirectorios
for dir in public/images/*/; do
    if [ -d "$dir" ]; then
        convert_to_webp "$dir"
    fi
done

# Convertir imágenes en el directorio raíz
convert_to_webp "public/images"

echo "✨ Conversión completada!"
echo "📊 Resumen de archivos WebP creados:"
find public/images/webp -name "*.webp" | wc -l