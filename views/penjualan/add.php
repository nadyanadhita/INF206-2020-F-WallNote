<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Tambah Penjualan
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('penjualan') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="no_penjualan">No Penjualan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-fw fa-list-ol"></i></span>
                            </div>
                            <input value="<?= set_value('no_penjualan'); ?>" name="no_penjualan" id="no_penjualan" type="text" class="form-control" placeholder="No Penjualan...">
                        </div>
                        <?= form_error('no_penjualan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tgl_penjualan">Tanggal</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-fw fa-calendar-alt"></i></span>
                            </div>
                            <input value="<?= set_value('tgl_penjualan'); ?>" name="tgl_penjualan" id="tgl_penjualan" type="date" class="form-control" placeholder="Tanggal...">
                        </div>
                        <?= form_error('tgl_penjualan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="total">Total</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-fw fa-dollar-sign"></i></span>
                            </div>
                            <input value="<?= set_value('total'); ?>" name="total" id="total" type="text" class="form-control" placeholder="Total...">
                        </div>
                        <?= form_error('total', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="terbayar">Terbayar</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-fw fa-money-bill-alt"></i></span>
                            </div>
                            <input value="<?= set_value('terbayar'); ?>" name="terbayar" id="terbayar" type="text" class="form-control" placeholder="Terbayar...">
                        </div>
                        <?= form_error('terbayar', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="sisa">Sisa</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-fw fa-coins"></i></span>
                            </div>
                            <input value="<?= set_value('sisa'); ?>" name="sisa" id="sisa" type="text" class="form-control" placeholder="Sisa...">
                        </div>
                        <?= form_error('sisa', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>