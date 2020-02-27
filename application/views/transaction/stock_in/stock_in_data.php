<section class="content-header">
    <h1>
    stock Data
    <small>Kategori Barang</small>
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
            <h3 class="box-title">Data stock</h3>
            <div class="pull-right">
                <a href=" <?=site_url('stock/in/add')?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Add
                </a>
            </div>
        </div>

        <div class="box-body table-responsive">            
            <table class="table table-bordered table-striped" id="tabel1">
                <thead>
                    <tr>
                       <th>No</th>
                       <th>Barcode</th>
                       <th>Product item</th>
                       <th>Qty</th>
                       <th>Date</th>
                       <th class="text-center">Action</th>    
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    foreach($row as $key => $data) { ?>
                    <tr>
                        <td style="width:4%;"> <?=$no++?>.</td>
                        <td><?=$data->barcode?></td>
                        <td><?=$data->item_name?></td>
                        <td><?=$data->qty?></td>
                        <td><?=$data->date?></td>


                        <td class="text-center" width="">
                            <a href=""  class="btn btn-default btn-flat"><i class="fa fa-eye"></i> Detail</a>                       
                            <a href=" <?=site_url('stock/in/del/'.$data->stock_id)?>" onclick="return confirm(' Yankin hapus data ?')" class="btn btn-danger btn-flat"><i class="fa fa-pencil"></i> Delete</a>                       
                        </td>
                    </tr>
                        <?php
                    }?>
                
               </tbody>
            </table>
            </div>
    </div>
</section>