<!DOCTYPE html>
<html lang="id">

<head>
    @include('template.headerr')
    <title>Santri | {{ auth()->user()->level }} | Tambah</title>
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
                        <h3 class="text-center mb-4">Tambah Data</h3>
                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        <form action="/mgmp/store" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="mb-3">
                            <label for="nip" class="form-label"><strong>NIP</strong></label>
                            <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP" required>
                            @error('nip')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                            <div class="mb-3">
                                <label class="form-label"><strong>File Draft</strong></label>
                                <input type="file" class="form-control" name="file_draft" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Submit</button>
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