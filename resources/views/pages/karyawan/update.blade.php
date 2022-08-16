<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('lokasi.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
                        Tambah Lokasi
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="lokasi">Nama Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Masukan lokasi"
                            name="nama_lokasi" value="{{ $item->nama_lokasi }}" required />
                    </div>
                    <div class="form-group">
                        <label for="departemen">Departemen</label>
                        <input type="text" class="form-control" id="departemen" placeholder="Masukan departemen"
                            name="departemen" value="{{ $item->departemen }}" required />
                    </div>
                    <div class="form-group">
                        <label for="sub_departemen">Sub Departemen</label>
                        <input type="text" class="form-control" id="sub_departemen"
                            placeholder="Masukan sub departemen" name="sub_departemen"
                            value="{{ $item->sub_departemen }}" required />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
