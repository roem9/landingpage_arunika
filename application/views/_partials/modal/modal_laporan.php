<div class="modal modal-blur fade" id="downloadLaporan" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Download Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url()?>laporan/downloadLaporan" method="post" target="_blank">
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <select name="laporan" class="form-control form-control-sm" required>
                            <option value="">Pilih Laporan</option>
                            <option value="Penjualan">Penjualan</option>
                            <option value="Penjualan Artikel">Penjualan Artikel</option>
                            <option value="Stok Artikel">Stok Artikel</option>
                            <option value="Penyetokan">Penyetokan</option>
                        </select>
                        <label class="col-form-label">Pilih Laporan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="tgl_awal" class="form-control form-control-sm" disabled>
                        <label class="col-form-label">Tgl Awal</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="tgl_akhir" class="form-control form-control-sm" disabled>
                        <label class="col-form-label">Tgl Akhir</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn me-3" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success">Download</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("[name='laporan']").change(function(){
        let laporan = $(this).val();
        if(laporan == "Stok Artikel"){
            $("[name='tgl_awal']").prop("disabled", true)
            $("[name='tgl_akhir']").prop("disabled", true)
            $("[name='tgl_awal']").prop("required", false)
            $("[name='tgl_akhir']").prop("required", false)
        } else {
            $("[name='tgl_awal']").prop("disabled", false)
            $("[name='tgl_akhir']").prop("disabled", false)
            $("[name='tgl_awal']").prop("required", true)
            $("[name='tgl_akhir']").prop("required", true)
        }
    })
</script>