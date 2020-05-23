<script>
	swal({
		title : "Selamat Datang" ,
		text  : "klik ok untuk isi data diri " ,
		icon  : "success",
		buttons : [false , "Ok"]
	}).then(function(){
		window.location.href='<?= base_url('isi_form') ?>'
	});
</script>