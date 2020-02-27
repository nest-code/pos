<section class="content-header">
      <h1>
        User Data
        <small>Pengguna</small>
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
            <h3 class="box-title"> <?=ucfirst($page)?> costumer</h3>
            <div class="pull-right">
                <a href=" <?=site_url('costumer')?>" class="btn btn-warning btn-flat">
                <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>



        
        <div class="box-body ">            
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <form action="<?=site_url('costumer/process')?>" method="post">
                    <div class="form-group">
                        <label >costumer Name *</label>
                        <input type="hidden" name="id" value="<?=$row->costumer_id?>" > 
                    
                        <input type="text" name="costumer_name" value="<?=$row->name?>"  class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label >Gender</label>
                        <select name="gender"  class="form-control" required > 
                            <option value="">-Pilih-</option>
                            <option value="L" <?=$row->gender == 'L' ? 'selected' : ''?>>Laki-laki</option>
                            <option value="P" <?=$row->gender == 'P' ? 'selected' : ''?>>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label >Phone</label>
                        <input type="text" name="phone" value="<?=$row->phone?>"  class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label >Address</label>
                        <textarea name="addr"   class="form-control" required> <?=$row->address?></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat"><i class="fa fa-paper-line"></i>Save</button>
                        <button type="reset" class="btn btn-default btn-flat"><i class=""></i> Reset</button>
                    <div>

                </form>
            </div>
            </div>
        </div>
    </div>
</section>