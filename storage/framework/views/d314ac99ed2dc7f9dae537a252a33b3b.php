
<?php
    // Row 1 — interiores (casas + departamentos). Row 2 — exteriores & comunidad.
    $rowCasas = [
        ['img' => 'estates-sala-cocina.jpg', 'alt' => 'Sala y comedor hacia la cocina'],
        ['img' => 'estates-sala-exterior.jpg', 'alt' => 'Sala abierta a la terraza'],
        ['img' => 'estates-recamara-principal.jpg', 'alt' => 'Recámara principal'],
        ['img' => 'estates-vista-mar.jpg', 'alt' => 'Jardín y alberca con vista al mar'],
        ['img' => 'estates-casa-vista-mar.jpg', 'alt' => 'Villa tipo con vista al Pacífico'],
        ['img' => 'estates-fachada.jpg', 'alt' => 'Fachada de villa al atardecer'],
    ];
    $rowComunidad = [
        ['img' => 'estates-aerea.jpg', 'alt' => 'Vista aérea de The Estates'],
        ['img' => 'estates-aerea-conjunto.jpg', 'alt' => 'Vista aérea del conjunto'],
        ['img' => 'estates-calle.jpg', 'alt' => 'Calle interior de la comunidad'],
        ['img' => 'estates-caseta-acceso.jpg', 'alt' => 'Acceso y caseta de seguridad'],
        ['img' => 'estates-fachada-alt.jpg', 'alt' => 'Villa tipo de The Estates'],
    ];

    // Flat, ordered list shared by the lightbox slideshow. Each gallery
    // button opens at its index in this list (both marquee copies map to it).
    $casasCount = count($rowCasas);
    $lightbox = array_map(
        fn ($i) => ['src' => asset('images/' . $i['img']), 'alt' => $i['alt']],
        array_merge($rowCasas, $rowComunidad),
    );
?>

<section
    id="galeria"
    class="overflow-hidden bg-ocean-950 py-24 lg:py-32"
    x-data="{
        items: <?php echo \Illuminate\Support\Js::from($lightbox)->toHtml() ?>,
        i: 0,
        open: false,
        openAt(idx) { this.i = idx; this.open = true; },
        next() { this.i = (this.i + 1) % this.items.length; },
        prev() { this.i = (this.i - 1 + this.items.length) % this.items.length; },
    }"
>
    
    <div class="mx-auto mb-14 max-w-7xl px-6 lg:px-10">
        <div class="reveal-group max-w-2xl">
            <p class="eyebrow text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
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
<?php endif; ?></p>
            <h2 class="display mt-6 text-4xl font-light text-sand-50 sm:text-5xl">
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
                     <?php $__env->slot('es', null, []); ?> Espacios que <em>se sienten</em> <?php $__env->endSlot(); ?>
                     <?php $__env->slot('en', null, []); ?> Spaces you <em>can feel</em> <?php $__env->endSlot(); ?>
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
            </h2>
            <p class="mt-6 text-lg leading-relaxed text-sand-100/70">
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
                     <?php $__env->slot('es', null, []); ?> Piedra, madera y luz natural. Interiores amplios de doble altura que se abren al jardín, y exteriores de terraza, alberca y horizonte. Cada villa de The Estates está pensada para vivir entre el paisaje mediterráneo y el mar. <?php $__env->endSlot(); ?>
                     <?php $__env->slot('en', null, []); ?> Stone, wood, and natural light. Generous double-height interiors that open onto the garden, and outdoor spaces of terrace, pool, and horizon. Every villa at The Estates is designed for life between the Mediterranean landscape and the sea. <?php $__env->endSlot(); ?>
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

    
    <div class="marquee-stage space-y-5">
        
        <div class="marquee">
            <div class="marquee-track marquee-track--rtl">
                <?php $__currentLoopData = range(1, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $copy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex" <?php if($copy === 2): ?> aria-hidden="true" <?php endif; ?>>
                        <?php $__currentLoopData = $rowCasas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button
                                type="button"
                                @click="openAt(<?php echo e($idx); ?>)"
                                class="group mr-5 block shrink-0 overflow-hidden rounded-2xl"
                                tabindex="<?php echo e($copy === 2 ? '-1' : '0'); ?>"
                            >
                                <img
                                    src="<?php echo e(asset('images/' . $item['img'])); ?>"
                                    alt="<?php echo e($copy === 1 ? $item['alt'] : ''); ?>"
                                    loading="lazy"
                                    class="h-64 w-auto max-w-none object-cover transition-transform duration-700 group-hover:scale-105 lg:h-80"
                                >
                            </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        
        <div class="marquee">
            <div class="marquee-track marquee-track--ltr">
                <?php $__currentLoopData = range(1, 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $copy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex" <?php if($copy === 2): ?> aria-hidden="true" <?php endif; ?>>
                        <?php $__currentLoopData = $rowComunidad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button
                                type="button"
                                @click="openAt(<?php echo e($casasCount + $idx); ?>)"
                                class="group mr-5 block shrink-0 overflow-hidden rounded-2xl"
                                tabindex="<?php echo e($copy === 2 ? '-1' : '0'); ?>"
                            >
                                <img
                                    src="<?php echo e(asset('images/' . $item['img'])); ?>"
                                    alt="<?php echo e($copy === 1 ? $item['alt'] : ''); ?>"
                                    loading="lazy"
                                    class="h-64 w-auto max-w-none object-cover transition-transform duration-700 group-hover:scale-105 lg:h-80"
                                >
                            </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    
    <div
        x-cloak
        x-show="open"
        x-transition.opacity.duration.300ms
        @keydown.escape.window="open = false"
        @keydown.arrow-right.window="open && next()"
        @keydown.arrow-left.window="open && prev()"
        @click="open = false"
        class="fixed inset-0 z-[60] flex items-center justify-center bg-ocean-950/95 p-6 backdrop-blur-sm"
    >
        
        <button type="button" @click="open = false"
            class="absolute right-5 top-5 z-10 flex h-12 w-12 items-center justify-center rounded-full border border-sand-50/20 text-2xl text-sand-50 transition-colors hover:bg-sand-50/10"
            aria-label="Cerrar">&times;</button>

        
        <button type="button" @click.stop="prev()"
            class="absolute left-4 top-1/2 z-10 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-sand-50/20 text-sand-50 transition-colors hover:bg-sand-50/10 sm:left-8 sm:h-14 sm:w-14"
            aria-label="Anterior">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
        </button>

        
        <button type="button" @click.stop="next()"
            class="absolute right-4 top-1/2 z-10 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-sand-50/20 text-sand-50 transition-colors hover:bg-sand-50/10 sm:right-8 sm:h-14 sm:w-14"
            aria-label="Siguiente">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </button>

        
        <figure @click.stop class="flex max-h-[88vh] max-w-6xl flex-col items-center">
            <img :src="items[i].src" :alt="items[i].alt" class="max-h-[78vh] w-auto rounded-2xl object-contain shadow-2xl">
            <figcaption class="mt-4 flex items-center gap-3 text-sand-200/70">
                <span class="eyebrow text-[0.6rem]" x-text="items[i].alt"></span>
                <span class="text-[0.6rem] text-sand-200/40" x-text="(i + 1) + ' / ' + items.length"></span>
            </figcaption>
        </figure>
    </div>
</section>
<?php /**PATH /Users/alex/Documents/ricardo/casas-the-estates/app/resources/views/partials/galeria.blade.php ENDPATH**/ ?>