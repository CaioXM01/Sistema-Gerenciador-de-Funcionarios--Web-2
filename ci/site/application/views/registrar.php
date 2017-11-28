<?php $this->load->view('header'); ?>
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form">
                <h1>Registre-se</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Nome </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="email-input-field">Email </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="pawssword-input-field">Senha </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="repeat-pawssword-input-field">Repetir Senha</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password">
                    </div>
                </div>
                <button class="btn btn-default submit-button" type="button">Registrar </button>
            </form>
        </div>
    </div>
<?php $this->load->view('footer'); ?>