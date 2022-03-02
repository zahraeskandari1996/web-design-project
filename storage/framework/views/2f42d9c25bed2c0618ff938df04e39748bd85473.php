<section>
    <?php $__env->startSection('breadcrumb'); ?>
        <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
            <a href="<?php echo e(route('main')); ?>">داشبورد</a>
            <i
                data-feather="chevron-left"
                class="breadcrumb__icon"
            ></i>
            <a href="" class="breadcrumb--active">ایده جدید</a>
        </div>
    <?php $__env->stopSection(); ?>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            ایده جدید
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form class="intro-y box p-5" wire:submit.prevent="submit">
                <div>
                    <label for="title" class="form-label">عنوان ایده</label>
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
                    <label>توضیحات ایده</label>
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



                    <div class="mt-3" >
                        <label for="file_path" class="form-label">فایل </label>
                            <input
                                id="file_path"
                                name="file_path"
                                type="file"
                                accept="zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed"
                                wire:model.defer="file_path"
                                class="form-control w-full"
                            />
                            <?php $__errorArgs = ['file_path'];
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
                    <div class="text-left mt-5" wire:loading.remove>
                        <a href="#" type="button" class="btn btn-outline-secondary w-24 ml-1">لغو</a>
                        <button type="submit" type="button" class="btn btn-primary w-24">ذخیره</button>
                    </div>
                    <div class="text-left mt-5 flex justify-center align-center ml-2" wire:loading>
                        <i data-loading-icon="tail-spin" class="w-8 h-8"></i>
                    </div>
                </form>
            <!-- END: Form Layout -->
        </div>
    </div>
    </section>
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/idea/create.blade.php ENDPATH**/ ?>