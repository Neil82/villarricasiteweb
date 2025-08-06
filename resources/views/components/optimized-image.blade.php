@php
$imageData = \App\Helpers\ImageHelper::webpImage($src, $lazy ?? true);
@endphp

<picture>
    @if($imageData['webp'])
        <source 
            @if($lazy ?? true) data-srcset="{{ $imageData['webp'] }}" @else srcset="{{ $imageData['webp'] }}" @endif 
            type="image/webp"
        >
    @endif
    <img 
        @if($lazy ?? true) 
            data-src="{{ $imageData['fallback'] }}" 
            loading="lazy"
            class="lazy {{ $class ?? '' }}"
        @else 
            src="{{ $imageData['fallback'] }}" 
            class="{{ $class ?? '' }}"
        @endif
        alt="{{ $alt ?? $imageData['alt'] }}"
        @if(isset($style)) style="{{ $style }}" @endif
        @if(isset($data_index)) data-index="{{ $data_index }}" @endif
    >
</picture>