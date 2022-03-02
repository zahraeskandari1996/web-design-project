<section>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex">
        <a href="<?php echo e(route('main')); ?>">داشبورد</a>
        <i
            data-feather="chevron-left"
            class="breadcrumb__icon"
        ></i>
        <a href="" class="breadcrumb--active">پروفایل</a>
    </div>
<?php $__env->stopSection(); ?>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">پروفایل</h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div
            class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5"
        >
            <div
                class="flex flex-1 px-5 items-center justify-center lg:justify-start"
            >
                <div
                    class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative"
                >
                    <img
                        alt="<?php echo e(Auth::user()->name); ?>"
                        class="rounded-full"
                        src="<?php echo e(Storage::url(Auth::user()->profile_photo_path)); ?>"
                    />
                </div>
                <div class="ml-5">
                    <div
                        class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg"
                    >
                        <?php echo e(Auth::user()->name); ?>

                    </div>
                    <div class="text-gray-600">
                        <?php echo e(Auth::user()->username.'@'); ?>

                    </div>
                </div>
            </div>
            <div
                class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0"
            >
                <div class="font-medium text-center lg:text-right lg:mt-3">
                    مشخصات
                </div>
                <div
                    class="flex flex-col justify-center items-center lg:items-start mt-4"
                >
                    <div
                        class="truncate sm:whitespace-normal flex items-center"
                    >
                        <i data-feather="mail" class="w-4 h-4 mr-2"></i>
                        <?php echo e(Auth::user()->email); ?>

                    </div>
                    <div
                        class="truncate sm:whitespace-normal flex items-center mt-3"
                    >
                        <i data-feather="instagram" class="w-4 h-4 mr-2"></i>
                        Instagram <?php echo e(Auth::user()->username); ?>

                    </div>
                    <div
                        class="truncate sm:whitespace-normal flex items-center mt-3"
                    >
                        <i data-feather="twitter" class="w-4 h-4 mr-2"></i>
                        Twitter <?php echo e(Auth::user()->username); ?>

                    </div>
                </div>
            </div>
        </div>
        <div
            class="nav nav-tabs flex-col sm:flex-row justify-center lg:justify-start"
            role="tablist"
        >
            <a
                id="edit-tab"
                data-toggle="tab"
                data-target="#edit-profile"
                href="javascript:;"
                class="py-4 sm:mr-8 active"
                role="tab"
                aria-controls="dashboard"
                aria-selected="true"
            >
                ویرایش اطلاعات</a
            >

            <a
                id="activities-tab"
                data-toggle="tab"
                data-target="#user-ideas"
                href="javascript:;"
                class="py-4 sm:mr-8"
                role="tab"
                aria-selected="false"
                >ایده‌ها</a
            >

        </div>
    </div>
    <!-- END: Profile Info -->

    <div class="intro-y tab-content mt-5">
        <!-- BEGIN: Profile Form tab -->
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.form', ['tab_id'=>'edit-profile'])->html();
} elseif ($_instance->childHasBeenRendered('l2756638200-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2756638200-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2756638200-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2756638200-0');
} else {
    $response = \Livewire\Livewire::mount('user.form', ['tab_id'=>'edit-profile']);
    $html = $response->html();
    $_instance->logRenderedChild('l2756638200-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <!-- END: Profile Form -->

        <!-- BEGIN: User Idea tab -->
            <div class="intro-y box tab-pane bg-transparent" id="user-ideas" style="max-width: -webkit-fill-available !important;">
                <div class="grid grid-cols-1 gap-2 mt-5 p-5 lg:grid-cols-2">
                    <?php $__currentLoopData = Auth::user()->ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.idea', ['idea'=>$idea])->html();
} elseif ($_instance->childHasBeenRendered('l2756638200-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2756638200-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2756638200-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2756638200-1');
} else {
    $response = \Livewire\Livewire::mount('user.idea', ['idea'=>$idea]);
    $html = $response->html();
    $_instance->logRenderedChild('l2756638200-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        <!-- END: User Idea Form -->
    </div>


</section>
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/user/profile.blade.php ENDPATH**/ ?>