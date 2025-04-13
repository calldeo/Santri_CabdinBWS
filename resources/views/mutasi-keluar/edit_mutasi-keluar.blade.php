<!DOCTYPE html>
<html lang="id">

<head>
    @include('template.headerr')
    <title>Santri | {{ auth()->user()->level }} | Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-light">
    @include('template.topbarr')
    @include('template.sidebarr')

    <div class="content-body">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <div class="form-container">
                        <h3 class="text-center mb-4">Edit Data</h3>
                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        <form action="/mutasi-keluar/{{ $mutasi->id_mut_keluar }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label"><strong>File SKK</strong></label>
                                <input type="file" class="form-control" name="file_skk">
                                @if($mutasi->file_skk)
                                    <p class="mt-1"><a href="{{ asset('storage/' . $mutasi->file_skk) }}" target="_blank">Lihat SKK</a></p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><strong>File NISN</strong></label>
                                <input type="file" class="form-control" name="file_nisn">
                                @if($mutasi->file_nisn)
                                    <p class="mt-1"><a href="{{ asset('storage/' . $mutasi->file_nisn) }}" target="_blank">Lihat NISN</a></p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><strong>File Raport</strong></label>
                                <input type="file" class="form-control" name="file_raport">
                                @if($mutasi->file_raport)
                                    <p class="mt-1"><a href="{{ asset('storage/' . $mutasi->file_raport) }}" target="_blank">Lihat Raport</a></p>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><strong>File SKM</strong></label>
                                <input type="file" class="form-control" name="file_skm">
                                @if($mutasi->file_skm)
                                    <p class="mt-1"><a href="{{ asset('storage/' . $mutasi->file_skm) }}" target="_blank">Lihat SKM</a></p>
                                @endif
                            </div>
                            <div class="mb-3">
    <label class="form-label"><strong>Status</strong></label>
    <select class="form-select" name="status" required>
        <option value="proses" {{ $mutasi->status == 'proses' ? 'selected' : '' }}>proses</option>
        <option value="selesai" {{ $mutasi->status == 'selesai' ? 'selected' : '' }}>selesai</option>
        <option value="gagal" {{ $mutasi->status == 'gagal' ? 'selected' : '' }}>gagal</option>
    </select>
</div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-secondary" onclick="window.history.back()">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('template.scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>