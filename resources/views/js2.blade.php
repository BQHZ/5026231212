<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function hello() {        
            alert("Selamat Anda Mendapat 1 Miliyar");
        }
        function validasi() {
            var nrp = document.getElementById("nrp").value;
            var nama = document.getElementById("nama").value;
            if (nrp.length == 0) {
                swal("Pesan!", "NRP harus diisi!", "error");
                document.getElementById("nrp").focus();
                return false;
            }else if (nrp.length != 10) {
                swal("Pesan!", "NRP harus 10 digit!", "error");
                document.getElementById("nrp").focus();
                return false;
            }else if(nama.length == 0) {
                swal("Pesan!", "Nama harus diisi!", "error");
                document.getElementById("nama").focus();    
                return false;
            }
            return true; 
        }
    </script>
</head>
<body>
    <div class="container">
        <form id="frmDaftar" method="get" action="https://google.co.id" onsubmit="return validasi();">
            NRP : 
            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Isikan 10 digit NRP, harus diisi">
            <br>
            Nama :
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan nama, harus diisi">
            <br>
            <input type="submit" class="btn btn-success" value="Daftar">
        </form>
    </div>
</body>
</html>