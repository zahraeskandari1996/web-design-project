<section>
    <?php $__env->startSection('breadcrumb'); ?>
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
        <a href="<?php echo e(route('main')); ?>">داشبورد</a>
        <i
            data-feather="chevron-left"
            class="breadcrumb__icon"
        ></i>
        <a href="<?php echo e(route('idea')); ?>" class="breadcrumb--active"> مدیریت ایده‌شو‌ها</a>

    </div>
<?php $__env->stopSection(); ?>
<h2 class="intro-y text-lg font-medium mt-10">
    مدیریت ایده‌شو ها
</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="<?php echo e(route('ideashow-create')); ?>" role="button" class="btn btn-primary shadow-md ml-2">ایده‌شو جدید</a>

        <div class="hidden md:block mx-auto text-gray-600">   </div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <input  wire:model="search" type="search" type="text" class="form-control w-56 box pl-10 placeholder-theme-13" placeholder="جستجو...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0" data-feather="search"></i>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">تصاویر</th>
                        <th class="whitespace-nowrap">عنوان ایده‌شو</th>
                        <th class="text-center whitespace-nowrap">ایده‌ها</th>
                        <th class="text-center whitespace-nowrap">وضعیت</th>
                        <th class="text-center whitespace-nowrap">فعالیت</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $ideashows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ideashow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                <div class="w-20 h-10 image-fit zoom-in">
                                    <img alt="<?php echo e($ideashow->title); ?>" class="tooltip rounded" src="<?php echo e(Storage::url($ideashow->image)); ?>" title="اپلود شده 11مهر 1400">
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="<?php echo e(route('ideashow-show', ['ideashow'=>$ideashow->id])); ?>" class="font-medium whitespace-nowrap"><?php echo e($ideashow->title); ?></a>
                            <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5"><?php echo e($ideashow->created_at->diffForHumans()); ?></div>
                        </td>
                        <td class="text-center"><?php echo e($ideashow->ideas()->count()); ?></td>
                        <td class="w-40" wire:ignore>
                            <?php if($ideashow->is_active): ?>
                                <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 ml-2"></i> فعال </div>
                            <?php else: ?>
                                <div class="flex items-center justify-center text-theme-6"> <i data-feather="x-square" class="w-4 h-4 ml-2"></i> غیرفعال </div>
                            <?php endif; ?>
                            </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a href="<?php echo e(route('ideashow-edit', ['ideashow' => $ideashow->id])); ?>" class="flex items-center ml-3" role="button"  wire:ignore>
                                    <i data-feather="edit" class="w-4 h-4 ml-1"></i>
                                    ویرایش
                                </a>
                                <?php if($ideashow->id == $deleteID): ?>
                                    <button wire:click.prevent="destroy" class="btn btn-danger"> مطمئنی؟  </button>
                                <?php else: ?>

                                    <a
                                        role="button"
                                        wire:ignore
                                        wire:click.prevent="setDeleteID(<?php echo e($ideashow->id); ?>)"
                                        class="flex items-center text-theme-6"
                                    >
                                        <i data-feather="trash-2" class="w-4 h-4 ml-1"></i>
                                        حذف
                                    </a>
                                <?php endif; ?>
                                </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <?php echo e($ideashows->links('paginate')); ?>

    </div>
    <!-- END: Pagination -->
</div>
</section>
<!-- END: Content -->
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/ideashow/admin.blade.php ENDPATH**/ ?>