<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
    
    
    
    
    
    <header class="max-w-xl mx-auto mt-20 text-center">
        <?php echo $__env->make('_posts_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            <?php if($posts->count()): ?>
            <?php if (isset($component)) { $__componentOriginal12d511823dcdcdbf5a9dd9a942b939bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12d511823dcdcdbf5a9dd9a942b939bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-grid','data' => ['posts' => $posts]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('post-grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['posts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($posts)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12d511823dcdcdbf5a9dd9a942b939bc)): ?>
<?php $attributes = $__attributesOriginal12d511823dcdcdbf5a9dd9a942b939bc; ?>
<?php unset($__attributesOriginal12d511823dcdcdbf5a9dd9a942b939bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12d511823dcdcdbf5a9dd9a942b939bc)): ?>
<?php $component = $__componentOriginal12d511823dcdcdbf5a9dd9a942b939bc; ?>
<?php unset($__componentOriginal12d511823dcdcdbf5a9dd9a942b939bc); ?>
<?php endif; ?>
            <?php else: ?>
                <p class="text-center">No Post Yet, Check back Later</p>
            <?php endif; ?>


            
        </main>
        
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH /home/linuxbrew/.linuxbrew/etc/php/laravelblog/resources/views/posts.blade.php ENDPATH**/ ?>