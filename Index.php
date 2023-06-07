<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tips Menang di Wild Rift</title>
</head>
<body>
    <h1>Tips Menang di Wild Rift</h1>
    <form method="POST" action="">
        <label for="role">Pilih peran Anda:</label><br>
        <select name="role">
            <option value="top">Top Lane</option>
            <option value="jungle">Jungle</option>
            <option value="mid">Mid Lane</option>
            <option value="adc">ADC (Attack Damage Carry)</option>
            <option value="support">Support</option>
        </select><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $pilihanPeran = $_POST['role'];
        $tipsPeran = array();
        if ($pilihanPeran == 'top') {
            $tipsPeran = array(
                "Selalu jaga jarak dengan musuh agar tidak mudah dikalahkan",
                "Perhatikan posisi Anda agar tidak terjebak dalam gank dari Jungle lawan",
                "Usahakan untuk memiliki visi di area sekitar sungai dengan memasang ward"
            );
        } elseif ($pilihanPeran == 'jungle') {
            $tipsPeran = array(
                "Selalu perhatikan minimap untuk memantau pergerakan musuh",
                "Bantu teman setim dalam lane dengan melakukan gank",
                "Pikirkan strategi untuk mengambil objek seperti Dragon atau Herald"
            );
        } elseif ($pilihanPeran == 'mid') {
            $tipsPeran = array(
                "Fokuslah dalam farming dan upaya untuk mendapatkan level yang lebih tinggi dari lawan",
                "Bantu sisi lain, seperti Jungle atau Top Lane, dengan melakukan roams",
                "Gunakan skill kamu secara efektif dalam setiap pertempuran tim"
            );
        } elseif ($pilihanPeran == 'adc') {
            $tipsPeran = array(
                "Konsentrasikan diri pada farming dan itemisasi yang tepat",
                "Pastikan untuk meminta bantuan dari Support Anda",
                "Perhatikan posisi dan jaga jarak dengan musuh dalam timfight"
            );
        } elseif ($pilihanPeran == 'support') {
            $tipsPeran = array(
                "Bantu ADC Anda untuk farming dan bertahan dalam lane",
                "Berikan visi dengan memasang ward di area penting",
                "Gunakan skill kamu untuk melindungi tim dan memberikan efek crowd control pada musuh"
            );
        }
        if (!empty($tipsPeran)) {
            echo "<h2>Tips untuk peran Anda:</h2>";
            foreach ($tipsPeran as $tip) {
                echo "- " . $tip . "<br>";
            }
        } else {
            echo "<h2>Tidak ada tips yang tersedia untuk peran Anda.</h2>";
        }
    }
    ?>
</body>
</html>