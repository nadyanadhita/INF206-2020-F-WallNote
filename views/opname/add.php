<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Tambah Barang Opname
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('opname') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?= form_open('', [], ['stok' => 0]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_opname">ID Opname</label>
                    <div class="col-md-9">
                        <input readonly value="<?= set_value('id_opname', $id_opname); ?>" name="id_opname" id="id_opname" type="text" class="form-control" placeholder="ID Opname...">
                        <?= form_error('id_opname', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="barang_id">Nama Barang</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <select name="barang_id" id="barang_id" class="custom-select">
                                <option value="" selected disabled>Pilih Nama Barang</option>
                                <?php foreach ($barang as $j) : ?>
                                    <option <?= set_select('barang_id', $j['id_barang']) ?> value="<?= $j['id_barang'] ?>"><?= $j['nama_barang'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="input-group-append">
                                <a class="btn btn-primary" href="<?= base_url('barang/add'); ?>"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <?= form_error('barang_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="satuan_id">Satuan Barang</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <select name="satuan_id" id="satuan_id" class="custom-select">
                                <option value="" selected disabled>Pilih Satuan Barang</option>
                                <?php foreach ($satuan as $s) : ?>
                                    <option <?= set_select('satuan_id', $s['id_satuan']) ?> value="<?= $s['id_satuan'] ?>"><?= $s['nama_satuan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="input-group-append">
                                <a class="btn btn-primary" href="<?= base_url('satuan/add'); ?>"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <?= form_error('satuan_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</bu>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>