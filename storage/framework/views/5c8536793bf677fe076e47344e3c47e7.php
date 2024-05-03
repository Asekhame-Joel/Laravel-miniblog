<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['post']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<article
<?php echo e($attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])); ?>>
<div class="py-6 px-5">
    <div>
        <img src="../images/illustration-4.png" alt="Blog Post illustration" class="rounded-xl">
        

    </div>
    <div class="mt-8 flex flex-col justify-between">
        <header>
            <div class="space-x-2">
                <?php if (isset($component)) { $__componentOriginal63d366aae0c3c678a5fb08eef338605d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal63d366aae0c3c678a5fb08eef338605d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-button','data' => ['category' => $post->category]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('category-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['category' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->category)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal63d366aae0c3c678a5fb08eef338605d)): ?>
<?php $attributes = $__attributesOriginal63d366aae0c3c678a5fb08eef338605d; ?>
<?php unset($__attributesOriginal63d366aae0c3c678a5fb08eef338605d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal63d366aae0c3c678a5fb08eef338605d)): ?>
<?php $component = $__componentOriginal63d366aae0c3c678a5fb08eef338605d; ?>
<?php unset($__componentOriginal63d366aae0c3c678a5fb08eef338605d); ?>
<?php endif; ?>
            </div>

            <div class="mt-4">
                <h1 class="text-3xl">
                    <a href="/posts/<?php echo e($post->slug); ?>"></a>
                    <?php echo e($post->title); ?>


                </h1>

                <span class="mt-2 block text-gray-400 text-xs">
                    Published <time><?php echo e($post->created_at->diffForHumans()); ?></time>
                </span>
            </div>
        </header>

        <div class="text-sm mt-4 space-y-4">
            <p>
            <?php echo $post->excerpts; ?>

            </p>
        </div>

        <footer class="flex justify-between items-center mt-8">
            <div class="flex items-center text-sm">
                <img src="../images/lary-avatar.svg" alt="Lary avatar">
                <div class="ml-3">
                    <h5 class="font-bold">
                       <a href="/?author=<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a> </h5>
                </div>
            </div>

            <div>
                <a href="/posts/<?php echo e($post->slug); ?>"
                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                >
                    Read More
                </a>
            </div>
        </footer>
    </div>
</div>
</article>

<?php /**PATH /home/linuxbrew/.linuxbrew/etc/php/laravelblog/resources/views/components/post-card.blade.php ENDPATH**/ ?>