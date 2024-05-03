<?php if (isset($component)) { $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('trigger', null, []); ?> 
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            <?php echo e($currentcategory->name ?? 'categories'); ?> <!-- Use null coalescing operator to handle unset $currentcategory -->
            <?php if (isset($component)) { $__componentOriginale1f6404d56a216bf19326bdd8f8fc4e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale1f6404d56a216bf19326bdd8f8fc4e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.downarrow','data' => ['class' => 'absolute pointer-events-none','style' => 'right: 12px;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('downarrow'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'absolute pointer-events-none','style' => 'right: 12px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale1f6404d56a216bf19326bdd8f8fc4e3)): ?>
<?php $attributes = $__attributesOriginale1f6404d56a216bf19326bdd8f8fc4e3; ?>
<?php unset($__attributesOriginale1f6404d56a216bf19326bdd8f8fc4e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale1f6404d56a216bf19326bdd8f8fc4e3)): ?>
<?php $component = $__componentOriginale1f6404d56a216bf19326bdd8f8fc4e3; ?>
<?php unset($__componentOriginale1f6404d56a216bf19326bdd8f8fc4e3); ?>
<?php endif; ?>
        </button>
     <?php $__env->endSlot(); ?>

    <?php if (isset($component)) { $__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdownitem','data' => ['href' => '/?'.e(http_build_query(request()->except('category', 'page'))).'','active' => request()->routeIs('home')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdownitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/?'.e(http_build_query(request()->except('category', 'page'))).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('home'))]); ?>
        All
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9)): ?>
<?php $attributes = $__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9; ?>
<?php unset($__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9)): ?>
<?php $component = $__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9; ?>
<?php unset($__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9); ?>
<?php endif; ?>

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdownitem','data' => ['href' => '/?category='.e($category->slug).'&'.e(http_build_query(request()->except('category', 'page'))).'','active' => request()->is('categories/' . $category->slug)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdownitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/?category='.e($category->slug).'&'.e(http_build_query(request()->except('category', 'page'))).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('categories/' . $category->slug))]); ?>
            <?php echo e(ucwords($category->name)); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9)): ?>
<?php $attributes = $__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9; ?>
<?php unset($__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9)): ?>
<?php $component = $__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9; ?>
<?php unset($__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $attributes = $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $component = $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php /**PATH /home/linuxbrew/.linuxbrew/etc/php/laravelblog/resources/views/components/category-dropdown.blade.php ENDPATH**/ ?>