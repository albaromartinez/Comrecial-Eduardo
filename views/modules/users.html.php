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
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddUser" >
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
      <form  role="form" action="POST" enctype="multipart/form-data">
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
                 <input class="form-control input-lg" type="text" name="newName" placeholder="Ingresar nombre" required>
               </div>
             </div>

             <!--  input user -->
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-key"></i></span>
                 <input class="form-control input-lg" type="text" name="newUserName" placeholder="Ingresar nombre de usuario" required>
               </div>
             </div>

              <!--  input password -->
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                 <input class="form-control input-lg" type="password" name="newPassword" placeholder="Ingresar ontraceña" required>
               </div>
             </div>  

             <!--  perfil selection -->
             <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-users"></i></span>
                 <select class="form-control input-lg"  name="newPerfil"  required>
                   <option value="">Seleccionar perfil</option>
                   <option value="">Administrador</option>
                   <option value="">Especial</option>
                   <option value="">Vendedor</option>
                 <select/>
               </div>
             </div>

             <!-- upload photo-->
             <div class="form-group">
               <div class="panel "> <strong> SUBIR FOTO</strong> </div>
               <input type="file" id="newPhoto" name="newphoto" ><p class="help-block">Peso maximo de la foto 10 MB</p>
               <img src="views/img/users/default/user.png" alt="user" class="img-thumbnail" width="100rem">

             </div>  

           </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
           <button type="submit" class="btn btn-primary" data-dismiss="modal">Agregar usuario</button>
         </div>
        </div>
      </form>
      
  </div>
</div>
