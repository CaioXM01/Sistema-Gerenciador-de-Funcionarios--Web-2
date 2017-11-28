<?php $this->load->view('header'); ?>
    <div class="login-card"><img src="assets/img/logo.png" class="profile-img-card" />
    <p class="profile-name-card"> </p>
    <form class="form-signin"><span class="reauth-email"> </span>
        <input type="email" required placeholder="Email address" autofocus class="form-control" id="inputEmail" />
        <input type="password" required placeholder="Password" class="form-control" id="inputPassword" />
        <div class="checkbox">
            <div class="checkbox">
                <label>
                    <input type="checkbox" />Lembrar</label>
            </div>
        </div>
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Entrar</button>
    </form>
    <a href="<?php echo base_url('index.php/registrar');?>" class="btn btn-primary btn-block btn-lg btn-signin btn-register" style="background-color:#00b760;" >Registr-se</a>
    </br><a href="#" class="forgot-password">Esqueceu sua Senha?</a></div>
    <div>
        <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Modal Title</h4></div>
                    <div class="modal-body">
                        <p class="text-center text-muted">Description </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>