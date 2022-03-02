<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon.ico">
    <title><?php echo e(config('app.name', 'IDEA Show')); ?></title>
    <!-- themeforest:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/aos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/cookieconsent.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/odometer-theme-minimal.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/prism-okaidia.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/simplebar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/smart_wizard_all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/swiper-bundle.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/dashcore.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/rtl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/landing/demo.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="//fdn.fontcdn.ir">
    <link rel="preconnect" href="//v1.fontapi.ir">
    <link href="https://v1.fontapi.ir/css/Shabnam" rel="stylesheet">
    

</head>

<body>

        <?php if (! empty(trim($__env->yieldContent('body')))): ?>
            <?php echo $__env->yieldContent('body'); ?>
        <?php endif; ?>

        <?php if (! empty(trim($__env->yieldContent('content')))): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('landing.layout.header')->html();
} elseif ($_instance->childHasBeenRendered('eNuja61')) {
    $componentId = $_instance->getRenderedChildComponentId('eNuja61');
    $componentTag = $_instance->getRenderedChildComponentTagName('eNuja61');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('eNuja61');
} else {
    $response = \Livewire\Livewire::mount('landing.layout.header');
    $html = $response->html();
    $_instance->logRenderedChild('eNuja61', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('landing.layout.footer')->html();
} elseif ($_instance->childHasBeenRendered('xOcsTNp')) {
    $componentId = $_instance->getRenderedChildComponentId('xOcsTNp');
    $componentTag = $_instance->getRenderedChildComponentTagName('xOcsTNp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xOcsTNp');
} else {
    $response = \Livewire\Livewire::mount('landing.layout.footer');
    $html = $response->html();
    $_instance->logRenderedChild('xOcsTNp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
</body>

<script src="<?php echo e(mix('js/landing/jquery.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/bootstrap.bundle.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/card.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/counterup2.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/noise.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/noframework.waypoints.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/odometer.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/prism.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/simplebar.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/swiper-bundle.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/jquery.easing.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/jquery.validate.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/jquery.smartWizard.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/feather.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/aos.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/typed.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/jquery.magnific-popup.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/cookieconsent.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/jquery.animatebar.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/common.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/forms.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/stripe-bubbles.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/stripe-menu.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/credit-card.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/pricing.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/shop.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/svg.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/site.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/wizards.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/cookie-consent-util.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/cookie-consent-themes.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/cookie-consent-custom-css.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/cookie-consent-informational.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/cookie-consent-opt-out.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/cookie-consent-opt-in.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/cookie-consent-location.js')); ?>"></script>
<script src="<?php echo e(mix('js/landing/demo.js')); ?>"></script>
<?php echo \Livewire\Livewire::scripts(); ?>


</html><?php /**PATH C:\Users\M0B\Desktop\Projects\idea-show\resources\views/homePage.blade.php ENDPATH**/ ?>