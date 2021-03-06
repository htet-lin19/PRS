<?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'waves-effect waves-light btn indigo right']) ?>
<h4><?= __('Product Registration') ?></h4>
<hr>
<div class="row">
    <div class="col s1"></div>
    <div class="col s10">
        <?= $this->Form->create($product, ['class' => 'was-validated', 'enctype' => 'multipart/form-data']) ?>
        <h5><?= __('Product Information') ?></h5>
        <hr>
        <div class="row">
            <div class="input-field col s11">
                <i class="material-icons prefix">badge</i>
                <?= $this->Form->text('name', ['id' => 'name', 'autofocus', 'size' => '100', 'maxlength' => '100']) ?>
                <?= $this->Form->label('product_name') ?>
            </div>
            <div class="input-field col s11">
                <i class="material-icons prefix">tag</i>
                <?= $this->Form->text('model_no', ['id' => 'model_no', 'size' => '100', 'maxlength' => '100']) ?>
                <?= $this->Form->label('product_model_no') ?>
            </div>
            <div class="input-field col s11">
                <i class="material-icons prefix">attach_money</i>
                <?= $this->Form->number('price', ['id' => 'price', 'min' => '0', 'max' => '999999999999999', 'title' => 'Please insert MMK currency']) ?>
                <?= $this->Form->label('product_price') ?>
            </div>
            <div class="row">
                <div class="file-field input-field col s6">
                    <div class="btn indigo">
                        <span class="material-icons">wallpaper</span>
                        <?= $this->Form->control('image', ['type' => 'file', 'accept' => 'image/jpeg']) ?>
                    </div>
                    <div class="file-path-wrapper">
                        <?= $this->Form->text('image', ['class' => 'file-path validate', 'placeholder' => 'Please choose single image file']) ?>
                    </div>
                </div>
                <div class="file-field input-field col s6">
                    <div class="btn indigo">
                        <span class="material-icons">movie</span>
                        <?= $this->Form->file('video', ['accept' => 'video/mp4']) ?>
                    </div>
                    <div class="file-path-wrapper">
                        <?= $this->Form->text('video', ['class' => 'file-path validate', 'placeholder' => 'Please choose single video file']) ?>
                    </div>
                </div>
            </div>
        </div>
        <h5><?= __('Category Information') ?></h5>
        <hr>
        <div class="row">
            <div class="col s3">
                <?= __('Product Category') ?>
            </div>
            <div class="col s8">
                <?= $this->Form->select('category_id', $options_cat, ['class' => 'btn indigo']) ?>
            </div>
        </div>
        <h5><?= __('Company Information') ?></h5>
        <hr>
        <div class="row">
            <div class="col s3">
                <?= __('Product Company') ?>
            </div>
            <div class="col s8">
                <?= $this->Form->select('company_id', $options_com, ['class' => 'btn indigo']) ?>
            </div>
        </div>
        <div align="center">
            <?= $this->Form->button(__('Register'), ['class' => 'btn-large waves-effect waves-light indigo center']) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
    <div class="col s1"></div>
</div>