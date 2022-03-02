<section>
    <?php $__env->startSection('breadcrumb'); ?>
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
        <a href="<?php echo e(route('main')); ?>">داشبورد</a>
        <i
            data-feather="chevron-left"
            class="breadcrumb__icon"
        ></i>
        <a href="<?php echo e(route('ideashow')); ?>" class="breadcrumb--active"> ایده‌شو‌ها</a>


    </div>
<?php $__env->stopSection(); ?>
<div class="intro-y flex items-center mt-8  w-full">
    <h2 class="text-lg font-medium ml-auto">ایده‌شو ها</h2>
</div>
<div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Item List -->
    <div class="intro-y col-span-12">
        <div class="lg:flex intro-y">
            <div class="relative text-gray-700 dark:text-gray-300">
                <input wire:model="search" type="search" class="form-control py-3 px-4 w-full lg:w-64 box pr-10 placeholder-theme-13" placeholder="جستجو مورد....">
                <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0" data-feather="search"></i>
            </div>

        </div>

        <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t border-theme-5">

            <?php $__currentLoopData = $ideashows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ideashow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('ideashow-show', ['ideashow' => $ideashow->id])); ?>" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                    <div class="box rounded-md p-3 relative zoom-in">
                        <div class="flex-none pos-image relative block">
                            <div class="pos-image__preview image-fit">
                                <img alt="<?php echo e($ideashow->title); ?>" src=<?php echo e(Storage::url($ideashow->image)); ?>>
                            </div>
                        </div>
                        <div class="block font-medium text-center truncate mt-3"><?php echo e($ideashow->title); ?></div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="flex items-center justify-center mt-5 w-full">
            <?php echo e($ideashows->links('paginate')); ?>


        </div>

    </div>
    <!-- END: Item List -->

</div>
</section>
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/ideashow/index.blade.php ENDPATH**/ ?>