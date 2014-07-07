<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" class="form-horizontal">
				<fieldset id="" class="">
			  		<legend><?php echo $title;?></legend>
					<div class="col-md-8">
						<table class="table">
							<tr>
								<td class="text-right info"><label for="inputEmail3" class="control-label">รหัสลูกค้า</label></td>
								<td><input type="text" name="" id="" class="col-sm-5 form-control input-sm" autofocus /></td>
								<td class="text-right info"><label for="inputEmail3" class="control-label">ชื่อลูกค้า</label></td>
								<td><input type="text" name="" id="" class="form-control input-sm" /></td>
								<td class="text-right info"><label for="inputEmail3" class="control-label">ชื่อผู้ติดต่อ</label></td>
								<td><input type="text" name="" id="" class="form-control input-sm" /></td>
							</tr>
							<tr>
								<td class="text-right info"><label for="inputEmail3" class="control-label">ที่อยู่</label></td>
								<td colspan="3">
									<input type="text" name="" id="" class="form-control input-sm" />
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-right info"><label for="inputEmail3" class="control-label">ดำบล/แขวง</label></td>
								<td><input type="text" name="" id="" class="form-control input-sm" /></td>
								<td class="text-right info"><label for="inputEmail3" class="control-label">อำเภอ/เขต</label></td>
								<td><input type="text" name="" id="" class="form-control input-sm" /></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-right info"><label for="inputEmail3" class="control-label">จังหวัด</label></td>
								<td><input type="text" name="" id="" class="form-control input-sm" /></td>
								<td class="text-right info"><label for="inputEmail3" class="control-label">รหัสไปรษณีย์</label></td>
								<td><input type="text" name="" id="" class="form-control input-sm" /></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-right info"><label for="inputEmail3" class="control-label">เบอร์ติดต่อ</label></td>
								<td><input type="text" name="" id="" class="form-control input-sm" /></td>
								<td class="text-right info"><label for="inputEmail3" class="control-label">แฟกซ์</label></td>
								<td><input type="text" name="" id="" class="form-control input-sm" /></td>
								<td class="text-right info"><label for="inputEmail3" class="control-label">E-Mail</label></td>
								<td><input type="text" name="" id="" class="form-control input-sm" /></td>
							</tr>
							<tr>
								<td class="text-right info"><label for="inputEmail3" class="control-label">หมายเหตุ</label></td>
								<td colspan="3">
									<input type="text" name="" id="" class="form-control input-sm" />
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-right info"><label for="inputEmail3" class="control-label">รูปภาพ</label></td>
								<td colspan="5">
									    <input type="file" id="exampleInputFile">
								</td>
							</tr>
							<tr>
								<td class="text-right info"><label for="inputEmail3" class="control-label">แผนที่</label></td>
								<td colspan="5">
									    <input type="file" id="exampleInputFile">
								</td>
							</tr>
						</table>
					</div>	<!-- .col-md-8 -->
					<div class="col-md-6 col-md-offset-3 col-sm-offset-3">
						<input type="submit" class="btn btn-primary" value="บันทึกข้อมูลสินค้า" />
						<input type="submit" class="btn btn-danger" value="ยกเลิก" />
					</div>
				</fieldset>
			</form>				 
			
		</div>
	</div><!-- end .row -->
</div>

<!-- end .container-fluid -->

<script>
	$(function() {
		// alert('hello ims');
		$("#product_id").blur(function() {
			var str = $(this).val();
			str = str.toUpperCase();
			$(this).val(str);
		});
		
		$("#manufacture-start, #manufacture-end").datetimepicker({
			pickTime: false
		});


		$("#product_good, #product_unusable, #product_deteriorate").blur(function(e) {
			// alert('on blur');
			var total_receive = parseInt($("#product_good").val()) + parseInt($("#product_deteriorate").val()) + parseInt($("#product_unusable").val());

			$("#product_receive").val(total_receive);
		});
		
		$('input, select').keydown( function (event) { //event==Keyevent
			    if(event.which == 13) {
			        var inputs = $(this).closest('form').find(':input:visible');
			        inputs.eq( inputs.index(this)+ 1 ).focus();
			        event.preventDefault(); //Disable standard Enterkey action
			    }
			    // event.preventDefault(); <- Disable all keys  action
			});
			// if is not work search on google PlusAs Tab****

	}); 
</script>