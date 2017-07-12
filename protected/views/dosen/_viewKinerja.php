<?php
/* @var $this KinerjaController */
/* @var $data Kinerja */
?>
<style type="text/css">
body {
    font-family: 'Telex', Arial;
    font-size: 12px;
}
body {
    font-family: 'Telex',Tahoma,sans-serif;
    font-size: 14px;
    line-height: 20px;
    color: #333333;
}
	

</style>
<div class="portlet">
	<div class="portlet-decoration">
	<div class="portlet-title">
		<i class="fa fa-briefcase"></i> <strong>Bidang <?php echo CHtml::encode($data->idBidang0->namaBidang) ?></strong>
	</div>
	</div>
	<div class="portlet-content">
		<div class="row-fluid">
			<div class="span12 alert alert-info">
				<table class="table table-hover">
					<thead>
						<tr>
						  <th style="width:15%">#</th>
						  <th style="width:2%">#</th>
						  <th>#</th>
						</tr>
					</thead>
				  <tbody>
					
					<tr>
						  <th scope="row"><?php echo CHtml::encode($data->getAttributeLabel('jenisKegiatan')); ?></th>
						  <td>:</td>
						  <td><?php echo CHtml::encode($data->jenisKegiatan); ?></td>
					</tr>
					<tr>
						  <th scope="row"><?php echo CHtml::encode($data->getAttributeLabel('buktiPenugasan')); ?></th>
						  <td>:</td>
						  <td><?php echo CHtml::encode($data->buktiPenugasan); ?></td>
					</tr>
					<tr>
						  <th scope="row"><?php echo CHtml::encode($data->getAttributeLabel('sksPenugasan')); ?></th>
						  <td>:</td>
						  <td><?php echo CHtml::encode($data->sksPenugasan); ?></td>
					</tr>
					<tr>
						  <th scope="row"><?php echo CHtml::encode($data->getAttributeLabel('masaPenugasan')); ?></th>
						  <td>:</td>
						  <td><?php echo CHtml::encode($data->masaPenugasan); ?></td>
					</tr>
					<tr>
						  <th scope="row"><?php echo CHtml::encode($data->getAttributeLabel('buktiDokumen')); ?></th>
						  <td>:</td>
						  <td><?php echo CHtml::encode($data->buktiDokumen); ?></td>
					</tr>
					<tr>
						  <th scope="row"><?php echo CHtml::encode($data->getAttributeLabel('sksDokumen')); ?></th>
						  <td>:</td>
						  <td><?php echo CHtml::encode($data->sksDokumen); ?></td>
					</tr>
					<tr>
						  <th scope="row"><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?></th>
						  <td>:</td>
						  <td><?php echo CHtml::encode($data->tahun0->ta); ?></td>
					</tr>
					<tr>
						  <th scope="row"><?php echo CHtml::encode($data->getAttributeLabel('idDosen')); ?></th>
						  <td>:</td>
						  <td><?php echo CHtml::encode($data->idDosen0->namaDosen); ?></td>
					</tr>
					
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
