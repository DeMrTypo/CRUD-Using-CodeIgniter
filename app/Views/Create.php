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
    <form action="/Home/tambah" method="post">
        <div class="container-fluid-xl bg-light p-4 pb-5 pt-5 rounded ">
            <h2 class="pb-3">
                <center>Create Data</center>
            </h2>
            <label for="nim" class="text-monoscape">Nim:</label><br>
            <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukkan Nim Anda" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="9" required><br>
            <label for="namalengkap">Nama Lengkap :</label><br>
            <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama " value=""><br>
            <label for="kota">Kota Asal :</label><br>
            <input type="text" class="form-control" id="kota" name="kota" value="" placeholder="Masukkan Kota "><br>
            <label for="ttl">Tanggal Lahir:</label><br>
            <input type="date" class="form-control" placeholder="yyyy-mm-dd" id="ttl" name="ttl">
            <br>
            <label for="naortu">Nama Orang Tua :</label><br>
            <input type="text" class="form-control" id="naortu" name="naortu" value="" placeholder="Masukkan Nama Orang Tua "><br>
            <label for="alortu">Alamat Orang Tua :</label><br>
            <input type="text" class="form-control" id="alortu" name="alortu" value="" placeholder="Masukkan Alamat Orang tua "><br>
            <label for="kode">Kode Pos :</label><br>
            <input type="text" class="form-control" id="kode" name="kode" value="" placeholder="Masukkan Kode Pos"><br>
            <label for="notelp">Nomor telepon :</label><br>
            <input type="number" class="form-control" id="notelp" name="notelp" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="12" placeholder="Masukkan No Telepon"><br>
            <label for="status">Status :</label>
            <select name="status" id="status">
                <option value="tama">TAMA</option>
                <option value="wreda">WREDA</option>
            </select>
            <br><br>
            <button type='submit' ; class="button rounded border-0 " style="width: 100%">
                <center>Create</center>
            </button>

        </div>
    </form>

</body>

</html>