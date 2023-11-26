<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Create Acara &mdash; Wedding</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header"> 
            <div class="section-header-back">
                <a href="<?=site_url('acara')?>" class="btn">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
            <h1>Create Acara</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4>Create Acara / Acara</h4>
                </div>
                <div class="card-body col-md-6">
                    <form action="<?=site_url('acara')?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>Nama Acara / Acara *</label>
                            <input type="text" name="name_acara" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Date Acara *</label>
                            <input type="date" name="date_acara" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Info</label>
                            <textarea name="info_acara" class="form-control"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>