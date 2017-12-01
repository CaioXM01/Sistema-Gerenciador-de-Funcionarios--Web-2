<?php $this->load->view('header'); ?>
<?php $this->load->view('topo_menu'); ?>

    <div class="container profile profile-view" id="profile">
    <div class="row">
        <div class="col-md-12 alert-col relative">
            <div class="alert alert-info absolue center">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button><span>Funcionário salvo com sucesso!</span></div>
            </div>
        </div>
        <form>
            <div class="row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div>
                    <input type="file" class="form-control" name="avatar-file" />
                </div>
                <div class="col-md-8">
                    <h1>Funcionário</h1>
                    <hr />
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Nome</label>
                                <input class="form-control" type="text" name="nome" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Setor</label>
                                <input class="form-control" type="text" name="setor" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Função</label>
                                <input class="form-control" type="text" name="funcao" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Salário</label>
                                <input class="form-control" type="text" name="salario" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="email" autocomplete="off" required name="email" />
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Telefone</label>
                                <input class="form-control" type="tel" name="telefone" autocomplete="off" required />
                            </div>
                        </div>
                        
                    </div>
                    <hr />
                    <h3>Endereço</h3>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">CEP</label>
                                <input class="form-control" type="number" name="cep" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Bairro</label>
                                <input class="form-control" type="text" name="bairro" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Rua</label>
                                <input class="form-control" type="text" name="rua" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Número</label>
                                <input class="form-control" type="number" name="numero" autocomplete="off" required />
                            </div>
                        </div>
                        
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-12 content-right">
                            <button class="btn btn-primary form-btn" type="submit">SALVAR</button>
                            <button class="btn btn-danger form-btn" type="reset">CANCELAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('footer'); ?>