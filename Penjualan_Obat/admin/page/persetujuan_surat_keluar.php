<?php
$id = $_GET['id'];
$cek_session = $_SESSION['username_k'];

$sql = "UPDATE tb_surat_keluar SET 
						persetujuan_sk = '1',
						admin_persetujuan_sk = '$cek_session' WHERE 
						id_sk = '$id'";
$result = mysql_query($sql);

if($result){
echo "<script>window.location = 'index?p=data_surat_keluar'</script>";	
}
?>