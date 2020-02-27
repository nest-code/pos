<section class="content-header">
      <h1>
        items
        <small>Data Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>


<section class="content">
<?php $this->view('message');?>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Barcode</h3>
            <div class="pull-right">
                <a href=" <?=site_url('item')?>" class="btn btn-warning btn-flat">
                <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        
        <div class="box-body ">    
            <?php
        $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('$row->barcode', $generator::TYPE_CODE_128)) . '">';
            ?><br>
            <?php
               echo  $row->barcode;
            ?>
            <br><br>
            <a href=" <?=site_url('item/barcode_print/'.$row->item_id)?>"  target="_blank" class="btn btn-default btn-flat"><i class="fa fa-print"></i> Print</a>                       
            </div>
        </div>



    

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Qr Code Generator</h3>
        </div>
        
        <div class="box-body ">    
            <?php
    		$qrCode = new Endroid\QrCode\QrCode($row->barcode);
            $qrCode->writeFile('uploads/qr-code/item-'.$row->barcode.'.png');
            ?><br>
            <img src="<?=base_url('uploads/qr-code/item-'.$row->barcode.'.png')?>" alt="" style="width:200px">
            <br>
            <?php
               echo  $row->barcode;
               ?>
            <br><br>
            <a href=" <?=site_url('item/qrcode_print/'.$row->item_id)?>"  target="_blank" class="btn btn-default btn-flat"><i class="fa fa-print"></i> Print</a>                       

            </div>
            
        </div>

</section>