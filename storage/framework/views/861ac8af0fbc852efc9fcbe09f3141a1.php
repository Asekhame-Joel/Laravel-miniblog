<?php if (isset($component)) { $__componentOriginal25754d8265f0662b76358006fd8fede7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25754d8265f0662b76358006fd8fede7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.recent-post-card','data' => ['post' => $posts[0]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('recent-post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($posts[0])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25754d8265f0662b76358006fd8fede7)): ?>
<?php $attributes = $__attributesOriginal25754d8265f0662b76358006fd8fede7; ?>
<?php unset($__attributesOriginal25754d8265f0662b76358006fd8fede7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25754d8265f0662b76358006fd8fede7)): ?>
<?php $component = $__componentOriginal25754d8265f0662b76358006fd8fede7; ?>
<?php unset($__componentOriginal25754d8265f0662b76358006fd8fede7); ?>
<?php endif; ?>

<?php if($posts->count() > 1): ?>
    <div class="lg:grid lg:grid-cols-6">
        <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal14b498b52c33a1421ff8895e4557790f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14b498b52c33a1421ff8895e4557790f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-card','data' => ['post' => $post,'class' => ''.e($loop->iteration < 3 ? 'col-span-3' : 'col-span-2').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post),'class' => ''.e($loop->iteration < 3 ? 'col-span-3' : 'col-span-2').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14b498b52c33a1421ff8895e4557790f)): ?>
<?php $attributes = $__attributesOriginal14b498b52c33a1421ff8895e4557790f; ?>
<?php unset($__attributesOriginal14b498b52c33a1421ff8895e4557790f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14b498b52c33a1421ff8895e4557790f)): ?>
<?php $component = $__componentOriginal14b498b52c33a1421ff8895e4557790f; ?>
<?php unset($__componentOriginal14b498b52c33a1421ff8895e4557790f); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?><?php /**PATH /home/linuxbrew/.linuxbrew/etc/php/laravelblog/resources/views/components/post-grid.blade.php ENDPATH**/ ?>