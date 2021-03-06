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
            <h3 class="box-title">Data Users</h3>
            <div class="pull-right">
                <a href=" <?=site_url('user/add')?>" class="btn btn-warning btn-flat">
                <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>



        
        <div class="box-body ">            
         <div class="row">
             <div class="col-md-4 col-md-offset-4">
             <?php // echo validation_errors(); ?>
                 <form action="" method="post">

                     <div class="form-group <?=form_error('fulname') ?'has-error' : null ?>">
                         <label >Name *</label>
                        <input type="text" name="fulname" value="<?=set_value('fulname')?>"  class="form-control"> 
                       <span class="help-block"> <?=form_error('fulname')?> </span>
                    </div>

                    <div class="form-group <?=form_error('fulname') ?'has-error' : null ?>">
                            <label >Usename </label>
                           <input type="text" name="username" value="<?=set_value('username')?>"  class="form-control"> 
                           <?=form_error('username')?> 
                        </div>

                       <div class="form-group <?=form_error('password') ?'has-error' : null ?>">
                            <label >Password</label>
                           <input type="password" name="password" value="<?=set_value('password')?>"  class="form-control"> 
                           <?=form_error('password')?> 
                        </div>

                       <div class="form-group <?=form_error('passconf') ?'has-error' : null ?>">
                            <label >Password Confirmation</label>
                           <input type="password" name="passconf" value="<?=set_value('passconf')?>"  class="form-control"> 
                           <?=form_error('passconf')?> 
                        </div>

                       <div class="form-group <?=form_error('address') ?'has-error' : null ?>">
                            <label >Address</label>
                           <textarea name="address"  class="form-control"> <?=set_value('address')?> </textarea>
                           <?=form_error('address')?> 
                        </div>
                   
                       <div class="form-group <?=form_error('level') ?'has-error' : null ?>">
                            <label >Level </label>
                            <select name="level" class="form-control">
                                <option value="">-Pilih-</option>
                                <option value="1" <?=set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                <option value="2" <?=set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                            </select>
                            <?=form_error('level')?> 
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-line"></i>Save</button>
                            <button type="reset" class="btn btn-default btn-flat"><i class=""></i> Reset</button>
                        <div>

                       </div>

                       
                 </form>

             </div>

         </div>

        </div>

    </div>

</section>