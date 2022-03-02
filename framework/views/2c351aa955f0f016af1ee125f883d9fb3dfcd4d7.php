<div class="intro-y box tab-pane active" id="<?php echo e($tab_id); ?>">
    <div
        class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5"
    >
        <h2 class="font-medium text-base ml-auto">ویرایش اطلاعات</h2>
    </div>
    <div id="input" class="p-5">
        <form class="preview" wire:submit.prevent="submitEdit">
            <div class="w-52 mx-auto xl:ml-0 xl:mr-6">
                <div style="margin-inline: auto" class="border-2 border-dashed shadow-sm border-gray-200 dark:border-dark-5 rounded-md p-5">
                    <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                        <img class="rounded-md" alt="<?php echo e(Auth::user()->name); ?>" src="<?php echo e($profile_photo_path ? $profile_photo_path->temporaryUrl() : Storage::url(Auth::user()->profile_photo_path)); ?>">
                        <div wire:click="clearPic" title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 left-0 top-0 -ml-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                    </div>
                    <div class="mx-auto cursor-pointer relative mt-5">
                        <button type="button" class="btn btn-primary w-full">تغییر عکس</button>
                        <input
                            name="profile_photo_path"
                            type="file"
                            accept="image/jpg, image/png, image/jpeg"
                            wire:model="profile_photo_path" class="w-full h-full top-0 left-0 absolute opacity-0">
                    </div>
                </div>
                <?php $__errorArgs = ['profile_photo_path'];
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
                <label for="name" class="form-label"
                    >نام و نام خانوادگی</label
                >
                <input
                    id="name"
                    name="name"
                    wire:model.defer="name"
                    type="text"
                    class="form-control form-control-rounded <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-theme-6 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="نام و نام خانوادگی"
                />

                <?php $__errorArgs = ['name'];
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
                <label for="username" class="form-label"
                    >نام کاربری</label
                >
                <input
                    id="username"
                    name="username"
                    wire:model.defer="username"
                    type="text"
                    class="form-control form-control-rounded <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-theme-6 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="نام کاربری"
                />

                <?php $__errorArgs = ['username'];
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
                <label for="email" class="form-label">ایمیل</label>
                <input
                    id="email"
                    name="email"
                    wire:model.defer="email"
                    type="text"
                    class="form-control form-control-rounded <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-theme-6 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="ایمیل"
                />

                <?php $__errorArgs = ['email'];
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
                <label for="degree" class="form-label">تحصیلات</label>
                <input
                    id="degree"
                    name="degree"
                    wire:model.defer="degree"
                    type="text"
                    class="form-control form-control-rounded <?php $__errorArgs = ['degree'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-theme-6 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="تحصیلات"
                />

                <?php $__errorArgs = ['degree'];
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
                <label for="field" class="form-label"
                    >رشته تحصیلی</label
                >
                <input
                    id="field"
                    name="field"
                    wire:model.defer="field"
                    type="text"
                    class="form-control form-control-rounded <?php $__errorArgs = ['field'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-theme-6 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="رشته تحصیلی"
                />
                <?php $__errorArgs = ['field'];
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
            <div wire:loading class="sm:ml-20 sm:pl-5 mt-5">
                <button class="btn btn-primary mr-1 mb-2">
                    درحال ذخیره
                    <i
                        data-loading-icon="oval"
                        data-color="white"
                        class="w-4 h-4 mr-2"
                    ></i>
                </button>
            </div>

            <div wire:loading.remove class="sm:ml-20 sm:pl-5 mt-5">
                <button type="submit" class="btn btn-primary">
                    ویرایش
                </button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/user/form.blade.php ENDPATH**/ ?>