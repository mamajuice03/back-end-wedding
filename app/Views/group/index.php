<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Groups &mdash; Wedding</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <h1>Groups</h1>
            <div class="section-header-button">
                <a href="<?=site_url('groups/new')?>" class="btn btn-primary"> 
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
                    <h4>Data Grup Kontak</h4>
                    <div class="card-header-action">
                        <a href="<?=site_url('groups/trash')?>" class="btn btn-danger"><i class="fa fa-trash"></i>Trash</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-md">
                        <tbody><tr>
                            <th>#</th>
                            <th>Name Groups</th>
                            <th>Info</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($groups as $key => $value) : ?>
                            <tr>
                                <td><?=$key + 1?></td>
                                <td><?=$value->name_group?></td>
                                <td><?=$value->info_group?></td>
                                <td class="text-center" style="width: 15%">
                                    <a href="<?=site_url('groups/edit/'.$value->id_group)?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?=site_url('groups/delete/'.$value->id_group)?>" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        <?= csrf_field() ?>
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