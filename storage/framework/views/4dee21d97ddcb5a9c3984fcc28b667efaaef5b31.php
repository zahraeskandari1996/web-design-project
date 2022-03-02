<section>
    <?php $__env->startSection('breadcrumb'); ?>
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
        <a href="<?php echo e(route('main')); ?>">داشبورد</a>
        <i
            data-feather="chevron-left"
            class="breadcrumb__icon"
        ></i>
        <a href="" class="breadcrumb--active">ایده‌ها</a>
    </div>
<?php $__env->stopSection(); ?>
    <div class="intro-y flex items-center mt-8  w-full">
        <h2 class="text-lg font-medium ml-auto">ایده ها</h2>
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

            <div class="grid grid-cols-1 gap-5 mt-5 pt-5 border-t border-theme-5 lg:grid-cols-2">

                <?php $__currentLoopData = $ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.idea', ['idea'=>$idea])->html();
} elseif ($_instance->childHasBeenRendered('l2976323259-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2976323259-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2976323259-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2976323259-0');
} else {
    $response = \Livewire\Livewire::mount('user.idea', ['idea'=>$idea]);
    $html = $response->html();
    $_instance->logRenderedChild('l2976323259-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="flex items-center justify-center mt-5 w-full">
                <?php echo e($ideas->links('paginate')); ?>


            </div>

        </div>
        <!-- END: Item List -->

    </div>
    </section>
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/idea/index.blade.php ENDPATH**/ ?>