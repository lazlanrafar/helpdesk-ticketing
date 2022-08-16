<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form action="{{ route('pengaduan.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id_pelapor" value="{{ request()->session()->get('user')['id'] }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Tambah Pengaduan
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="id_teknisi">Teknisi</label>
                            <select name="id_teknisi" id="id_teknisi" class="form-control" required>
                                <option value="">-- Pilih Teknisi --</option>
                                @foreach ($list_karyawan as $l)
                                    <option value="{{ $l->id }}">
                                        {{ $l->nama }} - {{ $l->jabatan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="jenis_pengaduan">Jenis Pengaduan</label>
                            <select name="jenis_pengaduan" id="jenis_pengaduan" class="form-control" required>
                                <option value="">-- Pilih Jenis Pengaduan --</option>
                                @foreach ($list_jenis_pengaduan as $l)
                                    <option value="{{ $l }}">
                                        {{ $l }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="id_sub_kategori">Kategori</label>
                            <select name="id_sub_kategori" id="id_sub_kategori" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($list_sub_kategori as $l)
                                    <option value="{{ $l->id }}">
                                        {{ $l->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="id_lokasi">Lokasi</label>
                            <select name="id_lokasi" id="id_lokasi" class="form-control" required>
                                <option value="">-- Pilih Lokasi --</option>
                                @foreach ($list_lokasi as $l)
                                    <option value="{{ $l->id }}">
                                        {{ $l->nama_lokasi }},
                                        {{ $l->departemen }},
                                        {{ $l->sub_departemen }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="tanggal_pengaduan">Tanggal Pengaduan</label>
                            <input type="date" class="form-control" id="tanggal_pengaduan"
                                placeholder="Masukan Tanggal Pengaduan" name="tanggal_pengaduan" required />
                        </div>
                        <div class="form-group col-12">
                            <label for="troubleshooting">Troubleshooting</label>
                            <textarea class="form-control" name="troubleshooting" id="troubleshooting" placeholder="Masukan Troubleshooting"
                                rows="5" required></textarea>
                        </div>
                        <div class="form-group col-12">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Masukan Keterangan" rows="5"
                                required></textarea>
                        </div>

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
