<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Tambah Pembelian
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('pembelian') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                    <label class="col-md-3 text-md-right" for="no_pembelian">No Pembelian</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-fw fa-list-ol"></i></span>
                            </div>
                            <input value="<?= set_value('no_pembelian'); ?>" name="no_pembelian" id="no_pembelian" type="text" class="form-control" placeholder="No Pembelian...">
                        </div>
                        <?= form_error('no_pembelian', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tgl_pembelian">Tanggal</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-fw fa-calendar-alt"></i></span>
                            </div>
                            <input value="<?= set_value('tgl_pembelian'); ?>" name="tgl_pembelian" id="tgl_pembelian" type="date" class="form-control" placeholder="Tanggal...">
                        </div>
                        <?= form_error('tgl_pembelian', '<small class="text-danger">', '</small>'); ?>
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