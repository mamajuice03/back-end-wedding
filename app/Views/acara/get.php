<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Acara &mdash; Wedding</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <h1>Acara</h1>
            <div class="section-header-button">
                <a href="<?=site_url('acara/add')?>" class="btn btn-primary"> 
                    Add New
                </a>
            </div>
        </div>

        <?php if(session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible show data">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success !</b>
                    <?=session()->getFlashdata('success')?>
                </div>
            </div>
        <?php endif; ?>
        

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4>Data Acara / Acara</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-md">
                        <tbody><tr>
                            <th>#</th>
                            <th>Name Acara</th>
                            <th>Date</th>
                            <th>Info</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($acara as $key => $value) : ?>
                            <tr>
                                <td><?=$key + 1?></td>
                                <td><?=$value->name_acara?></td>
                                <td><?=date('d/m/Y', strtotime($value->date_acara))?></td>
                                <td><?=$value->info_acara?></td>
                                <td class="text-center" style="width: 15%">
                                    <a href="<?=site_url('acara/edit/'.$value->id_acara)?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?=site_url('acara/'.$value->id_acara)?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button href="" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>