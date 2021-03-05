<!-- begin row -->
      <div class="row">
                <!-- begin col-6 -->
          <div class="col-md-6">
              <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">Tambah Data Pengguna</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered" data-parsley-validate="true" name="data_pengguna" action="./model/input_pengguna.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4" for="fullname">Username</label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" type="text" id="fullname" name="username" placeholder="Username" data-parsley-required="true" />
                    <input type="hidden" name="level" value="admin" data-parsley-required="true" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4">Password</label>
                  <div class="col-md-6 col-sm-6">
                    <input type="password" name="password" id="password-indicator-default" class="form-control m-b-5"  data-parsley-required="true"/>
                    <div id="passwordStrengthDiv" class="is0 m-t-5"></div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4"></label>
                  <div class="col-md-6 col-sm-6">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button> <button type="resset" class="btn btn-danger btn-sm">Reset</button>
                  </div>
                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>