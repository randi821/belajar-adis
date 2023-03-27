<form action="{{ route('admin') }}/edit/{{ $aduans->id }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12 my-3">
            <img src="image/aduan/{{ $aduans->image }}" alt="image/aduan/{{ $aduans->image }}" class="w-100">
        </div>
        <div class="col-md-3 my-3">
            <label>Nama :</label>
            <p>{{ $aduans->nama }}</p>
        </div>
        <div class="col-md-3 my-3">
            <label>NIK :</label>
            <p>{{ $aduans->nik }}</p>
        </div>
        <div class="col-md-3 my-3">
            <label>Nomor Telepon :</label>
            <p>{{ $aduans->no_telp }}</p>
        </div>
        <div class="col-md-3 my-3">
            <label>Tanggal Aduan :</label>
            <p>{{ $aduans->created_at }}</p>
        </div>
        <div class="col-md-6 my-3">
            <label>Lokasi :</label>
            <p>{{ $aduans->lokasi }}</p>
        </div>
        <div class="col-md-6 my-3">
            <label>Aduan :</label>
            <p>{{ $aduans->aduan }}</p>
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