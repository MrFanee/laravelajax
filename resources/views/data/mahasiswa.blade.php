<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>mahasiswa</title>
</head>

<body>

    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <label>REGISTER</label>
                        <hr>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan">
                            </div>

                            <div class="form-group">
                                <label>jenis Kelamin</label>
                                <select name="jk" class="form-control" id="jk">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                            <button class="btn btn-register btn-block btn-success">Submit</button>


                    </div>
                </div>

                <div class="text-center" style="margin-top: 15px">
                    Kembali ke beranda <a href="{{ route('dashboard.index')}}">Silahkan Klik</a>
                </div>

            </div>
        </div>
    </div>

</body>
</html>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

        <script>
            $(document).ready(function () {

                $(".btn-success").click(function () {

                    var nama =$("#nama").val();
                    var jurusan =$("#jurusan").val();
                    var jk =$("#jk").val();
                    var token = $("meta[name='csrf-token']").attr("content");

                    if (nama.length == "") {
                        Swal.fire({
                            type: 'warning',
                            title: 'Oops...',
                            text: 'Nama Wajib Diisi !'
                        });

                    } else if (jurusan.length == "") {
                        Swal.fire({
                            type: 'warning',
                            title: 'Oops...',
                            text: 'jurusan Wajib Diisi !'
                        });
                    } else if (jurusan.length == "") {
                            Swal.fire({
                                type: 'warning',
                                title: 'Oops...',
                                text: 'jenis kelamin Wajib Diisi !'
                            });
                    } else {
                        // ajax
                        $.ajax({
                            url: "{{ route('mahasiswa.store')}}",
                            type: "POST",
                            cache: false,
                            data: {
                                "nama": nama,
                                "jurusan": jurusan,
                                "jk": jk
                            },

                            success:function(response){
                                if(response.success) {
                                        Swal.fire({
                                        type: 'success',
                                        title: 'Input data Berhasil!'
                                    });
                                } else {
                                        Swal.fire({
                                        type: 'error',
                                        title: 'input Data Gagal!',
                                        text: 'silahkan coba lagi!'
                                    });
                                }
                                console.log(response);
                            },

                            error:function(respose) {
                                    Swal.fire({
                                    type: 'error',
                                    title: 'Opps!',
                                    text: 'server error!'
                                });
                            }
                        })


                    }

                });
            });
    </script>
