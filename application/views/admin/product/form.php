<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-sm-10">
                        <h4 class="m-0 font-weight-bold text-primary"><?= ucfirst($this->uri->segment(3)) ?> Data Betta Fish Mabes</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="<?= site_url('admin/product') ?>" class="btn btn-info btn-sm btn-block"><i class="fa fa-bookmark"></i> Data Betta Fish</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/product/proses') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <input type="hidden" name="id" value="<?= $row->id_betta ?>">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Kode Betta *</label>
                                <input type="text" name="b_kode" class="form-control" value="<?= @$row->kode_betta ?>" placeholder="Kode Betta Fish ..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Betta *</label>
                                <input type="text" name="b_nama" class="form-control" value="<?= @$row->nama_betta ?>" placeholder="Nama Betta Fish ..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jenis Betta *</label>
                                <input type="text" name="b_jenis" class="form-control" value="<?= @$row->type_betta ?>" placeholder="Jenis Betta Fish ..." required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Tgl Lahir Betta *</label>
                                <input type="date" name="b_lahir" class="form-control" value="<?= @$row->birth_betta ?>" placeholder="Tanggal Lahir Betta Fish ..." required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Gender Betta *</label>
                                <select name="b_gender" class="form-control" required>
                                    <option value="">- pilih -</option>
                                    <option value="M" <?= @$row->gen_betta == 'M' ? 'selected' : null ?>>Male</option>
                                    <option value="F" <?= @$row->gen_betta == 'F' ? 'selected' : null ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Harga Betta *</label>
                                <input type="number" name="b_harga" class="form-control" value="<?= @$row->price_betta ?>" placeholder="Pricing Betta Fish ..." required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Status Betta *</label>
                                <select name="b_status" class="form-control" required>
                                    <option value="">- pilih -</option>
                                    <option value="1" <?= @$row->status_betta == 1 ? 'selected' : null ?>>Ready</option>
                                    <option value="0" <?= @$row->status_betta == 0 ? 'selected' : null ?>>Sold Out</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Foto Betta </label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-sm btn-success btn-block" name="<?= $this->uri->segment(3) ?>"> Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>