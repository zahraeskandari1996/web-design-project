<section>
    <?php $__env->startSection('breadcrumb'); ?>
        <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
            <a href="<?php echo e(route('main')); ?>">داشبورد</a>
            <i
                data-feather="chevron-left"
                class="breadcrumb__icon"
            ></i>
            <a href="" class="breadcrumb--active">مدیریت کاربران</a>
        </div>
    <?php $__env->stopSection(); ?>
    <h2 class="intro-y text-lg font-medium mt-10">
        مدیریت کاربران
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            

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
                        <th class="whitespace-nowrap">کاربر</th>
                            <th class="whitespace-nowrap">نام</th>
                            <th class="text-center whitespace-nowrap">نام کاربری</th>
                            <th class="text-center whitespace-nowrap">ایمیل</th>
                            <th class="text-center whitespace-nowrap">فعالیت</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="w-12 h-12 flex-none image-fit">
                                    <img
                                        alt="<?php echo e($user->name); ?>"
                                        class="rounded-full"
                                        src="<?php echo e(Storage::url($user->profile_photo_path)); ?>"
                                    />
                                </div>

                            </td>
                            <td>
                                <a href="#" class="font-medium whitespace-nowrap"><?php echo e($user->name); ?></a>
                                <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5"><?php echo e($user->created_at->diffForHumans()); ?></div>
                            </td>
                            <td class="text-center"><?php echo e($user->username); ?></td>
                            <td class="w-40" wire:ignore>
                                    <div class="flex items-center justify-center"> <?php echo e($user->email); ?> </div>

                                </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <?php if($user->is_reviewer): ?>
                                        <a
                                        role="button"
                                        wire:click.prevent="removeReviewer(<?php echo e($user->id); ?>)"
                                        class="flex items-center text-theme-6"
                                        >
                                            <i data-feather="trash" class="w-4 h-4 ml-1"></i>
                                            حذف داوری
                                        </a>
                                    <?php else: ?>
                                        <a
                                        role="button"
                                        wire:click.prevent="makeReviewer(<?php echo e($user->id); ?>)"
                                        class="flex items-center text-theme-9"
                                        >
                                            <i data-feather="user-plus" class="w-4 h-4 ml-1"></i>
                                            ارتقا به داور
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
            <?php echo e($users->links('paginate')); ?>

        </div>
        <!-- END: Pagination -->
    </div>
    </section>
    <!-- END: Content -->
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/user/admin.blade.php ENDPATH**/ ?>