<section class="content-header">
    <h1>
    Supplier Data
    <small>Pemasok Barang</small>
    </h1>

    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li>
    </ol>
</section>


<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Suppliers</h3>
            <div class="pull-right">
                <a href=" <?=site_url('supplier/add')?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Add
                </a>
            </div>
        </div>

        <div class="box-body table-responsive">            
            <table class="table table-bordered table-striped" id="tabel1">
                <thead>
                    <tr>
                       <th  style="width:4%;">No</th>
                       <th>Name</th>
                       <th>Phone</th> 
                       <th>Address</th>
                       <th>Description</th>
                       <th class="text-center">Action</th>    
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <td><?=$data->phone?></td>
                        <td><?=$data->address?></td>
                        <td><?=$data->description?></td>
                        <td class="text-center" width="">
                            <a href=" <?=site_url('supplier/edit/'.$data->supplier_id)?>"  class="btn btn-default btn-flat"><i class="fa fa-pencil"></i> Update</a>                       
                            <a href=" <?=site_url('supplier/del/'.$data->supplier_id)?>" onclick="return confirm(' Yankin hapus data ?')" class="btn btn-danger btn-flat"><i class="fa fa-pencil"></i> Delete</a>                       

                        </td>
                    </tr>
                        <?php
                    }?>
                </tbody>
            </table>
            </div>
    </div>
</section>