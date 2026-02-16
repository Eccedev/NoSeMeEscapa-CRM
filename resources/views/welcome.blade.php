<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'No se me escapa') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap"
        rel="stylesheet">

    <!-- PWA -->
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#065f46">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/png" href="{{ asset('crm_logo_pwa.png') }}">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        .font-serif {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="antialiased text-slate-800 bg-[#FDFBF7]">

    <!-- Navbar -->
    <nav class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto">
        <div class="text-2xl font-bold text-slate-900 font-serif tracking-tight">
            NoSeMe<br>Escapa
        </div>
        <div class="flex items-center gap-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/admin') }}"
                        class="font-medium text-slate-600 hover:text-slate-900 transition">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="px-5 py-2 rounded-full bg-emerald-700 text-white font-medium hover:bg-emerald-800 transition shadow-lg shadow-emerald-900/20">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-5 py-2 rounded-full bg-slate-900 text-white font-medium hover:bg-slate-800 transition shadow-lg shadow-slate-900/20">
                            Sign up
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative px-6 pt-12 pb-24 lg:pt-24 lg:pb-32 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="max-w-2xl">
                <h1 class="text-5xl lg:text-7xl font-bold text-slate-900 leading-[1.1] mb-6">
                    Clientes que vuelven porque <span class="italic text-emerald-700">nunca los olvidas.</span>
                </h1>
                <p class="text-xl text-slate-600 mb-8 leading-relaxed">
                    El sistema de seguimiento humano para profesionales que no tienen tiempo de usar un CRM complejo.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('register') }}"
                        class="px-8 py-4 rounded-full bg-emerald-700 text-white text-lg font-semibold hover:bg-emerald-800 transition shadow-xl shadow-emerald-900/20 text-center">
                        Empezar a cuidar a mis clientes
                        <span class="block text-xs font-normal opacity-90 mt-1">(Prueba gratis 7 días)</span>
                    </a>
                </div>
                <div class="mt-8 flex items-center gap-4 text-sm text-slate-500">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-[#FDFBF7]"
                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=64&h=64"
                            alt="User">
                        <img class="w-8 h-8 rounded-full border-2 border-[#FDFBF7]"
                            src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=64&h=64"
                            alt="User">
                        <img class="w-8 h-8 rounded-full border-2 border-[#FDFBF7]"
                            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=64&h=64"
                            alt="User">
                    </div>
                    <p>Más de 100 profesionales ya confían.</p>
                </div>
            </div>
            <div
                class="relative lg:h-[600px] rounded-2xl overflow-hidden shadow-2xl rotate-1 hover:rotate-0 transition duration-700 ease-out">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent z-10"></div>
                <!-- Human-centric professional image -->
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                    alt="Professional smiling with client" class="w-full h-full object-cover">
            </div>
        </div>
    </header>

    <!-- Pain Points (Agitación) -->
    <section class="bg-white py-24 border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-slate-900 mb-16 max-w-2xl mx-auto">
                ¿Por qué es tan difícil mantener el contacto humano?
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="p-8 rounded-2xl bg-[#FDFBF7] border border-slate-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-6 text-2xl">❄️
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">¿Se te enfrían los leads?</h3>
                    <p class="text-slate-600">Esa persona que preguntó interesada y nunca más volviste a contactar
                        porque "se te pasó".</p>
                </div>
                <!-- Card 2 -->
                <div class="p-8 rounded-2xl bg-[#FDFBF7] border border-slate-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6 text-2xl">🧠
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">¿Olvidas sus detalles?</h3>
                    <p class="text-slate-600">No recordar que su hija empezaba el fútbol o que prefería el café frío.
                        Los detalles enamoran.</p>
                </div>
                <!-- Card 3 -->
                <div class="p-8 rounded-2xl bg-[#FDFBF7] border border-slate-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center mb-6 text-2xl">🌪️
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">¿Falta de sistema?</h3>
                    <p class="text-slate-600">Depender de tu memoria, de notas adhesivas perdidas o de chats
                        interminables en WhatsApp.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-24 max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-emerald-700 font-semibold tracking-wider text-sm uppercase">La Solución</span>
            <h2 class="text-4xl font-bold text-slate-900 mt-2">Simplicidad Estructurada</h2>
        </div>

        <div class="space-y-24">
            <!-- Feature 1 -->
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div
                    class="order-2 lg:order-1 relative rounded-xl overflow-hidden shadow-2xl border border-slate-200 bg-white p-2">
                    <img src="{{ asset('img-dashboard.JPG') }}" alt="Dashboard Screenshot" class="w-full rounded-lg">
                </div>
                <div class="order-1 lg:order-2">
                    <h3 class="text-3xl font-bold text-slate-900 mb-4">El Dashboard de Hoy</h3>
                    <p class="text-lg text-slate-600 mb-6">
                        Solo lo que importa hoy: quién cumple años y a quién toca saludar. Sin gráficas complejas que
                        nadie entiende. Entras, miras, actúas.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-slate-700">
                            <span class="text-emerald-600">✓</span> Widget de Proximidad (a quién llamar).
                        </li>
                        <li class="flex items-center gap-3 text-slate-700">
                            <span class="text-emerald-600">✓</span> Widget de Empatía (cumpleaños).
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-1">
                    <h3 class="text-3xl font-bold text-slate-900 mb-4">El CRUD Humano</h3>
                    <p class="text-lg text-slate-600 mb-6">
                        Un solo campo para lo importante: "Detalle Humano". Registra lo que hace única a esa persona.
                        Además, tus datos están encriptados y aislados.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-slate-700">
                            <span class="text-emerald-600">✓</span> Datos encriptados militarmente.
                        </li>
                        <li class="flex items-center gap-3 text-slate-700">
                            <span class="text-emerald-600">✓</span> Base de datos aislada por usuario.
                        </li>
                    </ul>
                </div>
                <div
                    class="order-2 relative rounded-xl overflow-hidden shadow-2xl border border-slate-200 bg-white p-2">
                    <img src="{{ asset('img-clients.JPG') }}" alt="Client Detail Screenshot" class="w-full rounded-lg">
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div
                    class="order-2 lg:order-1 relative rounded-xl overflow-hidden shadow-2xl border border-slate-200 bg-white p-2">
                    <img src="{{ asset('img-whatssap.JPG') }}" alt="WhatsApp Logic Screenshot"
                        class="w-full rounded-lg">
                </div>
                <div class="order-1 lg:order-2">
                    <h3 class="text-3xl font-bold text-slate-900 mb-4">El Botón Mágico</h3>
                    <p class="text-lg text-slate-600 mb-6">
                        No copies y pegues números. Un clic, WhatsApp abierto y mensaje listo para enviar. Recupera el
                        tiempo perdido en operativa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof (Quote) -->
    <section class="bg-emerald-900 py-24 text-center px-6">
        <div class="max-w-4xl mx-auto">
            <svg class="w-12 h-12 text-emerald-500 mx-auto mb-8 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M14.017 21L14.017 18C14.017 16.0547 15.592 14.4793 17.5373 14.4793H19.9653V9.52277C19.9653 8.08629 18.2568 7.37351 17.228 8.35649L17.228 8.35649C16.5937 8.95924 15.6987 8.9515 15.011 8.42306L14.9387 8.36729C13.22 7.04573 14.1611 4.28628 16.3262 4.27989L16.3262 4.27989C18.9663 4.27187 21.1118 6.40268 21.1165 9.04365L21.1165 19.1678C21.1165 20.1798 20.2963 21 19.2843 21H14.017ZM8.61633 21L8.61633 18C8.61633 16.0547 10.1914 14.4793 12.1367 14.4793H14.5647V9.52277C14.5647 8.08629 12.8561 7.37351 11.8273 8.35649L11.8273 8.35649C11.1931 8.95924 10.298 8.9515 9.61033 8.42306L9.538 8.36729C7.81938 7.04573 8.76046 4.28628 10.9256 4.27989L10.9256 4.27989C13.5657 4.27187 15.7112 6.40268 15.7159 9.04365L15.7159 19.1678C15.7159 20.1798 14.8957 21 13.8837 21H8.61633Z" />
            </svg>
            <blockquote class="text-2xl md:text-3xl font-serif text-emerald-100 leading-relaxed italic mb-8">
                "Diseñado para profesionales de servicios que creen que la tecnología debería unir personas, no
                separarlas."
            </blockquote>
            <div class="text-emerald-400 font-semibold tracking-widest uppercase text-sm">Manifiesto No Se Me Escapa
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-8">
            <div class="col-span-2">
                <div class="text-white text-xl font-bold font-serif mb-4">No se me escapa.</div>
                <p class="max-w-xs text-sm">
                    CRM minimalista B2B SaaS. <br>
                    Hecho con ❤️ en Laravel y Filament.
                </p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Producto</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Características</a></li>
                    <li><a href="#" class="hover:text-white transition">Precios</a></li>
                    <li><a href="#" class="hover:text-white transition">Seguridad</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Legal</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Privacidad</a></li>
                    <li><a href="#" class="hover:text-white transition">Términos</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 mt-12 pt-8 border-t border-slate-800 text-center text-xs">
            &copy; {{ date('Y') }} No se me escapa Inc. Todos los derechos reservados.
        </div>
    </footer>

    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js');
            });
        }
    </script>
</body>

</html>