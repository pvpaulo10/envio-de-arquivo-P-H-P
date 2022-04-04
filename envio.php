
<form method="POST" enctype="multipart/form-data">
    pasta:
    <input type="text" name="pasta"> <br>
    arquivo:
    <input type="file" name="foto"> <br>
    <button>Enviar</button>
</form>
<?php
if($_FILES){
    if(!is_dir($_POST['pasta'])){
        mkdir($_POST['pasta'],0777);
    }
    $destino = $_POST['pasta'].'/'.$_FILES['foto']['name'];
    if(move_uploaded_file($_FILES['foto']['tmp_name'],$destino)){
        echo 'Enviado com sucesso!';
        echo '<br>Tipo: '.$_FILES['foto']['type'];
        echo '<br>Tamanho: '.$_FILES['foto']['size'];
        echo '<br>Nome: '.$_FILES['foto']['name'];

    }else{
        echo 'Erro ao enviar o arquivo: '.$_FILES['foto']['name'];
    }
}