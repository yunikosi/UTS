<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Group C U-23</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="formInput">
        <form id="dataForm">
            <label for="namaNegara">Nama Negara</label>
            <select name="Negara" id="namaNegara">
                <option value="Uzbekistan U-23">Uzbekistan U-23</option>
                <option value="Vietnam U-23">Vietnam U-23</option>
                <option value="Kuwait U-23">Kuwait U-23</option>
                <option value="Malaysia U-23">Malaysia U-23</option>
            </select>
            <br>
            <br>
            <label for="jumlahPertandingan">Jumlah Pertandingan</label>
            <input type="text" name="P" id="jumlahPertandingan">
            <br>
            <br>
            <label for="jumlahMenang">Jumlah Menang</label>
            <input type="text" name="M" id="jumlahMenang">
            <br>
            <br>
            <label for="jumlahSeri">Jumlah Seri</label>
            <input type="text" name="S" id="jumlahSeri">
            <br>
            <br>
            <label for="jumlahKalah">Jumlah Kalah</label>
            <input type="text" name="K" id="jumlahKalah">
            <br>
            <br>
            <label for="jumlahPoin">Jumlah Poin</label>
            <input type="text" name="Poin" id="jumlahPoin">
            <br>
            <br>
            <label for="namaOperator">Nama Operator</label>
            <input type="text" name="operator" id="namaOperator">
            <br>
            <br>
            <label for="nimMahasiswa">NIM Mahasiswa</label>
            <input type="text" name="nim" id="nimMahasiswa">
            <br>
            <br>
            <button type="button" onclick="submitData()">SUBMIT</button>
            <button type="reset">RESET</button>
            <br>
            <br>
        </form>

        <div id="tableContainer">
        </div>
    </div>

    <script>
        function submitData() {
            var formData = {
                Negara: document.getElementById("namaNegara").value,
                P: document.getElementById("jumlahPertandingan").value,
                M: document.getElementById("jumlahMenang").value,
                S: document.getElementById("jumlahSeri").value,
                K: document.getElementById("jumlahKalah").value,
                Poin: document.getElementById("jumlahPoin").value,
                operator: document.getElementById("namaOperator").value,
                nim: document.getElementById("nimMahasiswa").value
            };

            if (!document.getElementById("dataTable")) {
                var table = document.createElement("table");
                table.setAttribute("id", "dataTable");

                var headerRow = table.insertRow();
                for (var key in formData) {
                    var headerCell = headerRow.insertCell();
                    headerCell.textContent = key;
                }

                document.getElementById("tableContainer").appendChild(table);
            }

            var tableRow = document.getElementById("dataTable").insertRow();
            for (var key in formData) {
                var cell = tableRow.insertCell();
                cell.textContent = formData[key];
            }
        }
    </script>
</body>
</html>

    </div>
</body>
</html>