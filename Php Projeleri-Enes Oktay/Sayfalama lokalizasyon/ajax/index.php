<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center">
    <br><br>
    <div id="sonuc"></div>
    <br><br>
    <form id="gform">
        Kullanıcı Adı:<br><input type="text" name="kullanici">
        <br><br>
        Parola:<br><input type="text" name="parola">
        <br><br>
        <button id="giris">Giriş Yap</button>
    </form>
    
<script src="jquery.js"></script>
<script>
    $(document).ready(function() {

        $('#gform').submit(function(e){
            e.preventDefault();
        });

        $('#giris').click(function(e) {
            $.ajax({
                url: "ajax.php",
                type: "post",
                data: $('#gform').serialize(),
                success: function(data) {
                    //alert(data);
                    $('#sonuc').html(data);
                },
                error: function(request, status, error) {
                    //alert("Hata Oluştu! " + error);
                    $('#sonuc').html(error);
                }
            });
            //$.post("ajax.php",$('#gform').serialize(),function(data){alert(data);});
        });

    });
</script>
</body>
</html>
