<?php if(isset($scripts) && $scripts): ?>
    <?php $__currentLoopData = $scripts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script src="<?php echo e($script[1] == 'internal' ? asset($script[0]) : $script[0]); ?>"></script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php $__currentLoopData = $generalSettings->scripts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($script['location'] == 'footer'): ?>
        <script src="<?php echo e($script['url']); ?>"></script>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if($adSettings->popAdStatus && $adSettings->popAdLocation == 'footer'): ?>
    <?php echo $adSettings->popAdCode; ?>

<?php endif; ?><?php /**PATH C:\xampp\htdocs\cybertools\resources\views/includes/footer-content.blade.php ENDPATH**/ ?>