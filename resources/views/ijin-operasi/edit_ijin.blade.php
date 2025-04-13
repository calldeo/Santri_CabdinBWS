<!DOCTYPE html>
<html lang="id">

<head>
    @include('template.headerr')
    <title>Santri | {{ auth()->user()->level }} | Edit Ijin</title>
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
                        <h3 class="text-center mb-4">Edit Data Ijin</h3>

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form action="/ijin/{{ $ijin->id_ijin }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label"><strong>File Pengajuan</strong></label>
                                <input type="file" class="form-control @error('file_pengajuan') is-invalid @enderror" name="file_pengajuan">
                                @if($ijin->file_pengajuan)
                                    <p class="mt-1"><a href="{{ asset('storage/' . $ijin->file_pengajuan) }}" target="_blank">Lihat File</a></p>
                                @endif
                                @error('file_pengajuan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><strong>Tracking</strong></label>
                                <select class="form-select @error('tracking') is-invalid @enderror" name="tracking" required>
                                    <option value="pengajuan" {{ $ijin->tracking == 'pengajuan' ? 'selected' : '' }}>Pengajuan</option>
                                    <option value="validasi" {{ $ijin->tracking == 'validasi' ? 'selected' : '' }}>Validasi</option>
                                    <option value="gagal" {{ $ijin->tracking == 'gagal' ? 'selected' : '' }}>Gagal</option>
                                    <option value="selesai" {{ $ijin->tracking == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                </select>
                                @error('tracking')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
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
