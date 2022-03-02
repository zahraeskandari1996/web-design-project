

<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('landing.login')->html();
} elseif ($_instance->childHasBeenRendered('lG7jR8n')) {
    $componentId = $_instance->getRenderedChildComponentId('lG7jR8n');
    $componentTag = $_instance->getRenderedChildComponentTagName('lG7jR8n');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lG7jR8n');
} else {
    $response = \Livewire\Livewire::mount('landing.login');
    $html = $response->html();
    $_instance->logRenderedChild('lG7jR8n', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('homePage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/login.blade.php ENDPATH**/ ?>