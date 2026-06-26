<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <script>
        (function () {
            try {
                var l = localStorage.getItem('rdm_lang') || 'es';
                document.documentElement.setAttribute('data-lang', l);
                document.documentElement.setAttribute('lang', l);
            } catch (e) {
                document.documentElement.setAttribute('data-lang', 'es');
            }
        })();
    </script>

    
    <script>
        document.documentElement.classList.add('is-loading');
        setTimeout(function () { document.documentElement.classList.remove('is-loading'); }, 14000);
    </script>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">

    <?php $siteUrl = rtrim(config('app.url'), '/'); ?>
    <title><?php echo e($title ?? 'The Estates · Real del Mar — Villas mediterráneas frente al Pacífico'); ?></title>
    <meta name="description" content="<?php echo e($description ?? 'The Estates es una comunidad privada de villas mediterráneas dentro de Real del Mar, Tijuana. Casas de 2, 3 y 4 recámaras con vistas al mar, desde 1.16M USD.'); ?>">
    <link rel="canonical" href="<?php echo e($siteUrl); ?>/">

    
    <meta property="og:site_name" content="The Estates · Real del Mar">
    <meta property="og:title" content="The Estates · Real del Mar — Villas mediterráneas frente al Pacífico">
    <meta property="og:description" content="Villas privadas de 2, 3 y 4 recámaras con vistas al mar dentro de Real del Mar, Tijuana. Arquitectura mediterránea, desde 1.16M USD.">
    <meta property="og:image" content="<?php echo e($siteUrl); ?>/images/og-estates.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:url" content="<?php echo e($siteUrl); ?>/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_MX">

    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="The Estates · Real del Mar — Villas mediterráneas frente al Pacífico">
    <meta name="twitter:description" content="Villas privadas de 2, 3 y 4 recámaras con vistas al mar dentro de Real del Mar, Tijuana. Arquitectura mediterránea, desde 1.16M USD.">
    <meta name="twitter:image" content="<?php echo e($siteUrl); ?>/images/og-estates.jpg">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body
    x-data="{ navSolid: false, navOpen: false }"
    @scroll.window.passive="navSolid = window.scrollY > 40"
    :class="navOpen ? 'overflow-hidden xl:overflow-auto' : ''"
