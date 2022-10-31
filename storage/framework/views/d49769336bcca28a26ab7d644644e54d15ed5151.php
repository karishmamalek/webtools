<div>
    <div class="mb-5 form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/bcrypt-generator.label')); ?></label>
        <div class="copy-textarea-btn">
            <textarea wire:model.defer='content' class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/bcrypt-generator.placeholder')); ?>" rows="5"></textarea>
        </div>
        <button wire:loading.class="disabled" wire:click='generate' class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/bcrypt-generator.submit')); ?></button>
    </div>

    <div x-data class="copy-input <?php if($this->hash == ''): ?> d-none <?php endif; ?>">
        <input wire:model.defer='hash' x-ref="text" disabled type="text" class="custom-input disabled" placeholder="">
        <button x-on:click="window.writeClipboardText($event, $refs.text.value)" class="btn custom--btn button__md copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\cybertools\resources\views/modules/tools/bcrypt-generator/livewire.blade.php ENDPATH**/ ?>