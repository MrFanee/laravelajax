

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "connect.php";
            $no=1;
            $query=mysqli_query($connect, "SELECT * FROM Mahasiswa");
            while ($result=mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $result['nama']; ?>
                        </td>
                        <td>
                            <?php echo $result['jurusan']; ?>
                        </td>
                        <td>
                            <?php echo $result['jk']; ?>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>


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
    <br>
    <div class="container">
        <h2 class="alert alert-success text-center">
        Input dan Tampil Data dengan Ajax Jquery
        </h2>
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form id="form-input">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    placeholder="Input Jurusan">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Jenis Kelamin</label>
                                <select name="jk" class="form-control" id="jk">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                            <button type="submit" id="tombol-simpan" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div id="tabeldata">

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

                $(".btn-primary").click(function () {

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
