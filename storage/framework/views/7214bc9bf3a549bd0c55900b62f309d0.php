<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name']); ?>
<?php foreach (array_filter((['name']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex items-center">
    <label <?php echo e($attributes->merge(['class' => 'block uppercase tracking-wide text-gray-500 text-sm font-bold mb-2'])); ?>>
        <?php echo e(ucwords($name)); ?> </label>
</div><?php /**PATH /home/linuxbrew/.linuxbrew/etc/php/laravelblog/resources/views/components/form/label.blade.php ENDPATH**/ ?>