<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block">
              <img src="assets/logo2.jpg">
            </div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4" style="margin-left: 90px;">Login Page</h1>
                </div>
                <div style="margin-left: 90px;">
                  <?= $this->session->flashdata('message'); ?>
                </div>
                <form class="user" method="post" action="<?= base_url('auth') ?>">
                  <div class="form-group" style="margin-left: 90px;">
                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">

                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group" style="margin-left: 90px;">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user" style="margin-left: 90px; height: 100%; width: 260px ">
                    Login
                  </button>
                </form>
                <hr style="margin-left: 90px; ">
               
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>