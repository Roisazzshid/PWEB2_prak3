<div class="container mx-auto mt-20">
    <h1 class="text-center text-4xl font-bold mb-5">Form Input Nilai Mahasiswa</h1>

    <?php 
    $matkuls = [
        "pemweb1"=> "Pemrograman Web 1",
        "pemweb2"=> "Pemrograman Web 2",
        "jarkom"=> "Jaringan Komputer",
        "basdat"=> "Basis Data",
    ];
    ?>

    <form action="" method="get" class="space-y-4">
        <div class="flex items-center">
            <label for="nama" class="w-1/3 text-right pr-4">Nama Lengkap</label> 
            <div class="w-1/3">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="border border-gray-300 rounded-md p-2 w-full" required>
            </div>
        </div>
        <div class="flex items-center">
            <label for="matkul" class="w-1/3 text-right pr-4">Mata Kuliah</label> 
            <div class="w-1/3">
                <select id="matkul" name="matkul" class="border border-gray-300 rounded-md p-2 w-full" required>
                    <?php foreach ($matkuls as $key => $matkul) { ?>
                        <option value="<?php echo $key; ?>"><?php echo $matkul; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="flex items-center">
            <label for="uts" class="w-1/3 text-right pr-4">Nilai UTS</label> 
            <div class="w-1/3">
                <input id="uts" name="uts" placeholder="Masukkan Nilai" type="number" class="border border-gray-300 rounded-md p-2 w-full" required>
            </div>
        </div>
        <div class="flex items-center">
            <label for="uas" class="w-1/3 text-right pr-4">Nilai UAS</label> 
            <div class="w-1/3">
                <input id="uas" name="uas" placeholder="Masukkan Nilai" type="number" class="border border-gray-300 rounded-md p-2 w-full" required>
            </div>
        </div>
        <div class="flex items-center">
            <label for="tugas" class="w-1/3 text-right pr-4">Nilai Tugas/Praktikum</label> 
            <div class="w-1/3">
                <input id="tugas" name="tugas" placeholder="Masukkan Nilai" type="number" class="border border-gray-300 rounded-md p-2 w-full" required>
            </div>
        </div> 
        <div class="flex items-center">
            <div class="w-1/3"></div>
            <div class="w-2/3">
                <button name="submit" type="submit" class="bg-blue-500 text-white rounded-md p-2 hover:bg-blue-600">Submit</button>
            </div>
        </div>
    </form>

    <?php 
    if (isset($_GET["submit"])){
        $uts = $_GET["uts"];
        $uas = $_GET["uas"];
        $tugas = $_GET["tugas"];

        $nilai_akhir = hitung_nilai($uts,$uas,$tugas);
        $status = kelulusan($nilai_akhir);
    }
    ?>

    <?php if (isset($_GET["submit"])): ?>
        <h2 class="mt-5 text-xl font-semibold">Hasil Input Method Get</h2>
        <div class="bg-blue-100 border border-blue-300 text-blue-800 p-4 rounded-md mt-4">
            <strong>Nama Mahasiswa:</strong> <?php echo htmlspecialchars($_GET["nama"]); ?><br>
            <strong>Mata Kuliah:</strong> <?php echo htmlspecialchars($_GET["matkul"]); ?><br>
            <strong>Nilai UTS:</strong> <?php echo htmlspecialchars($_GET["uts"]); ?><br>
            <strong>Nilai UAS:</strong> <?php echo htmlspecialchars($_GET["uas"]); ?><br>
            <strong>Nilai Tugas/Praktikum:</strong> <?php echo htmlspecialchars($_GET["tugas"]); ?><br>
        </div>
    <?php endif; ?>
</div>