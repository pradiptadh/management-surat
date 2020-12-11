
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">


</head>
<div class="container">
  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Membuat Akun </h1>
            </div>
            <form class="user" method="post" action="<?= base_url('admin/regisUser'); ?>">

              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap " value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
             
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                </div>

              </div>
              <div class="form-group">
                                <select class="form-control" name="role_id" id="role_id">
                                    <option >--- Pilih Role---</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Customer</option>
                                    <option value="3">Driver</option>
                                </select>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block ">
                Buat Akun
              </button>
            </form>
         
            
          </div>
        </div>
      </div>
    </div>
  </div>

</div>