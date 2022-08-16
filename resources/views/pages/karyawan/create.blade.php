<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('lokasi.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Tambah Lokasi
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="lokasi">Nama Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Masukan Lokasi"
                            name="nama_lokasi" required />
                    </div>
                    <div class="form-group">
                        <label>Departemen</label>
                        <input type="text" class="form-control" id="Departemen" placeholder="Masukan Departemen"
                            name="departemen" required />
                    </div>

                    <div class="form-group">
                        <label for="sub_departemen">Sub Departemen</label>
                        <input type="text" class="form-control" id="sub_departemen"
                            placeholder="Masukan Sub Departemen" name="sub_departemen" required />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
