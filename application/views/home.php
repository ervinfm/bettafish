<div class="row" style="color:black">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                Home
            </div>
            <div class="card-body">
                <?php if ($this->session->flashdata('return')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $this->session->flashdata('return') ?>
                    </div>
                <?php } ?>
                <h4 style="color:black">Silahkan Masukkan Kode Bettafish untuk melihat detail ...</h4>
                <form action="" method="get">
                    <div class="row mt-3">
                        <div class="col-sm-2">
                            <label style="font-size:18px"> Kode Betta Fish * </label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control selectpicker" name="s" data-live-search="true" required>
                                <option value=""></option>
                                <?php foreach ($select->result() as $val => $sel) { ?>
                                    <option value="<?= $sel->kode_betta ?>" <?= $sel->kode_betta == @$_GET['s'] ? 'selected' : null ?>><?= $sel->kode_betta . '-' . $sel->nama_betta ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-info btn-block float-right"> Cek Detail </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if ($row == TRUE) { ?>
        <div class="col-sm-12 mt-3">
            <div class="card mb-4 py-3 border-left-success">
                <div class="card-header">
                    <h3> Detail Bettafish <?= $_GET['s'] ?></h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <td width="25%">ID Betta</td>
                                        <td width="5%">:</td>
                                        <td><?= $row->id_betta ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kode Betta</td>
                                        <td>:</td>
                                        <td><?= $row->kode_betta ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Betta</td>
                                        <td>:</td>
                                        <td><?= $row->nama_betta ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Betta</td>
                                        <td>:</td>
                                        <td><?= $row->type_betta ?></td>
                                    </tr>
                                    <tr>
                                        <td>Umur Betta</td>
                                        <td>:</td>
                                        <td><?= usia($row->birth_betta) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender Betta</td>
                                        <td>:</td>
                                        <td><?= $row->gen_betta == 'M' ? 'Male' : 'Female' ?></td>
                                    </tr>
                                    <?php if ($row->status_betta == 1) { ?>
                                        <tr>
                                            <td>Harga Betta</td>
                                            <td>:</td>
                                            <td><?= rupiah($row->price_betta) ?></td>
                                        </tr>
                                    <?php } else if ($row->status_betta == 0) { ?>
                                        <tr>
                                            <td>Harga Betta</td>
                                            <td>:</td>
                                            <td><b><i>SOLD OUT</i></b></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>Diperbaharui</td>
                                        <td>:</td>
                                        <td><?= date('d/m/Y H:i', strtotime($row->created_betta)) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <label style="color:red"><i> Image of <?= $row->nama_betta ?></i></label>
                            <a href="<?= base_url() . 'assets/image/betta/' . ($row->image_betta == null ? 'default.jpg' : $row->image_betta) ?>" target="_blank">
                                <img src="<?= base_url() . 'assets/image/betta/' . ($row->image_betta == null ? 'default.jpg' : $row->image_betta) ?>" style="width:100%">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>
</div>