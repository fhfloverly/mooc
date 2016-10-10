@extends('admin.base.base')
@section('title')
  老师管理界面
@endsection
@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            老师表
            <small>表格管理</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;老师信息管理</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>编号</th>
                        <th>老师姓名</th>
                        <th>Email</th>
                        <th>创建时间</th>
                        <th>注销账户</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>111111111</td>
                        <td>11111</td>
                        <td>1111</td>
                        <td> 1111</td>
                        <td><button class="btn btn-xs btn-danger">注销</button> </td>
                      </tr>
                      
                    </tbody>
                    <tfoot>
                      
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
  
@endsection