@extends("admin.base.base")

@section("content")
     <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <span class="glyphicon glyphicon-calendar"></span>
            类别信息管理
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">类别信息管理</a></li>
            <li class="active">添加类别信息</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                    <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <span class="glyphicon glyphicon-plus"></span><h3 class="box-title">添加类别信息</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">邮箱地址</label>
                      <div class="col-sm-4">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">密码</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    </div>


                <!--   密码1 <input type="password"><br><br>
                  
                  <div class="form-group">
                    密码2
                    <input type="text" class="form-control">
                  </div><br><br>
                  
                   <div class="form-group">
                    <label for="password22" class="col-sm-4">密码3 </label>
                    <div class="col-sm-8">
                      <input type="text" id="password22" class="form-control">
                    </div>
                    
                  </div><br><br> -->
                   

                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> 是否启用
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">添加</button>
                    <button type="submit" class="btn btn-primary">重置</button>
                  </div>
                </form>
              </div><!-- /.box -->
          

             
            </div><!--/.col (left) -->
          
          </div>   <!-- /.row -->
        </section><!-- /.content -->
    
     
@endsection