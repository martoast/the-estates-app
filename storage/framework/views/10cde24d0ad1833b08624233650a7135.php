
<?php
    // Stage 1 figures from the client dossier (DISPONIBILIDAD CASAS THE ESTATES).
    $stats = [
        ['n' => '22', 'es' => 'Lotes · Etapa 1', 'en' => 'Lots · Stage 1', 'tone' => 'sand'],
        ['n' => '21', 'es' => 'Disponibles',     'en' => 'Available',      'tone' => 'terra'],
        ['n' => '2',  'es' => 'Apartados',        'en' => 'Reserved',       'tone' => 'olive'],
    ];
?>

<section id="disponibilidad" class="bg-ocean-950 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-10">
        
        <div class="reveal-group mx-auto max-w-2xl text-center">
            <p class="eyebrow text-terra-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
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
<?php endif; ?></p>
            <h2 class="display mt-6 text-5xl font-light text-sand-50 sm:text-6xl">
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
                     <?php $__env->slot('es', null, []); ?> Etapa 1, lista para <em>elegir</em> <?php $__env->endSlot(); ?>
                     <?php $__env->slot('en', null, []); ?> Stage 1, ready to <em>choose</em> <?php $__env->endSlot(); ?>
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
                     <?php $__env->slot('es', null, []); ?> Veintidós villas sobre amplios lotes en la primera etapa. Cada lote se cotiza por su superficie; te compartimos la lista completa de precios a solicitud. <?php $__env->endSlot(); ?>
                     <?php $__env->slot('en', null, []); ?> Twenty-two villas on generous lots in the first stage. Each lot is priced by its area; we'll share the full price list on request. <?php $__env->endSlot(); ?>
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

        <div class="mt-14 grid items-center gap-10 lg:grid-cols-5 lg:gap-14">
            
            <div class="reveal lg:col-span-3">
                <div class="overflow-hidden rounded-3xl border border-sand-50/12 bg-sand-50/[0.03] p-3 backdrop-blur-sm sm:p-5">
                    <img src="<?php echo e(asset('images/estates-masterplan.jpg')); ?>"
                        alt="Plano maestro de The Estates — distribución de lotes de la Etapa 1"
                        loading="lazy"
                        class="w-full rounded-2xl bg-sand-50/5 object-contain">
                </div>
                <p class="eyebrow mt-4 text-center text-[0.55rem] text-sand-200/40">
                    <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Plano maestro · Etapa 1 <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Master plan · Stage 1 <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
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

            
            <div class="reveal-group lg:col-span-2">
                
                <div class="grid grid-cols-3 gap-px overflow-hidden rounded-2xl border border-sand-50/15 bg-sand-50/10">
                    <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-ocean-900/60 px-4 py-7 text-center">
                            <p class="display text-4xl font-light leading-none <?php echo e($s['tone'] === 'terra' ? 'text-terra-300' : ($s['tone'] === 'olive' ? 'text-olive-300' : 'text-sand-50')); ?>"><?php echo e($s['n']); ?></p>
                            <p class="eyebrow mt-2 text-[0.5rem] text-sand-200/60"><span class="lang-es"><?php echo e($s['es']); ?></span><span class="lang-en"><?php echo e($s['en']); ?></span></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <div class="mt-6 rounded-2xl border border-sand-50/15 bg-ocean-900/60 p-8 backdrop-blur-sm lg:p-10">
                    <p class="eyebrow text-[0.55rem] text-ocean-300"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Precios <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Pricing <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></p>
                    <p class="display mt-3 text-4xl font-light text-sand-50">
                        <span class="text-lg text-sand-200/60"><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Desde <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> From <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></span>
                        $1,163,468 <span class="text-xl text-sand-200/60">USD</span>
                    </p>
                    <ul class="mt-7 space-y-3 border-t border-sand-50/10 pt-6 text-sm text-sand-100/80">
                        <li class="flex items-center gap-3"><span class="h-1 w-1 rounded-full bg-terra-300"></span><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Prototipos de 2, 3 y 4 recámaras <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> 2, 3 and 4-bedroom prototypes <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></li>
                        <li class="flex items-center gap-3"><span class="h-1 w-1 rounded-full bg-terra-300"></span><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Lotes de ~1,730 a 3,040 m² <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Lots from ~1,730 to 3,040 m² <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></li>
                        <li class="flex items-center gap-3"><span class="h-1 w-1 rounded-full bg-terra-300"></span><?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Precio final según lote elegido <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Final price by chosen lot <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?></li>
                    </ul>
                    <a href="#contacto"
                        class="eyebrow mt-8 inline-flex w-full items-center justify-center rounded-full bg-terra-500 px-6 py-4 text-[0.65rem] text-sand-50 transition-all duration-300 hover:bg-terra-600">
                        <?php if (isset($component)) { $__componentOriginal618076cb2e02e8026719e8ebca35f227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal618076cb2e02e8026719e8ebca35f227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('t'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php $__env->slot('es', null, []); ?> Solicitar lista de precios <?php $__env->endSlot(); ?> <?php $__env->slot('en', null, []); ?> Request the price list <?php $__env->endSlot(); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $attributes = $__attributesOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__attributesOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal618076cb2e02e8026719e8ebca35f227)): ?>
<?php $component = $__componentOriginal618076cb2e02e8026719e8ebca35f227; ?>
<?php unset($__componentOriginal618076cb2e02e8026719e8ebca35f227); ?>
<?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/alex/Documents/ricardo/casas-the-estates/app/resources/views/partials/disponibilidad.blade.php ENDPATH**/ ?>