<section class="content-header">
    <h1>
    costumer Data
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
            <h3 class="box-title">Data costumers</h3>
            <div class="pull-right">
                <a href=" <?=site_url('costumer/add')?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Add
                </a>
            </div>
        </div>

        <div class="box-body table-responsive">            
            <table class="table table-bordered table-striped" id="tabel1">
                <thead>
                    <tr>
                       <th>No</th>
                       <th>Name</th>
                       <th>Gender</th> 
                       <th>Phone</th> 
                       <th>Address</th>
                       <th class="text-center">Action</th>    
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <td><?=$data->gender?></td>
                        <td><?=$data->phone?></td>
                        <td><?=$data->address?></td>
                        <td class="text-center" width="">
                            <a href=" <?=site_url('costumer/edit/'.$data->costumer_id)?>"  class="btn btn-default btn-flat"><i class="fa fa-pencil"></i> Update</a>                       
                            <a href=" <?=site_url('costumer/del/'.$data->costumer_id)?>" onclick="return confirm(' Yankin hapus data ?')" class="btn btn-danger btn-flat"><i class="fa fa-pencil"></i> Delete</a>                       
                        </td>
                    </tr>
                        <?php
                    }?>
                </tbody>
            </table>
            </div>
    </div>
</section>