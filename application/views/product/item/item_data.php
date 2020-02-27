<section class="content-header">
    <h1>
    item Data
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
            <h3 class="box-title">Data item</h3>
            <div class="pull-right">
                <a href=" <?=site_url('item/add')?>" class="btn btn-primary btn-flat">
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
                       <th>Name</th>
                       <th>Category</th>
                       <th>Unit</th>
                       <th>Price</th>
                       <th>Stock</th>
                       <th>Image</th>
                       <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:4%;"> <?=$no++?>.</td>
                        <td>
                            <?=$data->barcode?> <br>
                            <a href=" <?=site_url('item/barcode_qrcode/'.$data->item_id)?>"  class="btn btn-default btn-flat"><i class="fa fa-barcode"></i> Generate</a>                       

                        </td>
                        <td><?=$data->name?></td>
                        <td><?=$data->category_name?></td>
                        <td><?=$data->unit_name?></td>
                        <td><?=$data->price?></td>
                        <td><?=$data->stock?></td>
                        <td> 
                        <?php if($data->image != null) {?>
                        <img src="<?=base_url('uploads/product/'.$data->image)?>" alt="" style="width:100px">
                        <?php }?>
                        </td>
                        <td class="text-center" width="">
                            <a href=" <?=site_url('item/edit/'.$data->item_id)?>"  class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i> Update</a>                       
                            <a href=" <?=site_url('item/del/'.$data->item_id)?>" onclick="return confirm(' Yankin hapus data ?')" class="btn btn-danger btn-flat"><i class="fa fa-pencil"></i> Delete</a>                       
                        </td>
                    </tr>
                        <?php
                    }?> -->
                </tbody>
            </table>
            </div>
    </div>
</section>

<script>

  $(document).ready(function() {
    $('#tabel1').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
           "url": "<?=site_url('item/get_ajax')?>",
           "type": "POST"
        },
        "columDefs": [
            {
                "targets": [5 ,6 ],
                "className": 'text-right'
            },
            {
                "targets": [7,-1],
                "className": 'text-center'
            },
            {
                "targets": [0, 7, -1],
                "orderable": false
            }
        ]
    } )
} )
</script>