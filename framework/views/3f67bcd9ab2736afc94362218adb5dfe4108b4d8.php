<div>

    <!-- BEGIN: Alert-Success -->

    <?php if(session()->has('success')): ?>
    <div
        class="alert alert-success alert-dismissible show flex items-center mb-2"
        role="alert"
        style="
            position: fixed;
            border-radius: 0;
            top: 0;
            right: 0;
            width: 100%;
            z-index: 99;
        "
    >
        <i data-feather="message-square" class="w-6 h-6 mr-2"></i>
        <?php echo e(session()->get('success')); ?>

        <button
            style="font-size: 2rem"
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        >
            ×
        </button>
    </div>
    <?php endif; ?>

    <!-- END: Alert-Success -->

    <!-- END: Alert-Success -->

</div>
<?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/livewire/wrapper.blade.php ENDPATH**/ ?>