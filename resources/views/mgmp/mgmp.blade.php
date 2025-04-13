<!DOCTYPE html>
        <html lang="en">

        <head>
            @include('template.headerr')
            <title>Santri | {{auth()->user()->level}} | MGMP </title>
        </head>

        <body>

            <!-- Preloader start -->
            @include('template.topbarr')
            <!-- Header end -->

            <!-- Sidebar start -->
            @include('template.sidebarr')
            <!-- Sidebar end -->

            <!-- Content body start -->
            <div class="content-body">
                <div class="container-fluid">
                    <!-- Add Project -->
                        <div class="row page-titles mx-0">
                            <div class="col-sm-6 p-md-0">
                                <div class="welcome-text">
                                    <h4>Hi, welcome back!</h4>
                                <p class="mb-0">Data MGMP</p>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:void(0)">MGMP</a></li>
                            </ol>
                        </div>
                    </div>
                    <!-- row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">MGMP</h4>
                                    <div class="text-right">
                                        <div class="input-group search-area right d-lg-inline-flex d-none">
    <input id="searchInput" type="text" class="form-control" placeholder="Cari ID SK ...">
                                        </div>


    

                                        <a href="/add_mgmp" class="btn btn-success" title="Add">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <strong>Success!</strong> {{ session('success') }}
                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span></button>
                                    </div>
                                    @endif
                                    @if(session('update_success'))
                                    <div class="alert alert-warning alert-dismissible fade show">
                                        <strong>Success!</strong> {{ session('update_success') }}
                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span></button>
                                    </div>
                                    @endif
                                    <div class="table-responsive" id="uptTable">
     <table class="table table-responsive-md">
    <thead>
        <tr>
            <th><strong>No SK</strong></th>
            <th><strong>NIP</strong></th>
            <th><strong>File Draft</strong></th>
            <th><strong>Status</strong></th>
            <th style="text-align: center;"><strong>Opsi</strong></th>
        </tr>
    </thead>
    <tbody id="mutasiTable">
        @foreach($users as $m)
        <tr>
            <td>{{ $m->id_sk }}</td>
            <td>{{ $m->nip }}</td>
            <td>
                @if($m->file_draft)
                    <a href="{{ asset('storage/' . $m->file_draft) }}" target="_blank">Lihat Draft</a>
                @else
                    <span class="text-danger">Tidak ada file</span>
                @endif
            </td>
           
            <td>
                <span class="badge 
                {{ $m->status == 'proses' ? 'badge-warning' : ($m->status == 'gagal' ? 'badge-danger' : 'badge-success') }}">
                    {{ $m->status }}
                </span>
            </td>
            <td class="text-center">
                <div class="btn-group">
                    <a href="{{ url('/mgmp/' . $m->id_sk . '/edit_mgmp') }}" class="btn btn-warning btn-sm mx-1" title="Edit">
                        <i class="fa fa-pencil"></i>
                    </a>
                </div>
                <form action="{{ route('mgmp.destroy', $m->id_sk) }}" method="POST" class="d-inline delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm mx-1 delete-btn" data-id="{{ $m->id_sk }}" title="Hapus">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>




                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                    <!-- Pagination links -->
                                    {{ $users->links() }}
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content body end -->

            <!-- Footer start -->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="/home" target="_blank">Deo Andreas</a> 2024</p>
                </div>
            </div>
            <!-- Footer end -->

            <!-- Main wrapper end -->

            <!-- Scripts -->
            <!-- Required vendors -->
            @include('template.scripts')

        <script>
document.addEventListener("DOMContentLoaded", function () {
    let searchInput = document.getElementById('searchInput');
    let tableRows = document.querySelectorAll('#mutasiTable tr');

    searchInput.addEventListener('input', function () {
        let searchValue = this.value.toLowerCase();

        tableRows.forEach(row => {
            let idMutasi = row.cells[0].textContent.toLowerCase();
            
            if (idMutasi.includes(searchValue)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
});
</script>



            <!-- Sweet Alert -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                let form = this.closest("form");
                let id = this.getAttribute("data-id");

                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>

        </body>
        </html>