<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('sub-kategori.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
                        Tambah Sub Kategori
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_kategori">Nama Kategori</label>
                        <select name="id_kategori" id="id_kategori" class="form-control" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($list_kategori as $j)
                                <option value="{{ $j->id }}"
                                    {{ $item->id_kategori == $j->id ? 'selected' : '' }}>
                                    {{ $j->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_kategori">Nama Sub Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori"
                            placeholder="Masukan nama kategori" name="nama_kategori" required
                            value="{{ $item->nama_kategori }}" />
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
