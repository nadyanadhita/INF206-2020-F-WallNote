<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Penjualan
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('penjualan/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Penjualan
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
                    <th>No Penjualan</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Terbayar</th>
                    <th>Sisa</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($penjualan) :
                    $no = 1;
                    foreach ($penjualan as $pj) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $pj['no_penjualan']; ?></td>
                            <td><?= $pj['tgl_penjualan']; ?></td>
                            <td><?= $pj['total']; ?></td>
                            <td><?= $pj['terbayar']; ?></td>
                            <td><?= $pj['sisa']; ?></td>
                            <th>
                                <a href="<?= base_url('penjualan/edit/') . $pj['id_penjualan'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('penjualan/delete/') . $pj['id_penjualan'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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