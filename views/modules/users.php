  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Usuarios
        <small>Panel de control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Administrar Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <!-- box-header -->
        <div class="box-header with-border">
          <button type="button" class="btn btn-primary cleanImputs" data-toggle="modal" data-target="#modalAddUser" >
            Agregar usuario
          </button>

        </div>
        <!-- /.box-header -->

        <!-- box-body -->
        <div class="box-body">
            <table class="table table-bordered table-striped tablas dt-responsive" width="100%">
              <thead>
                <tr>
                  <th style="width:10px">#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Foto</th>
                  <th>Perfil</th>
                  <th>Estado</th>
                  <th>último login</th>
                  <th>Correo</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Administrador</td>
                  <td>Admin</td>
                  <td><img src="views/img/users/default/anonymous.jpg" alt="user"  width="40px"></td>
                  <td>Perfil</td>
                  <td>
                    <button class="btn btn-success btn-xs">Activado</button>
                  </td>
                  <td>último login</td>
                  <td>Correo</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                      </button>
                      <button class="btn btn-danger ">
                      <i class="fa fa-times"></i>
                      </button>

                    </div>
                  </td>
                </tr>

                <tr>
                  <td>1</td>
                  <td>Juan</td>
                  <td>Admin</td>
                  <td><img src="views/img/users/default/anonymous.jpg" alt="user"  width="40px"></td>
                  <td>Perfil</td>
                  <td>
                    <button class="btn btn-success btn-xs">Activado</button>
                  </td>
                  <td>último login</td>
                  <td>Correo</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                      </button>
                      <button class="btn btn-danger ">
                      <i class="fa fa-times"></i>
                      </button>

                    </div>
                  </td>
                </tr>

                <tr>
                  <td>1</td>
                  <td>Raul</td>
                  <td>Admin</td>
                  <td><img src="views/img/users/default/anonymous.jpg" alt="user"  width="40px"></td>
                  <td>Perfil</td>
                  <td>
                    <button class="btn btn-success btn-xs">Activado</button>
                  </td>
                  <td>último login</td>
                  <td>Correo</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                      </button>
                      <button class="btn btn-danger ">
                      <i class="fa fa-times"></i>
                      </button>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- ###############################################
              MODAL ADD USER
      ################################################-->

<!-- Modal -->
<div id="modalAddUser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!-- FORM HEADER -->
          <div class="modal-header " style="background-color:#3c8dbc; text-align:center; color:white">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title " >Agregar usuario</h4>
          </div>
  
          <!-- FORM BODY -->
          <div class="modal-body">
            <div class="box-body">
              <!--  input name -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input class="form-control input-lg limpiar" type="text" name="newName" placeholder="Ingresar nombre" required autocomplete="off">
                </div>
              </div>
  
              <!--  input user -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input class="form-control input-lg limpiar" type="text" name="newUserName" placeholder="Ingresar nombre de usuario" required autocomplete="off">
                </div>
              </div>
  
               <!--  input password -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon "><i class="fa fa-lock"></i></span>
                  <input class="form-control input-lg limpiar" type="password" name="newPassword" placeholder="Ingresar contraceña" required autocomplete="off">
                </div>
              </div>  
  
              <!--  perfil selection -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users"></i></span>
                  <select class="form-control input-lg"  name="newPerfil"  required>
                    <option value="" >Seleccione un perfil</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Especial">Especial</option>
                    <option value="Vendedor">Vendedor</option>
                  <select/>
                </div>
              </div>
  
              <!-- upload photo-->
              <div class="form-group">
                <div class="panel "> <strong> SUBIR FOTO</strong> </div>
                <input type="file" class="newPhoto limpiar" name="newPhoto" autocomplete="off"><p class="help-block">Peso maximo de la foto 10 MB</p>
                <img src="views/img/users/default/user.png" alt="user" class="img-thumbnail previsualizar" width="100rem">
              </div>  
  
            </div>
          </div>
          <!-- FOOTER MODAL -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-primary "  value="Agregar Usuario">
          </div>


            <?php
              $addUser = new ControllerUsers();
              $addUser -> ctrAddUser();
            ?>

      </form>
    </div>
    <!-- /. Modal content-->
  </div>
</div>
