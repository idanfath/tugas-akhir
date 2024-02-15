@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-body flex">
                        <div>
                            <h4 class="modal-title mb-2">Daftar Item</h4>
                            <form class="d-flex row g-3" action="{{ route('admin.perpage.post') }}" method="POST">
                                @csrf
                                <div class="col-auto">
                                    <input type="number" id="perpageNum" name="per_page" value="{{ $perPage }}"
                                        placeholder="Banyak Data" class="form-control" style="width:100px;" />
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">refresh list</button>
                                </div>
                                <div class="col-auto">
                                    <a href="/admin-add" class="btn btn-success">Tambah Data</a>
                                </div>

                            </form>
                        </div>
                        <table class="table table-striped align-middle">
                            <thead class="table-dark">
                                <tr class="align-middle">
                                    <th>ID</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class="odd:bg-slate-200 even:bg-slate-300 align-baseline">
                                        <td>{{ $post['id'] }}</td>
                                        <td>
                                            <a style="cursor: pointer;" onclick="zoomimage(event)">
                                                <img class="img-thumbnail" style="max-height: 120px"
                                                    src="{{ asset('storage/' . $post['image']) }}"
                                                    alt="{{ $post['name'] }}">
                                            </a>

                                        </td>
                                        <td>{{ $post['name'] }}</td>
                                        <td>{{ $post['type'] }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-sm btn-danger" value="{{ $post['id'] }}"
                                                    onclick="deleteCustomer(event)">HAPUS</a>
                                                {{-- deleteCustomer(event) --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function zoomimage(event) {
        event.preventDefault();
        const img = event.target.getAttribute("src");
        swal({
            icon: img,
            buttons: false,
            timer: 10000
        })
    }

    function deleteCustomer(event) {
        event.preventDefault();
        const id = event.target.getAttribute("value");
        const perPage = document.getElementById("perpageNum").value;

        swal({
                title: "Yakin?",
                text: "Data yang dihapus tidak bisa dipulihkan.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })

            .then((willDelete) => {
                if (willDelete) {
                    fetch(`api/deletes/${id}`, {
                        method: 'DELETE'
                    })
                    if (window.location.search.includes(`per_page=${perPage}`)) {
                        window.location.reload(); // Simply reload the page with existing parameters
                    } else {
                        window.location.href = window.location.href + `?per_page=${encodeURIComponent(perPage)}`;
                    }
                } else {

                }
            });
    }
</script>

<style>
</style>