>

    
    <div id="preloader" class="fixed inset-0 z-[100] flex items-center justify-center bg-ocean-950">
        <div class="preloader-mark flex flex-col items-center">
            <?php echo $__env->make('partials.logo', ['variant' => 'white', 'class' => 'h-16 sm:h-20'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="mt-10 h-px w-44 overflow-hidden rounded-full bg-sand-50/15">
                <div id="preloader-bar" class="h-full w-0 rounded-full bg-terra-400 transition-[width] duration-300 ease-out"></div>
            </div>
            <p id="preloader-pct" class="eyebrow mt-4 text-[0.55rem] text-sand-200/50">0%</p>
        </div>
    </div>

    <?php
        $navLinks = [
            ['es' => 'Residencias', 'en' => 'Residences', 'href' => '#residencias'],
            ['es' => 'Disponibilidad', 'en' => 'Availability', 'href' => '#disponibilidad'],
            ['es' => 'Real del Mar', 'en' => 'Real del Mar', 'href' => '#amenidades'],
            ['es' => 'Ubicación', 'en' => 'Location', 'href' => '#ubicacion'],
        ];
    ?>

    
    <header
        class="fixed inset-x-0 top-0 z-50 transition-all duration-500"
        :class="navSolid || navOpen ? 'bg-sand-50/95 backdrop-blur-sm shadow-[0_1px_0_0_rgba(35,32,25,0.08)]' : 'bg-transparent'"
    >
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-10">
            
            <a
                href="#"
                class="group relative z-50 flex items-center gap-3 transition-colors duration-500"
                :class="navSolid || navOpen ? 'text-ink' : 'text-sand-50'"
                aria-label="The Estates — inicio"
            >
                <?php echo $__env->make('partials.logo', ['variant' => 'auto', 'class' => 'h-11 lg:h-14'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </a>

            
            <div class="hidden items-center gap-7 xl:flex">
                <?php $__currentLoopData = $navLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a
                        href="<?php echo e($item['href']); ?>"
                        class="eyebrow whitespace-nowrap text-[0.65rem] transition-colors duration-300"
                        :class="navSolid ? 'text-ink-soft hover:text-terra-500' : 'text-sand-100 hover:text-white'"
                    ><span class="lang-es"><?php echo e($item['es']); ?></span><span class="lang-en"><?php echo e($item['en']); ?></span></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <div class="flex items-center gap-1.5">
                    <button @click="$store.lang.set('es')"
                        class="eyebrow text-[0.65rem] transition-colors"
                        :class="$store.lang.current === 'es' ? (navSolid ? 'text-terra-500' : 'text-white') : (navSolid ? 'text-ink-soft/40 hover:text-ink-soft' : 'text-sand-100/50 hover:text-sand-100')"
                    >ES</button>
                    <span class="text-[0.65rem]" :class="navSolid ? 'text-ink/20' : 'text-sand-100/30'">/</span>
                    <button @click="$store.lang.set('en')"
                        class="eyebrow text-[0.65rem] transition-colors"
                        :class="$store.lang.current === 'en' ? (navSolid ? 'text-terra-500' : 'text-white') : (navSolid ? 'text-ink-soft/40 hover:text-ink-soft' : 'text-sand-100/50 hover:text-sand-100')"
                    >EN</button>
                </div>

                <a
                    href="#contacto"
                    class="eyebrow whitespace-nowrap rounded-full px-5 py-2.5 text-[0.65rem] text-sand-50 transition-all duration-300 bg-terra-500 hover:bg-terra-600"
                ><span class="lang-es">Agendar visita</span><span class="lang-en">Schedule a visit</span></a>
            </div>

            
            <button
                class="relative z-50 flex h-10 w-10 flex-col items-center justify-center gap-1.5 xl:hidden"
                @click="navOpen = !navOpen"
                aria-label="Menú"
            >
                <span class="block h-px w-6 transition-all duration-300"
                    :class="[navOpen ? 'translate-y-[3.5px] rotate-45' : '', navSolid || navOpen ? 'bg-ink' : 'bg-sand-50']"></span>
                <span class="block h-px w-6 transition-all duration-300"
                    :class="[navOpen ? '-translate-y-[3.5px] -rotate-45' : '', navSolid || navOpen ? 'bg-ink' : 'bg-sand-50']"></span>
            </button>
        </nav>

        
        <div
            x-show="navOpen"
            x-collapse.duration.400ms
            class="xl:hidden"
        >
            <div class="space-y-1 border-t border-ink/5 bg-sand-50 px-6 pb-8 pt-4">
                <?php $__currentLoopData = $navLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($item['href']); ?>" @click="navOpen = false"
                        class="display block py-3 text-2xl text-ink transition-colors hover:text-terra-500"><span class="lang-es"><?php echo e($item['es']); ?></span><span class="lang-en"><?php echo e($item['en']); ?></span></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="mt-4 flex items-center gap-4">
                    <a href="#contacto" @click="navOpen = false"
                        class="eyebrow inline-block rounded-full bg-terra-500 px-6 py-3 text-[0.65rem] text-sand-50"><span class="lang-es">Agendar visita</span><span class="lang-en">Schedule a visit</span></a>
                    
                    <button @click="$store.lang.toggle()" class="eyebrow text-[0.65rem] text-ink-soft underline-offset-4 hover:underline">
                        <span class="lang-es">English</span><span class="lang-en">Español</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <?php echo e($slot ?? ''); ?>

        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <footer class="bg-ocean-950 text-sand-200">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-10">
            <div class="grid gap-12 md:grid-cols-3">
                <div class="text-sand-50">
                    <?php echo $__env->make('partials.logo', ['variant' => 'white', 'class' => 'h-14'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <p class="mt-6 max-w-xs text-sm leading-relaxed text-sand-200/70">
                        <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                             <?php $__env->slot('es', null, []); ?> Una comunidad privada de villas mediterráneas dentro de Real del Mar, Tijuana — frente al Pacífico. <?php $__env->endSlot(); ?>
                             <?php $__env->slot('en', null, []); ?> A private community of Mediterranean villas within Real del Mar, Tijuana — facing the Pacific. <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
                    </p>
                </div>
                <div>
                    <p class="eyebrow mb-5 text-[0.6rem] text-ocean-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> El desarrollo <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> The development <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#esencia" class="transition-colors hover:text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Esencia <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Essence <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></a></li>
                        <li><a href="#residencias" class="transition-colors hover:text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Residencias <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Residences <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></a></li>
                        <li><a href="#disponibilidad" class="transition-colors hover:text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Disponibilidad <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Availability <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></a></li>
                        <li><a href="#amenidades" class="transition-colors hover:text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Amenidades <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Amenities <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></a></li>
                        <li><a href="#galeria" class="transition-colors hover:text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Galería <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Gallery <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></a></li>
                        <li><a href="#ubicacion" class="transition-colors hover:text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Ubicación <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Location <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></a></li>
                    </ul>
                </div>
                <div>
                    <p class="eyebrow mb-5 text-[0.6rem] text-ocean-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Contacto <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Contact <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#contacto" class="transition-colors hover:text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Agendar visita <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Schedule a visit <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></a></li>
                        <li><a href="https://wa.me/526641158106" target="_blank" rel="noopener" class="transition-colors hover:text-terra-300">WhatsApp · +52 664 115 8106</a></li>
                        <li><a href="mailto:ventas@cityinmobiliaria.mx" class="transition-colors hover:text-terra-300">ventas@cityinmobiliaria.mx</a></li>
                        <li><a href="#disponibilidad" class="transition-colors hover:text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Precios y lotes <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Pricing & lots <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-14 border-t border-sand-50/10 pt-8 text-xs leading-relaxed text-sand-200/50">
                <p>
                    <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('es', null, []); ?> © <?php echo e(date('Y')); ?> The Estates · Real del Mar. Todos los derechos reservados. · Aviso de Privacidad <?php $__env->endSlot(); ?>
                         <?php $__env->slot('en', null, []); ?> © <?php echo e(date('Y')); ?> The Estates · Real del Mar. All rights reserved. · Privacy Notice <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
                </p>
                <p class="mt-2">
                    <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('es', null, []); ?> Las imágenes mostradas son representaciones ilustrativas del proyecto y pueden variar respecto al producto final. La información de tipologías, acabados y financiamiento está sujeta a cambios sin previo aviso. <?php $__env->endSlot(); ?>
                         <?php $__env->slot('en', null, []); ?> The images shown are illustrative representations of the project and may differ from the final product. Information on layouts, finishes, and financing is subject to change without notice. <?php $__env->endSlot(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
                </p>
            </div>
        </div>
    </footer>

    
    <a
        :href="$store.lang.current === 'en'
            ? 'https://wa.me/526641158106?text=Hi%2C%20I%27m%20interested%20in%20The%20Estates%20at%20Real%20del%20Mar.%20Could%20you%20send%20me%20more%20information%3F'
            : 'https://wa.me/526641158106?text=Hola%2C%20me%20interesa%20The%20Estates%20en%20Real%20del%20Mar%2C%20%C2%BFme%20pueden%20enviar%20informaci%C3%B3n%3F'"
        href="https://wa.me/526641158106?text=Hola%2C%20me%20interesa%20The%20Estates%20en%20Real%20del%20Mar%2C%20%C2%BFme%20pueden%20enviar%20informaci%C3%B3n%3F"
        target="_blank" rel="noopener"
        aria-label="WhatsApp"
        class="fixed bottom-6 right-6 z-40 flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] shadow-lg shadow-ink/20 transition-transform duration-300 hover:scale-110"
    >
        <svg viewBox="0 0 24 24" class="h-7 w-7 fill-white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.1-.198.05-.371-.025-.52-.074-.149-.668-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>

</body>
</html>
<?php /**PATH /Users/alex/Documents/ricardo/casas-the-estates/app/resources/views/layouts/app.blade.php ENDPATH**/ ?>