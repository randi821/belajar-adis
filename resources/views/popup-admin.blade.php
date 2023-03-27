<form action="{{ route('admin') }}/edit/{{ $aduans->id }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $aduans->nama }}" class="form-control my-3">
        </div>
        <div class="col-md-12">
            <label>Aduan</label>
            <input type="text" name="aduan" value="{{ $aduans->aduan }}" class="form-control my-3">
        </div>
        <div class="col-md-12 d-flex justify-content-end mt-5">
            @if($aduans->status == 0)
                <button class="btn btn-primary">Ubah menjadi sedang dikerjakan</button>
            @elseif($aduans->status == 1)
                <button class="btn btn-primary">Ubah menjadi selesai</button>
            @else
                <button class="d-none"></button>
            @endif
        </div>
    </div>
</form>