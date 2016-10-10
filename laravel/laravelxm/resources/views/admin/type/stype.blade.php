@extends('admin.base.base')
@section('title')
管理小类
@endsection
@section('content')
 <section class="content-header">
          <h1>
            分类表
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
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;小类管理</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>小类名称</th>
                        <th>介绍</th>
                      
                        <th>操作</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>爱情</td>
                        
                        <td> love</td>
                        <td>
                          <a href='{{ URL('admin/astype') }}'><button class="btn btn-xs btn-info">添加小类</button></a>
                          <a href='{{ URL('admin/ustype') }}'><button class="btn btn-xs btn-info">修改</button></a>
                          <button class="btn btn-xs btn-danger">删除</button>

                        </td>
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