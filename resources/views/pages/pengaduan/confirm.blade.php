<!-- Modal -->
<div class="modal fade" id="formConfirm{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formConfirm{{ $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/pengaduan/close/{{ $item->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formConfirm{{ $item->id }}Label">
                        Konfirmasi Pengaduan
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="troubleshooting">Troubleshooting</label>
                            <textarea class="form-control" name="troubleshooting" id="troubleshooting" placeholder="Masukan troubleshooting"
                                rows="5" required></textarea>
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
