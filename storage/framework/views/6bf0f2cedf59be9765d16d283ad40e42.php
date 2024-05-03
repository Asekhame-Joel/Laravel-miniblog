<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>
    html{
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">


                <?php if(auth()->guard()->check()): ?>
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
                 <button href="/" class="text-xs font-bold uppercase">Welcome Back, <?php echo e(auth()->user()->name); ?>!</button>    
                 <?php $__env->endSlot(); ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                <?php if (isset($component)) { $__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdownitem','data' => ['href' => '/admin/posts/create','active' => request()->is('admin/posts/create')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdownitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/admin/posts/create','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('admin/posts/create'))]); ?>
                    New Post
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
                <?php if (isset($component)) { $__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdownitem','data' => ['href' => '/admin/posts','active' => request()->is('admin/posts')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdownitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/admin/posts','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('admin/posts'))]); ?>
                    Dashboard
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
                <?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalffc1bea645ec8d4780b6ec142f0bf4b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalffc1bea645ec8d4780b6ec142f0bf4b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdownitem','data' => ['href' => '#','xData' => '{}','@click.prevent' => 'document.querySelector(\'#logout-form\').submit()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdownitem'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#','x-data' => '{}','@click.prevent' => 'document.querySelector(\'#logout-form\').submit()']); ?>
                        Logout
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
                    <form  id = "logout-form"class="hidden" action="/logout" method="POST">
                        <?php echo csrf_field(); ?>
                        </form>
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

              
                <?php else: ?>
                <a href="/login" class="text-xs font-bold px-5 uppercase">Login</a>
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <?php endif; ?>



                <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>
        <?php echo e($slot); ?>

        


        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        <?php echo csrf_field(); ?>
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" name="email" id="email" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-sm text-red-500"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </footer>
    </section>

<?php if (isset($component)) { $__componentOriginal5168fdb0c14fd91c6598264bc4be63f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2)): ?>
<?php $attributes = $__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2; ?>
<?php unset($__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5168fdb0c14fd91c6598264bc4be63f2)): ?>
<?php $component = $__componentOriginal5168fdb0c14fd91c6598264bc4be63f2; ?>
<?php unset($__componentOriginal5168fdb0c14fd91c6598264bc4be63f2); ?>
<?php endif; ?>
</body>
<?php /**PATH /home/linuxbrew/.linuxbrew/etc/php/laravelblog/resources/views/components/layout.blade.php ENDPATH**/ ?>