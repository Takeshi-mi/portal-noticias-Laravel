<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Página de Noticias') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-200">
                    <h1 class="text-2xl font-semibold">Noticias</h1>
                    @if ($noticias->isEmpty())
                        <p>Não há noticias disponiveís no momento.</p>
                    @else
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <div class="br-carousel" data-circular="true" aria-label="Carrossel de Exemplo"
                                    aria-roledescription="carousel">
                                    <div class="carousel-button">
                                        <button class="br-button carousel-btn-prev terciary circle" type="button"
                                            aria-label="Anterior"><i class="fas fa-chevron-left" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="carousel-stage">
                                        <div class="carousel-page" active="active" role="group"
                                            aria-roledescription="slide" aria-live="polite">
                                            <div class="carousel-content bg-blue-10">
                                                <div class="h3 carousel-title">Página 1</div>
                                            </div>
                                        </div>
                                        <div class="carousel-page" role="group" aria-roledescription="slide"
                                            aria-live="polite">
                                            <div class="carousel-content bg-violet-warm-10">
                                                <div class="h3 carousel-title">Página 2</div>
                                            </div>
                                        </div>
                                        <div class="carousel-page" role="group" aria-roledescription="slide"
                                            aria-live="polite">
                                            <div class="carousel-content bg-yellow-5">
                                                <div class="h3 carousel-title">Página 3</div>
                                            </div>
                                        </div>
                                        <div class="carousel-page" role="group" aria-roledescription="slide"
                                            aria-live="polite">
                                            <div class="carousel-content bg-green-cool-10">
                                                <div class="h3 carousel-title">Página 4</div>
                                            </div>
                                        </div>
                                        <div class="carousel-page" role="group" aria-roledescription="slide"
                                            aria-live="polite">
                                            <div class="carousel-content bg-orange-vivid-10">
                                                <div class="h3 carousel-title">Página 5</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-button">
                                        <button class="br-button carousel-btn-next terciary circle" type="button"
                                            aria-label="Próximo"><i class="fas fa-chevron-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="carousel-step">
                                        <nav class="br-step" data-initial="1" data-type="simple" role="none">
                                            <div class="step-progress" role="listbox" aria-orientation="horizontal"
                                                aria-label="Lista de Opções">
                                                <button class="step-progress-btn" role="option" aria-posinset="1"
                                                    aria-setsize="5" type="button"><span class="step-info">Exemplo de
                                                        Rótulo 1</span></button>
                                                <button class="step-progress-btn" role="option" aria-posinset="2"
                                                    aria-setsize="5" type="button"><span class="step-info">Exemplo de
                                                        Rótulo 2</span></button>
                                                <button class="step-progress-btn" role="option" aria-posinset="3"
                                                    aria-setsize="5" type="button"><span class="step-info">Exemplo de
                                                        Rótulo 3</span></button>
                                                <button class="step-progress-btn" role="option" aria-posinset="4"
                                                    aria-setsize="5" type="button"><span class="step-info">Exemplo de
                                                        Rótulo 4</span></button>
                                                <button class="step-progress-btn" role="option" aria-posinset="5"
                                                    aria-setsize="5" type="button"><span class="step-info">Exemplo de
                                                        Rótulo 5</span></button>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class ="row">
                            @foreach ($noticias as $noticia)
                                <div class="col-md-4">
                                    <div class="card">
                                        @if ($noticia->url)
                                            <img src="{{ asset($noticia->url) }}" alt="{{ $noticia->titulo }}"
                                                class="">
                                        @endif
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $noticia->titulo }}</h5>
                                            <p class="card-text">{{ $noticia->descricao }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
