<?php 
include_once 'top.php';
?>

<div class="container-fluid">
    <?php include_once 'menu.php'; ?>
    <div class="container mt-5">
    <h1 class="text-center mb-5">Form Input Nilai Mahasiswa</h1>

    <?php 
    $matkuls = [
        "pemweb1"=> "Pemrograman Web 1",
        "pemweb2"=> "Pemrograman Web 2",
        "jarkom"=> "Jaringan Komputer",
        "basdat"=> "Basis Data",
    ];
    ?>

    <form action="" method="get">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required>
                    <?php foreach ($matkuls as $key => $matkul) { ?>
                        <option value="<?php echo $key; ?>"><?php echo $matkul; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-4">
                <input id="uts" name="uts" placeholder="Masukkan Nilai" type="number" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-4">
                <input id="uas" name="uas" placeholder="Masukkan Nilai" type="number" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
            <div class="col-4">
                <input id="tugas" name="tugas" placeholder="Masukkan Nilai" type="number" class="form-control" required>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php if (isset($_GET["submit"])): ?>
        <?php 

        $uts = $_GET["uts"];
        $uas = $_GET["uas"];
        $tugas = $_GET["tugas"];

        if (isset($_GET["submit"])){
            $nilai_akhir = hitung_nilai($uts,$uas,$tugas);
            $status = kelulusan($nilai_akhir);
        }
        ?>
        <h2 class="mt-5">Hasil Input Method Get</h2>
        <div class="alert alert-info">
            <strong>Nama Mahasiswa:</strong> <?php echo htmlspecialchars($_GET["nama"]); ?><br>
            <strong>Mata Kuliah:</strong> <?php echo htmlspecialchars($_GET["matkul"]); ?><br>
            <strong>Nilai UTS:</strong> <?php echo htmlspecialchars($_GET["uts"]); ?><br>
            <strong>Nilai UAS:</strong> <?php echo htmlspecialchars($_GET["uas"]); ?><br>
            <strong>Nilai Tugas/Praktikum:</strong> <?php echo htmlspecialchars($_GET["tugas"]); ?><br>
            <strong>Nilai Akhir</strong> <?php echo htmlspecialchars($nilai_akhir ); ?><br>
            <strong>Nilai UAS:</strong> <?php echo htmlspecialchars($status ); ?><br>
        </div>
    <?php endif; ?>
</div>
</div>

<?php 
include_once 'bottom.php';
?>