<!DOCTYPE html>
<html>
  <head>
    <title>KWITANSI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">


  </head>
  <body>
  <div class="container">
  <?php $this->load->view('menu');?> <!--Include menu-->
	<!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data Kwitansi
				<div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Kwitansi</a></div>
            </h1>
        </div>
	<div class="row">
		<div id="reload">
		<table class="table table-striped" id="data">
			<thead>
				<tr>
					<th style="text-align: center width:100px";>Tanggal</th>
					<th style="text-align: center width:100px";>No Nota</th>
					<th width="100px">Customer</th>
					<th width="100px">Terbilang</th>
					<th width="100px">Invoice</th>               
					<th  width="100px">Cetak</th>
					<th  width="100px">Tertulis</th>   
					<th width="100px">Creator</th>
					<th style="text-align: right;">Aksi</th>
				</tr>
			</thead>
			<tbody id="show_data">
				
			</tbody>
		</table>
		</div>
	</div>
</div>

		<!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Kwitansi</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal</label>
                        <div class="col-xs-9"><php echo date('d / M / y');?>
                            <input name="tangb_edit" id="tanggal_b" class="form-control" type="date" placeholder="<php echo date('d / M / y');?>" style="width:335px;" required>
                        </div>
                    </div>

                    
                <div class="form-group">
                        <label class="control-label col-xs-3" >No Nota</label>
                        <div class="col-xs-9">
                            <input name="nono" id="no_nota" class="form-control" type="text" placeholder="No Nota" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Customer</label>
                        <div class="col-xs-9">
                            <input name="cust" id="customer" class="form-control" type="text" placeholder="Customer" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Terbilang</label>
                        <div class="col-xs-9">
                            <input name="terbi" id="terbilang" class="form-control" type="text" placeholder="Terbilang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Invoice</label>
                        <div class="col-xs-9">
                            <input name="invo" id="invoice" class="form-control" type="text" placeholder="Invoice" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Cetak</label>
                        <div class="col-xs-9">
                            <input name="tang_c" id="tanggal_c" class="form-control" type="text" placeholder="Tanggal Cetak" style="width:335px;" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tertulis</label>
                        <div class="col-xs-9">
                            <input name="tulis" id="tertulis" class="form-control" type="text" placeholder="Nominal Nota" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Creator</label>
                        <div class="col-xs-9">
                            <input name="creat" id="creator" class="form-control" type="text" placeholder="Creator" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Kwitansi</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">


                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Nota</label>
                        <div class="col-xs-9">
                            <input name="nono_edit" id="no_nota2" class="form-control" type="text" placeholder="No Nota" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Customer</label>
                        <div class="col-xs-9">
                            <input name="cust_edit" id="customer2" class="form-control" type="text" placeholder="Customer" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Terbilang</label>
                        <div class="col-xs-9">
                            <input name="terbi_edit" id="terbilang2" class="form-control" type="text" placeholder="Terbilang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Invoice</label>
                        <div class="col-xs-9">
                            <input name="invo_edit" id="invoice2" class="form-control" type="text" placeholder="Invoice" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Cetak</label>
                        <div class="col-xs-9">
                            <input name="tangc_edit" id="tanggal_c2" class="form-control" type="text" placeholder="Tanggal Cetak" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tertulis</label>
                        <div class="col-xs-9">
                            <input name="tulis_edit" id="tertulis2" class="form-control" type="text" placeholder="Nominal Angka" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Creator</label>
                        <div class="col-xs-9">
                            <input name="creat_edit" id="creator2" class="form-control" type="text" placeholder="Creator" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->

        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Kwitansi</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="no" id="textno" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus Kwitansi ini?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		tampil_data_kwitansi();	//pemanggilan fungsi tampil kwitansi.
		
		$('#mydata').dataTable();
		 
		//fungsi tampil kwitansi
		function tampil_data_kwitansi(){
		    $.ajax({
		        type  : 'GET',
		        url   : '<?php echo base_url()?>index.php/kwitansi/data_kwitansi',
		        async : true,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
            
                                '<td>'+data[i].tanggal_b +'</td>'+
		                  		'<td>'+data[i].no_nota+'</td>'+
		                        '<td>'+data[i].customer+'</td>'+
		                        '<td>'+data[i].terbilang+'</td>'+
                                '<td>'+data[i].invoice+'</td>'+
                                '<td>'+data[i].tanggal_c+'</td>'+
                                '<td>'+data[i].tertulis+'</td>'+
                                '<td>'+data[i].creator+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="<?php echo base_url("index.php/kwitansi/cetakkwit"); ?>" target="_blank" >Cetak</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].no_nota+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].no_nota+'">Hapus</a>'+
                                '</td>'+
		                        '</tr>';
		            }

		            $('#show_data').html(html);
		        }

		    });
		}

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/kwitansi/get_kwitansi')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                	$.each(data,function(no_nota, customer, terbilang, tanggal_b, tanggal_c, invoice, tertulis, creator){
                    	$('#ModalaEdit').modal('show');
            			$('[name="nono_edit"]').val(data.no_nota);
            			$('[name="cust_edit"]').val(data.customer);
            			$('[name="terbi_edit"]').val(data.terbilang);
            			$('[name="tangb_edit"]').val(data.tanggal_b);
            			$('[name="tangc_edit"]').val(data.tanggal_c);
            			$('[name="invo_edit"]').val(data.invoice);
            			$('[name="tulis_edit"]').val(data.tertulis);
            			$('[name="creat_edit"]').val(data.creator);
            		});
                }
            });
            return false;
        });

		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="no"]').val(id);
        });

		//Simpan Kwitansi
		$('#btn_simpan').on('click',function(){
            var nono=$('#no_nota').val();
            var cust=$('#customer').val();
            var terbi=$('#terbilang').val();
            var tangb=$('#tanggal_b').val();
            var tangc=$('#tanggal_c').val();
            var invo=$('#invoice').val();
            var tulis=$('#tertulis').val();
            var creat=$('#creator').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/kwitansi/simpan_kwitansi')?>",
                dataType : "JSON",
                data : {nono:nono , cust:cust, terbi:terbi, tangb:tangb, tangc:tangc, invo:invo, tulis:tulis, creat:creat},
                success: function(data){
                    $('[name="nono"]').val("");
                    $('[name="cust"]').val("");
                    $('[name="terbi"]').val("");
                    $('[name="tangb"]').val("");
                    $('[name="tangc"]').val("");
                    $('[name="invo"]').val("");
                    $('[name="tulis"]').val("");
                    $('[name="creat"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_kwitansi();
                }
            });
            return false;
        });

        //Update Kwitansi
		$('#btn_update').on('click',function(){
            var nono=$('#no_nota2').val();
            var cust=$('#customer2').val();
            var terbi=$('#terbilang2').val();
            var tangc=$('#tanggal_c2').val();
            var invo=$('#invoice2').val();
            var tulis=$('#tertulis2').val();
            var creat=$('#creator2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/kwitansi/update_kwitansi')?>",
                dataType : "JSON",
                data : {nono:nono , cust:cust, terbi:terbi, tangc:tangc, invo:invo, tulis:tulis, creat:creat},
                success: function(data){
                    $('[name="nono_edit"]').val("");
                    $('[name="cust_edit"]').val("");
                    $('[name="terbi_edit"]').val("");
                    $('[name="tangc_edit"]').val("");
                    $('[name="invo_edit"]').val("");
                    $('[name="tulis_edit"]').val("");
                    $('[name="creat_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_kwitansi();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var no=$('#textno').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/kwitansi/hapus_kwitansi')?>",
            dataType : "JSON",
                    data : {no: no},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_kwitansi();
                    }
                });
                return false;
            });

	});

</script>

</body>
</html>
