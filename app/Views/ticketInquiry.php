<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS ?>style.css">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="scss/_variables.scss" />
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

</head>
<body>
    <nav id="navbarContainer">
        <?php include(APPPATH . 'Views/navbar.php'); ?>
    </nav>

    <section class="py-3 mt-3" >
        <div class="container">
            <div class="text-uppercase">
                <h2>E-Bilet Sorgulama</h2>
            </div>
        </div>
    </section>

    <section class="pt-30 pb-80">
        <form id="resetPassword" name="resetPassword" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-md-4 nopadding text-20">E-Bilet Numarası:</label>
                        <input type="text" class="form-control col-md-8" required id="telephone" name="telephone" autocomplete="off" placeholder="E-Bilet numaranızı giriniz...">
                    </div>
                    <div style="margin-top:15px" class="col-xs-12">
                        <label class="col-md-4 nopadding text-20">Cep Telefonu:</label>
                        <input type="text" class="form-control col-md-8" required id="ilkHarf" maxlength="1" name="ilkHarf" autocomplete="off" placeholder="Format: 5*********">
                    </div>
                    <div style="margin-top:15px" class="col-md-5">
                        <button type="submit" class="btn btn-primary" id="btnUyeKontrol" name="btnUyeKontrol">Ara</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12 mt-3" style="padding: 10px 15px 10px 15px;">
                        <a href="sendETicket.html" style="font-weight:bolder;"><b>E-Bilet No</b>'yu Tekrar Gönder</a>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <div id="footerContainer">
        <?= view('footer') ?>
    </div>

    <!-- API KEYİN ALINDIĞI KISIM GOOGLE API DAN ALINACAK VE GOOGLE MAP JAVASCRİPT ENABLE EDİLECEK -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=API_KEYI_BURAYA_GIR&callback=initMap"></script>
    <script src="js/script.js"></script>
    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>