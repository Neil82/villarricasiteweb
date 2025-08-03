@php
    $currentRoute = request()->route()->getName();
    $breadcrumbs = [];
    
    switch ($currentRoute) {
        case 'home':
            $breadcrumbs = [
                ['title' => 'Inicio', 'url' => route('home'), 'active' => true]
            ];
            break;
        case 'quienes-somos':
            $breadcrumbs = [
                ['title' => 'Inicio', 'url' => route('home'), 'active' => false],
                ['title' => 'Quienes Somos', 'url' => route('quienes-somos'), 'active' => true]
            ];
            break;
        case 'servicios':
            $breadcrumbs = [
                ['title' => 'Inicio', 'url' => route('home'), 'active' => false],
                ['title' => 'Servicios', 'url' => route('servicios'), 'active' => true]
            ];
            break;
        case 'nuestra-flota':
            $breadcrumbs = [
                ['title' => 'Inicio', 'url' => route('home'), 'active' => false],
                ['title' => 'Nuestra Flota', 'url' => route('nuestra-flota'), 'active' => true]
            ];
            break;
        case 'contacto':
            $breadcrumbs = [
                ['title' => 'Inicio', 'url' => route('home'), 'active' => false],
                ['title' => 'Contacto', 'url' => route('contacto'), 'active' => true]
            ];
            break;
        default:
            $breadcrumbs = [
                ['title' => 'Inicio', 'url' => route('home'), 'active' => true]
            ];
    }
@endphp

@if(count($breadcrumbs) > 1)
<section class="breadcrumb-section py-3 bg-light">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                @foreach($breadcrumbs as $breadcrumb)
                    @if($breadcrumb['active'])
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $breadcrumb['title'] }}
                        </li>
                    @else
                        <li class="breadcrumb-item">
                            <a href="{{ $breadcrumb['url'] }}" class="text-decoration-none">
                                {{ $breadcrumb['title'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>
</section>
@endif 