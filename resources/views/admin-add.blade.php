@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mb-4 mt-1">
                    <div class="card-body">
                        <h4 class="modal-title mb-3 mt-1">Tambah Item</h4>
                        <form method="POST" action="{{ route('admin.add.data') }}" id="myform" enctype="multipart/form-data"
                            class="d-grid row gap-2 justify">
                            @csrf
                            <div>
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Masukkan nama item" required>
                            </div>
                            <div>
                                <label for="type" class="mb-1">Jenis</label>
                                <select id="type" class="form-control" name="type" required>
                                    <option value="" disabled selected>Pilih jenis item</option>
                                    <option value="carousel">Carousel</option>
                                    <option value="gallery">Gallery</option>
                                    <option value="banner">Banner</option>
                                </select>
                            </div>
                            <div>
                                <label for="file" class="mb-1">Foto</label>
                                <br>
                                <input type="file" class="form-control" id="file"
                                    accept="image/png, image/gif, image/jpeg, image/webp" name="image" required>
                            </div>
                            <div class="col-auto mt-3 d-flex gap-2" style="justify-self:center;">
                                <a class="btn btn-primary" href="/admin" {{-- onclick="window.history.go(-1); return false; --}}">Kembali</a>
                                <a onclick="checkconfirm(event)" class="btn btn-success">Tambah Data</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

<script>
    function checkconfirm() {
        const form = document.getElementById("myform");

        // Check for required fields
        const requiredInputs = form.querySelectorAll('[required]');
        for (const input of requiredInputs) {
            if (!input.value) {
                // Prevent form submission if any required field is empty
                event.preventDefault();
                return; // Stop execution immediately
            }
        }

        swal({
                title: "Sukses!",
                text: "Data berhasil ditambahkan.",
                icon: "success",
                buttons: false,
                timer: 2000
            })
        document.getElementById("myform").submit();
    }
</script>

<style>

</style>
