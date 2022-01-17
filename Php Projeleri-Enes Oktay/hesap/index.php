<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
</head>
<body style="text-align:center;padding-top:15px;">
    <div id="sonuc" style="font-size:18px;color:#5cb85c;font-weight:bold;margin-bottom:15px"></div>
    <form id="hesapForm">
        
        <b style="color:#900">Sayı 1:</b><br>
        <input type="text" name="sayi1" style="width:180px" required>
        <br><br>
        <b style="color:#900">Sayı 2:</b><br>
        <input type="text" name="sayi2" style="width:180px" required>
        <br><br>
        <b style="color:#900">İşlem:</b><br>
        <select name="islem" style="width:180px;cursor:pointer" required>
            <option value="" selected></option>
            <option value="toplama">Toplama</option>
            <option value="cikarma">Çıkarma</option>
            <option value="carpma">Çarpma</option>
            <option value="bolme">Bölme</option>
        </select>
        <br><br>
        <button type="button" id="hesapDugme" style="background:#5cb85c;color:#fff;padding:3px 15px;border:1px solid #e5e5e5;cursor:pointer">Hesapla</button>

    </form>

    <script src="jquery.js"></script>
    <script>
        $(document).ready(function() {
            $('#hesapForm').submit(function(e){
                e.preventDefault();
            });
            $('#hesapDugme').click(function(e) {
                $.post("hesap.php",$('#hesapForm').serialize(),function(data){$('#sonuc').html(data)});
            });
        });
    </script>
</body>
</html>