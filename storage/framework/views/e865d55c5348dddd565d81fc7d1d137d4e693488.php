<?php $__env->startPush('alpine-components'); ?>
    <script>
        window.bitflanToolRgbToHexComponent = function() {
            return {
                r: 255,
                g: 255,
                b: 255,
                hex: '',

                componentToHex(c) {
                    let hex = c.toString(16);
                    return hex.length == 1 ? "0" + hex : hex;
                },

                convert() {
                    this.hex = "#" + this.componentToHex(Number(this.r)) + this.componentToHex(Number(this.g)) + this.componentToHex(Number(this.b));
                }
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<div x-data="window.bitflanToolRgbToHexComponent()">
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label class="custom-label"><?php echo e(trans('webtools/tools/rgb-to-hex.red')); ?></label>
                <input x-model="r" value="255" type="text" class="custom-input" placeholder="R">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label class="custom-label"><?php echo e(trans('webtools/tools/rgb-to-hex.green')); ?></label>
                <input x-model="g" value="255" type="text" class="custom-input" placeholder="G">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label class="custom-label"><?php echo e(trans('webtools/tools/rgb-to-hex.blue')); ?></label>
                <input x-model="b" value="255" type="text" class="custom-input" placeholder="B">
            </div>
        </div>
    </div>
    
    <button @click="convert()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/rgb-to-hex.submit')); ?></button>

    <template x-if="hex">
        <div class="mt-3 copy-input">
            <input :value="hex" disabled type="text" class="custom-input disabled" placeholder="<?php echo e(trans('webtools/tools/rgb-to-hex.result-placeholder')); ?>">
            <button x-on:click="window.writeClipboardText($event, hex)" class="btn custom--btn button__md copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
        </div>
    </template>
</div><?php /**PATH C:\xampp\htdocs\cybertools\resources\views/modules/tools/rgb-to-hex/view.blade.php ENDPATH**/ ?>