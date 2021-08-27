<div class="row mb-5">
    <?php foreach ($row->result() as $val => $betta) { ?>
        <div class="col-sm-3 mt-2">
            <div class="card border-left-primary">
                <div class="card-body">
                    <table border="0" width="100%">
                        <tr>
                            <td width="40%" class="text-center" rowspan="4">
                                <img src="<?= base_url() . 'assets/image/betta/' . ($betta->image_betta == null ? 'default.jpg' : $betta->image_betta) ?>" style="width:100px;height:100px">
                            </td>
                            <td width="60%" class="text-center">
                                <b><i><?= $betta->kode_betta ?></i></b>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><span><?= $betta->nama_betta ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><span><?= usia($betta->birth_betta) . ' / ' . '(' . $betta->gen_betta . ')'  ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><span><?= $betta->status_betta == 0 ? '<b><i>SOLD OUT</i></b>' : '<b><i>READY</i></b>' ?></span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php } ?>
</div>