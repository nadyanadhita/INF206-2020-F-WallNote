<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Pembelian
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('pembelian/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Pembelian
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>No Pembelian</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Terbayar</th>
                    <th>Sisa</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($pembelian) :
                    $no = 1;
                    foreach ($pembelian as $pb) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $pb['no_pembelian']; ?></td>
                            <td><?= $pb['tgl_pembelian']; ?></td>
                            <td><?= $pb['total']; ?></td>
                            <td><?= $pb['terbayar']; ?></td>
                            <td><?= $pb['sisa']; ?></td>
                            <th>
                                <a href="<?= base_url('pembelian/edit/') . $pb['id_pembelian'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('pembelian/delete/') . $pb['id_pembelian'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>