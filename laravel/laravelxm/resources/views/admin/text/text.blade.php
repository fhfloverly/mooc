@extends('admin.base.base')
@section('title')
 	所有文档
@endsection
@section('content')
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;查看用户列表</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="form-group">
                   
                    <div class="col-sm-3">
                      <form class="form-horizontal">
                        <div class="row">
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入用户名称">
                          </div>   
                          <label for="inputEmail3" class="col-sm-1 control-label"><button type="submit" class="btn btn-xs btn-primary" >查询</button></label>
                        </div>
                      </form>  
                    </div>
                  </div>
                   
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>序号</th>
                        <th>用户名称</th>
                        <th>文档名称</th>
                        <th>分类</th>
						<th>上传日期</th>
                        <th>管理菜单</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>111111111</td>
                        <td>11111</td>
                        <td>1111</td>
                        <td> 1111</td>
						<td> 1111</td>
                        <td><button class="btn btn-xs btn-danger">删除</button> </td>
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