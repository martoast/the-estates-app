
<?php $variant = $variant ?? 'white'; $h = $class ?? 'h-12'; ?>

<?php if($variant === 'auto'): ?>
    <span class="relative block <?php echo e($h); ?>" role="img" aria-label="The Estates at Real del Mar">
        <img src="<?php echo e(asset('images/the-estates-logo-white.png')); ?>" alt="" aria-hidden="true"
            class="<?php echo e($h); ?> w-auto transition-opacity duration-500"
            :class="navSolid || navOpen ? 'opacity-0' : 'opacity-100'">
        <img src="<?php echo e(asset('images/the-estates-logo-ink.png')); ?>" alt="" aria-hidden="true"
            class="absolute inset-0 <?php echo e($h); ?> w-auto transition-opacity duration-500"
            :class="navSolid || navOpen ? 'opacity-100' : 'opacity-0'">
    </span>
<?php else: ?>
    <img src="<?php echo e(asset('images/the-estates-logo-white.png')); ?>" alt="The Estates at Real del Mar"
        class="<?php echo e($h); ?> w-auto">
<?php endif; ?>
<?php /**PATH /Users/alex/Documents/ricardo/casas-the-estates/app/resources/views/partials/logo.blade.php ENDPATH**/ ?>