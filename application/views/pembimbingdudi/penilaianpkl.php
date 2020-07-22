<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Autocomplete</title>
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/jquery-ui.css' ?>">
</head>

<body>
    <div class="container">
        <div class="row">
            <h2>Autocomplete Codeigniter</h2>
        </div>
        <div class="row">
            <form>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Nama Siswa" style="width:500px;">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input name="nis" class="form-control" placeholder="Kelas" style="width:500px;" disabled></input>
                </div>
            </form>
        </div>
    </div>

    <script src="<?= base_url() . 'assets/js/jquery-3.4.1.min.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url() . 'assets/js/bootstrap.js' ?>" type="text/javascript"></script>
    <script src="<?= base_url() . 'assets/js/jquery-ui.js' ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#title").autocomplete({
                source: "<?php echo base_url(); ?>pembimbingdudi/penilaianpkl/search",

                select: function(event, ui) {
                    $('[name="nama"]').val(ui.item.label);
                    $('[name="nis"]').val(ui.item.nis);
                }
            });
        });
    </script>

</body>

</html>