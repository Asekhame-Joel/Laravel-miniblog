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
    <?php if (isset($component)) { $__componentOriginalf4dbe5c03e5252d506702b8e24b335a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf4dbe5c03e5252d506702b8e24b335a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.setting','data' => ['heading' => 'Manage Posts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('setting'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'Manage Posts']); ?>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="border px-4 py-2">Post Title</td>
                                    <td class="border px-4 py-2">Author</td>
                                    <td class="border px-4 py-2">Edit Action</td>
                                    <td class="border px-4 py-2">Delete Action</td>
                                  </tr>
                                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr class="bg-gray-100">
                                  <td class="border px-6 py-4 nowrap">
                                    <a href="/posts/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?>

                                    </a>
                                    </td>

                                    
                                    <td class="border px-4 py-2"><?php echo e($post->author->name); ?></td>
                                    <td class="border px-4 py-2">
                                        <div class="md:flex md:items-center">
                                            <button
                                                class="shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                                type="submit">
                                               <a href="/admin/posts/<?php echo e($post->id); ?>/edit">Edit</a></button>
                                        </div>               
                                     </td>  
                    
                                  
                                                <form method="POST" action="/admin/posts/<?php echo e($post->id); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <td class="border px-4 py-2">
                                                        <div class="md:flex md:items-center">
                                                            <button
                                                                class="shadow bg-red-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                                                type="submit">
                                                                Delete
                                                </form>
                                            </button>
                                        </div> 
                                        
                                         </td>
                                                
                                            
                                     
                                  </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf4dbe5c03e5252d506702b8e24b335a8)): ?>
<?php $attributes = $__attributesOriginalf4dbe5c03e5252d506702b8e24b335a8; ?>
<?php unset($__attributesOriginalf4dbe5c03e5252d506702b8e24b335a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf4dbe5c03e5252d506702b8e24b335a8)): ?>
<?php $component = $__componentOriginalf4dbe5c03e5252d506702b8e24b335a8; ?>
<?php unset($__componentOriginalf4dbe5c03e5252d506702b8e24b335a8); ?>
<?php endif; ?>
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

    <?php /**PATH /home/linuxbrew/.linuxbrew/etc/php/laravelblog/resources/views/admin/posts/index.blade.php ENDPATH**/ ?>