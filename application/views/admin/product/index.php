<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-sm-10">
                        <h4 class="m-0 font-weight-bold text-primary">Betta Fish Mabes</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="<?= site_url('admin/product/insert') ?>" class="btn btn-success btn-sm btn-block"><i class="fa fa-plus"></i> Tambah Betta Fish </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td width="5%">No</td>
                                <td>Kode</td>
                                <td>Nama</td>
                                <td>Status</td>
                                <td>Harga</td>
                                <td width="5%">Detail</td>
                                <td width="10%">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($row->result() as $val => $data) { ?>
                                <tr>
                                    <td><?= $val + 1 ?></td>
                                    <td><?= $data->kode_betta ?></td>
                                    <td><?= $data->nama_betta ?></td>
                                    <td><?= $data->status_betta == 1 ? '<b><i>Ready</i></b>' : '<b><i>Sold Out</i></b>' ?></td>
                                    <td><?= rupiah($data->price_betta) ?></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#<?= $data->kode_betta ?>" class="btn btn-info btn-sm btn-circle"><i class="fa fa-info"></i></a>
                                        <div class="modal fade " id="<?= $data->kode_betta ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Betta Fish</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <tr>
                                                                            <td width="25%">ID Betta</td>
                                                                            <td width="5%">:</td>
                                                                            <td><?= $data->id_betta ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kode Betta</td>
                                                                            <td>:</td>
                                                                            <td><?= $data->kode_betta ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Nama Betta</td>
                                                                            <td>:</td>
                                                                            <td><?= $data->nama_betta ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Jenis Betta</td>
                                                                            <td>:</td>
                                                                            <td><?= $data->type_betta ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Umur Betta</td>
                                                                            <td>:</td>
                                                                            <td><?= usia($data->birth_betta) ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Gender Betta</td>
                                                                            <td>:</td>
                                                                            <td><?= $data->gen_betta == 'M' ? 'Male' : 'Female' ?></td>
                                                                        </tr>
                                                                        <?php if ($data->status_betta == 1) { ?>
                                                                            <tr>
                                                                                <td>Harga Betta</td>
                                                                                <td>:</td>
                                                                                <td><?= rupiah($data->price_betta) ?></td>
                                                                            </tr>
                                                                        <?php } else if ($data->status_betta == 0) { ?>
                                                                            <tr>
                                                                                <td>Harga Betta</td>
                                                                                <td>:</td>
                                                                                <td><b><i>SOLD OUT</i></b></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                        <tr>
                                                                            <td>Diperbaharui</td>
                                                                            <td>:</td>
                                                                            <td><?= date('d/m/Y H:i', strtotime($data->created_betta)) ?></td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 text-center mt-1">
                                                                <label style="color:red"><i> Image of <?= $data->nama_betta ?></i></label>
                                                                <a href="<?= base_url() . 'assets/image/betta/' . ($data->image_betta == null ? 'default.jpg' : $data->image_betta) ?>" target="_blank">
                                                                    <img src="<?= base_url() . 'assets/image/betta/' . ($data->image_betta == null ? 'default.jpg' : $data->image_betta) ?>" style="width:100%">
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="<?= site_url('admin/product/update/' . $data->id_betta) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="<?= site_url('admin/product/delete/' . $data->id_betta) ?>" class="btn btn-danger btn-sm" onclick="confirm('Yakin Menghapus Data Betta ini ?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>