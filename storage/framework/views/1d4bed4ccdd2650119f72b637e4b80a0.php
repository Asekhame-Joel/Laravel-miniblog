<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="../images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                <a href="/" class="text-xs font-bold uppercase">Home Page</a>

                <a href="#"
                    class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Subscribe
                    for Updates</a>
            </div>
        </nav>

        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="<?php echo e(asset('storage/' . $post->thumbnail)); ?>" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time><?php echo e($post->created_at->diffForHumans()); ?></time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="../images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                <a href="/?author=<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a>
                            </h5>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

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
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        <?php echo e($post->title); ?>

                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose space-y-4">
                        <h3>
                            <?php echo e($post->excerpts); ?>

                        </h3>
                    </div>

                    <div class="space-y-4 lg:text-lg leading-loose space-y-4">
                        <?php echo e($post->body); ?>

                    </div>
                </div>
                <section class="col-span-8 col-start-5 mt-10 space-y-6">
<?php echo $__env->make('posts._add-comment-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                                        <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalbd9557727013ab5c59290a3a681e973f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd9557727013ab5c59290a3a681e973f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-comment','data' => ['comment' => $comment]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('post-comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['comment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($comment)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd9557727013ab5c59290a3a681e973f)): ?>
<?php $attributes = $__attributesOriginalbd9557727013ab5c59290a3a681e973f; ?>
<?php unset($__attributesOriginalbd9557727013ab5c59290a3a681e973f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd9557727013ab5c59290a3a681e973f)): ?>
<?php $component = $__componentOriginalbd9557727013ab5c59290a3a681e973f; ?>
<?php unset($__componentOriginalbd9557727013ab5c59290a3a681e973f); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </section>
            </article>
        </main>

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="../images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                class="lg:bg-transparent pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>
<?php /**PATH /home/linuxbrew/.linuxbrew/etc/php/laravelblog/resources/views/posts/show.blade.php ENDPATH**/ ?>