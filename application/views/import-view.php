<section role="main" class="content-body">
	<header class="page-header">
		<h2>Import</h2>
	</header>
	
	<form method="POST" id="import-excel-form" enctype="multipart/form-data">
		<section role="main" class="content-body">
			<div style="float: center;">
				<input type="file" name="file" id="file" accept=".xls, .xlsx, .xlsm, .csv"></p><br>
				<input type="submit" name="import_excel" value="Import" class="btn btn-primary">	
			</div>	
		</section>
	</form>
</section>
<div id="overlay">
	<div class="cv-spinner">
		<span class="spinner"></span>
	</div>
</div>


<!-- <section  role="main" class="content-body">
	<div class="row">
		<div class="col-xs-12">
			<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">Upload your File.</h2>
				</header>
				<div class="panel-body">
					<form action="<?=base_url()?>Import/import" class="dropzone dz-square" id="dropzone-example"></form>
				</div>
			</section>
		</div>
	</div>	
</section>
 -->
<!-- 

<section role="main" class="content-body">
	<header class="page-header">
		<h2>Import</h2>
	</header>
	<form action="" class="dropzone" id="import_excel_form">
		
	</form>
	<div align="center">
		<button type="button" class=" btn btn-primary" id="_submit">Upload</button>
	</div>
</section>
