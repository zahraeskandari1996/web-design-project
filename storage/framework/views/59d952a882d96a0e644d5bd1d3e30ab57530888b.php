<section>
    <?php $__env->startSection('breadcrumb'); ?>
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
        <a href="<?php echo e(route('main')); ?>">داشبورد</a>
        <i
            data-feather="chevron-left"
            class="breadcrumb__icon"
        ></i>
        <a href="<?php echo e(route('ideashow-admin')); ?>"> مدیریت ایده‌شو‌ها</a>
        <i
            data-feather="chevron-left"
            class="breadcrumb__icon"
        ></i>
        <a href="#" class="breadcrumb--active"> <?php echo e($title); ?></a>

    </div>
<?php $__env->stopSection(); ?>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            ویرایش ایده‌شو
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form class="intro-y box p-5" wire:submit.prevent="submit">
                <div>
                    <label for="title" class="form-label">عنوان ایده‌شو</label>
                    <input wire:model.defer="title" id="title" type="text" class="form-control w-full" placeholder="عنوان ایده‌شو">
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-theme-6 mt-2">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mt-3">
                    <label>توضیحات ایده‌شو</label>
                    <div class="mt-2" wire:model.defer="content" wire:ignore>
                        <input id="content" value="<?php echo e($content); ?>" type="hidden" name="content">
                        <trix-editor input="content"></trix-editor>
                    </div>
                    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-theme-6 mt-2">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>





                    <div class="mt-3">
                        <label>وضعیت فعال بودن</label>
                        <div class="mt-2">
                            <input wire:model.defer="is_active" type="checkbox" class="form-check-switch">
                        </div>
                        <?php $__errorArgs = ['is_active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-theme-6 mt-2">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mt-3" >
                        <label for="image" class="form-label">پوستر </label>
                            <input
                                id="image"
                                name="image"
                                type="file"
                                accept="image/jpg, image/png, image/jpeg"
                                wire:model.defer="image"
                                class="form-control w-full"
                            />
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-theme-6 mt-2">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    <div class="text-left mt-5">
                        <a href="<?php echo e(route('ideashow-admin')); ?>" type="button" class="btn btn-outline-secondary w-24 ml-4">لغو</a>

                        <button wire:loading type="submit" type="button" class="btn btn-primary mr-1 mb-2">
                            <i
                            data-loading-icon="oval"
                            data-color="white"
                            class="w-4 h-4 mr-2"
                        ></i>

                        </button>
                        <button wire:loading.remove type="submit" type="button" class="btn btn-primary w-24">ذخیره</button>
                    </div>
                </form>
            <!-- END: Form Layout -->
        </div>
    </div>
    </section>
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/ideashow/edit.blade.php ENDPATH**/ ?>