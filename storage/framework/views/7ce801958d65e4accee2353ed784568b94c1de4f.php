<div class="cursor-pointer box relative flex items-center py-5 px-0 sm:px-5">
    <div class="w-12 h-12 flex-none image-fit ml-1">
        <img alt="<?php echo e($idea->user->name); ?>" class="rounded-full" src="<?php echo e(Storage::url($idea->user->profile_photo_path)); ?>">
        
    </div>
    <div class="mr-2 overflow-hidden">
        <div class="flex items-center" style="justify-content: flex-end;">
            <a href="javascript:;" class="font-medium">
                <?php echo e($idea->user->name); ?>

            </a>
            <span style="direction: rtl;" class="pr-2 text-xs text-gray-500 ml-auto"><?php echo e($idea->created_at->diffForHumans()); ?></span>


        </div>
        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo e($idea->title); ?></div>
    </div>
    <div class="absolute left-0  md:pl-12">
        <a href="<?php echo e(route('idea-show', ['idea'=>$idea->id])); ?>" role="button" class="btn btn-rounded-primary w-18">مشاهده</a>

    </div>
    


</div>
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/user/idea.blade.php ENDPATH**/ ?>