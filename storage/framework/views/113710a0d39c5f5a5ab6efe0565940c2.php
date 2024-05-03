<div x-data="{ open: false }" @click.outside="open = false" class="relative">
    <div @click="open = !open">
        <?php echo e($trigger); ?>

    </div>
    <div class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl z-50 overflow-auto max-h-52" style="display: none" x-show="open"> 
        <?php echo e($slot); ?>

    </div>
</div>


    <?php /**PATH /home/linuxbrew/.linuxbrew/etc/php/laravelblog/resources/views/components/dropdown.blade.php ENDPATH**/ ?>