<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<meta charset="utf-8">

<body>
    <style>
        html {
            height: 100%;
            font-family: monospace;
            text-decoration: none;
            color: #666;
            text-transform: uppercase;
            font-weight: 600;
            transition: 0.5s;
        }

        .bg {
            animation: slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
            bottom: 0;
            left: -50%;
            opacity: .5;
            position: fixed;
            right: -50%;
            top: 0;
            z-index: -1;
        }

        .bg2 {
            animation-direction: alternate-reverse;
            animation-duration: 4s;
        }

        .bg3 {
            animation-duration: 5s;
        }

        .content {
            background-color: rgba(255, 255, 255, .8);
            border-radius: .25em;
            box-shadow: 0 0 .25em rgba(0, 0, 0, .25);
            box-sizing: border-box;
            left: 50%;
            padding: 10vmin;
            position: fixed;
            text-align: center;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            font-family: lato;
        }

        @keyframes slide {
            0% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(25%);
            }
        }

        body {
            font-family: lato;
            font-size: 19px;
            margin: 0;
        }

        table {
            width: 50%;
            margin: 30px auto;
            border-collapse: collapse;
            text-align: left;
        }

        tr {
            border-bottom: 1px solid #cbcbcb;
        }

        th,
        td {
            border: none;
            height: 30px;
            padding: 2px;
        }

        tr:hover {
            background: #F5F5F5;
        }

        form {
            width: 45%;
            margin: 50px auto;
            text-align: left;
            padding: 20px;

        }

        .menu li a {
            text-decoration: none;
            color: #666;
            text-transform: uppercase;
            font-weight: 600;
            transition: 0.5s;
        }

        .input-group {
            margin: 10px 0px 10px 0px;
        }

        .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
        }

        .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        .btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5F9EA0;
            border: none;
            border-radius: 5px;
        }

        .edit_btn {
            text-decoration: none;
            padding: 2px 5px;
            background: #2E8B57;
            color: white;
            border-radius: 3px;
        }

        .del_btn {
            text-decoration: none;
            padding: 2px 5px;
            color: white;
            border-radius: 3px;
            background: #800000;
        }

        .msg {
            margin: 30px auto;
            padding: 10px;
            border-radius: 5px;
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
            width: 50%;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 15px 25px;
            font-size: 24px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {
            background-color: #3e8e41
        }

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-2 sticky-top " style="font-weight: 600">
        <ul class=navbar-nav pl-2>
            <li class="nav-item pr-2 ">
                <a class="nav-link" href=<?php echo site_url('Home/index') ?>>Home</a>
            </li>
            <li class="nav-item pr-2">
                <a class="nav-link" href=<?php echo site_url('Home/create') ?>>Create</a>
            </li>
            <li class="nav-item pr-2">
                <a class="nav-link" href=<?php echo site_url('Home/update') ?>>Update</a>
            </li>
            <li class="nav-item pr-2">
                <a class="nav-link" href=<?php echo site_url('Home/delete') ?>>Delete</a>
            </li>
            <li class="nav-item pr-2">
                <a class="nav-link" href=<?php echo site_url('Home/view') ?>>View</a>
            </li>
        </ul>
    </nav>


    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    </div>
    <div class="p-5 rounded ">
        <table class="container-fluid bg-light rounded table-responsives-hover-fl p-5">
            <h1 class="align-midle">
                DELETE TABEL MAHASISWA
            </h1>
            <thead>
                <tr>
                    <th class="pr-5">No</th>
                    <th class="pr-5">Nim</th>
                    <th class="pr-5">Nama</th>
                    <th class="pr-5">Kota</th>
                    <th class="pr-5">Tanggal Lahir</th>
                    <th class="pr-5">Nama Ortu</th>
                    <th class="pr-5">Alamat Ortu</th>
                    <th class="pr-5">Kode Pos</th>
                    <th class="pr-5">No Telpon</th>
                    <th class="pr-5">Status</th>
                </tr>
            </thead>
            <tbody class="pr-5 align-midle">
                <tr>
                    <?php
                    $angka = 1;
                    foreach ($mhs as $row) : {
                            echo "<td>" . $angka . "</td>" . "<td>" . $row['NIM'] . "<td>" . $row['Nama'] . "<td>" . $row['Kota_Asal'] . "<td>" . $row['Tanggal_Lahir'] . "<td>" . $row['Nama_Ortu'] . "<td>" . $row['Alamat_Ortu'] . "<td>" . $row['Kode_Pos'] . "<td>" . $row['NoTelp'] . "<td>" . $row['Status'] . "<tr>";
                            echo "<br/>";

                            $angka++;
                        }
                    ?>
                    <?php endforeach ?>
                </tr>
            </tbody>
        </table>


    </div>
    <form action="/Home/DeleteController" method="post">
        <div class="container-fluid-xl bg-dark text-light p-4 pb-5 pt-5 rounded ">
            <h2 class="pb-3">
                <center>Update Data</center>
            </h2>
            <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukkan Nim yang ingin Anda hapus" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" required><br>
            <div class="popup" onclick="return confirm('Apakah anda yakin utuk menghapus data ini ?')"><button type='submit' ; class="btn-danger text-center bg-danger rounded border-0 ">
                    <center>Hapus</center>
                </button>


            </div>
    </form>

</body>

</html>