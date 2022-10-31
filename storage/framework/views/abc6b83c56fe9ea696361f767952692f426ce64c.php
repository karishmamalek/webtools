<div x-data="window.bitflanFormattersComponent()">
    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/html-formatter.label')); ?></label>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="form-group position-relative">
                    <button @click="window.writeClipboardText($event, editor.getValue())" class="btn custom--btn button__md ace-copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
                    <div x-ref="editor" id="editor"></div>
                </div>
            </div>
        </div>
    </div>
    <button x-on:click="formatHtml()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/html-formatter.submit')); ?></button>
</div><?php /**PATH C:\xampp\htdocs\cybertools\resources\views/modules/tools/html-formatter/view.blade.php ENDPATH**/ ?>