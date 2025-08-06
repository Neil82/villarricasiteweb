@php
    $currentUrl = url()->current();
    $pageTitle = $title ?? 'Villarrica Tours S.A. - Transporte de Confianza';
    $pageDescription = $description ?? 'Transporte de personal y turístico a nivel nacional. Seguridad, comodidad y confort garantizados.';
    $encodedUrl = urlencode($currentUrl);
    $encodedTitle = urlencode($pageTitle);
    $encodedDescription = urlencode($pageDescription);
@endphp

<div class="social-share-buttons {{ $class ?? '' }}">
    @if($showLabel ?? true)
        <span class="share-label">{{ $label ?? 'Compartir:' }}</span>
    @endif
    
    <div class="share-buttons-container">
        <!-- Facebook -->
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $encodedUrl }}" 
           target="_blank" 
           rel="noopener noreferrer"
           class="share-btn facebook-share"
           title="Compartir en Facebook">
            <i class="fab fa-facebook-f"></i>
            @if($showText ?? false)<span>Facebook</span>@endif
        </a>
        
        <!-- Twitter/X -->
        <a href="https://twitter.com/intent/tweet?url={{ $encodedUrl }}&text={{ $encodedTitle }}" 
           target="_blank" 
           rel="noopener noreferrer"
           class="share-btn twitter-share"
           title="Compartir en X (Twitter)">
            <i class="fab fa-x-twitter"></i>
            @if($showText ?? false)<span>X</span>@endif
        </a>
        
        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $encodedUrl }}" 
           target="_blank" 
           rel="noopener noreferrer"
           class="share-btn linkedin-share"
           title="Compartir en LinkedIn">
            <i class="fab fa-linkedin-in"></i>
            @if($showText ?? false)<span>LinkedIn</span>@endif
        </a>
        
        <!-- WhatsApp -->
        <a href="https://wa.me/?text={{ $encodedTitle }}%20{{ $encodedUrl }}" 
           target="_blank" 
           rel="noopener noreferrer"
           class="share-btn whatsapp-share"
           title="Compartir por WhatsApp">
            <i class="fab fa-whatsapp"></i>
            @if($showText ?? false)<span>WhatsApp</span>@endif
        </a>
        
        <!-- Email -->
        <a href="mailto:?subject={{ $encodedTitle }}&body={{ $encodedDescription }}%0A%0A{{ $encodedUrl }}" 
           class="share-btn email-share"
           title="Compartir por Email">
            <i class="fas fa-envelope"></i>
            @if($showText ?? false)<span>Email</span>@endif
        </a>
        
        <!-- Copy Link -->
        <button type="button" 
                class="share-btn copy-link-btn"
                data-url="{{ $currentUrl }}"
                title="Copiar enlace">
            <i class="fas fa-link"></i>
            @if($showText ?? false)<span>Copiar</span>@endif
        </button>
    </div>
</div>