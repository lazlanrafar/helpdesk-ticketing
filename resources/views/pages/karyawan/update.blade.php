<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdate{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('karyawan.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdate{{ $item->id }}Label">
                        Update Karyawan
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan nama"
                            name="nama" required value="{{ $item->nama }}" />
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" placeholder="Masukan jabatan"
                            name="jabatan" required value="{{ $item->jabatan }}" />
                    </div>
                    <div class="form-group">
                        <label for="lokasi"> Lokasi</label>
                        <select name="id_lokasi" id="lokasi" class="form-control" required>
                            <option value="">-- Pilih Lokasi --</option>
                            @foreach ($list_lokasi as $it)
                                <option value="{{ $it->id }}" {{ $it->id == $item->id_lokasi ? 'selected' : '' }}>
                                    {{ $it->nama_lokasi }},
                                    {{ $it->departemen }},
                                    {{ $it->sub_departemen }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="5" placeholder="Masukan Alamat">{{ $item->alamat }}</textarea>
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
