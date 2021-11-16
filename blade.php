<?php

/** @var \Illuminate\View\Compilers\BladeCompiler $bladeCompiler */

$bladeCompiler->directive('datetime', function ($timestamp) {
    return '<?php echo date("l, F j, Y", ' . $timestamp . '); ?>';
});

$bladeCompiler->directive('carbonNow', function () {
    return '<?php echo \Carbon\Carbon::now(); ?>';
});



$bladeCompiler->aliasComponent('_components.cardproj');

$bladeCompiler->include('includes.copyright');