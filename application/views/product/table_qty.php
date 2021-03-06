<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">รายละเอียดสินค้า</h3>
	</div>
	
	<div class="panel-body">
		<div class="col-md-12 text-center">
			<h3 style="margin-top: 0px;"><?php echo $product['Product_Name'];?> (<?php echo $product['Product_ID'];?>) # <?php echo $product['Product_Vol'];?></h3>
		</div>
		<div class="col-md-4">
			<img width="150" id="p_img" src="<?php echo $product['Product_Photo'] ;?>" class="img-rounded" />
			<br />
			<?php if($product['Product_SpecSheet']):?>
				<span class="label label-default"><a style="color:white" class="text-white" target="_blank" href="<?php echo $product['Product_SpecSheet'];?>">specsheet</a></span>
			<?php endif;?>
				
			<?php if($product['Product_SaleSheet']):?>
				<span class="label label-default"><a style="color:white" class="text-white" target="_blank" href="<?php echo $product['Product_SaleSheet'];?>">salesheet</a></span>
			<?php endif;?>
			
			<?php if($product['Product_DocOther']):?>
				<span class="label label-default"><a style="color:white" target="_blank" href="<?php echo $product['Product_DocOther'];?>">other</a></span>
			<?php endif;?>
		</div>
		<div class="col-md-8">
			
			<table class="table table-condensed">	
				<tbody>
					<tr>
						<td>Barcode</td>
						<td><?php echo $product['Barcode_Main'];?></td>
					</tr>
					<tr>
						<td>ราคา</td>
						<td><?php echo $product['Price'];?> บาท</td>
					</tr>
					<tr>
						<td>ยอดสั่งผลิต</td>
						<td><?php echo $product['QTY_Production'];?></td>
					</tr>
					<tr>
						<td>ยอดรับเข้าคลัง</td>
						<td><?php echo $product['QTY_ReceiveInventory'];?></td>
					</tr>
					<tr>
						<td>สถานะ</td>
						<td><?php echo $product['RowStatus'];?></td>
					</tr>
					<tr>
						<td style="padding-top: 15px;">สินค้าสภาพดี</td>
						<td style="font-size: 23px;" class="text-left"><?php echo $total['good'];?></td>
					</tr>
					<tr>
						<td style="padding-top: 15px;">ยอดการจอง</td>
						<td style="font-size: 23px;" class="text-left"><?php echo $total['reserve_good'];?></td>
					</tr>
					<tr>
						<td style="padding-top: 15px;">คงเหลือ</td>
						<td style="font-size: 23px;" class="text-left"><u><?php echo $total['good'] - $total['reserve_good'];?></u></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12 table-responsive">
			
			<table class="table table-condensed table-striped">
				<thead>
					<tr>
						<th colspan="4">ยอดที่มีในคลัง</th>
					</tr>
					<tr>
						<th>คลัง</th>
						<th>ดี</th>
						<th>จอง</th>
						<th class="danger">เหลือ</th>
						<th>เสีย</th>
						<th>จอง</th>
						<th class="danger">เหลือ</th>
						<th>ชำรุด</th>
						<th>จอง</th>
						<th class="danger">เหลือ</th>
					</tr>
				</thead>
				<tbody>
			<?php foreach ($inventory as $value): ?>
				
					<tr>
						<td><?php echo $value['Stock_Name'];?></td>
						<td><?php echo $value['QTY_Good'];?></td>
						<td><?php echo $value['QTY_ReserveGood'];?></td>
						<td class="danger"><?php echo $value['QTY_RemainGood'];?></td>
						<td><?php echo $value['QTY_Waste'];?></td>
						<td><?php echo $value['QTY_ReserveWaste'];?></td>
						<td class="danger"><?php echo $value['QTY_RemainWaste'];?></td>
						<td><?php echo $value['QTY_Damage'];?></td>
						<td><?php echo $value['QTY_ReserveDamage'];?></td>
						<td class="danger"><?php echo $value['QTY_RemainDamage'];?></td>
					</tr>
				
				
			<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<td>รวม</td>
						<td><?php echo $total['good'];?></td>
						<td><?php echo $total['reserve_good'];?></td>
						<td class="danger"><?php echo $total['remain_good'];?></td>
						<td><?php echo $total['waste'];?></td>
						<td><?php echo $total['reserve_waste'];?></td>
						<td class="danger"><?php echo $total['remain_waste'];?></td>
						<td><?php echo $total['damage'];?></td>
						<td><?php echo $total['reserve_damage'];?></td>
						<td class="danger"><?php echo $total['remain_damage'];?></td>
						
						
					</tr>
				</tfoot>
			</table>
		</div>
		
		<div class="col-md-12">
			
		</div>
	</div>

	
</div>