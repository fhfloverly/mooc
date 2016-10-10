@extends('admin.base.base')
@section('title')
修改小类
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
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;修改小类</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
					<form class="form-horizontal">
						<tbody>
						   <tr>
							<td>
								<div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">小类名称</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" id="inputEmail3">
										</div>
									</div>
									
							</td>
							</tr>
							<tr>
								<td>
								   <div class="form-group">
										<label for="inputEmail3" class="col-sm-1 control-label">介绍</label>
										<div class="col-sm-5">
											<textarea class="form-control" rows="3" placeholder="请输入大类详情"></textarea>
										</div>
									</div>
								   
								</td>
							</tr>
							<tr>
								<td>
									<div class="box-footer">
										<button type="submit" class="btn btn-default btn-info" style="position:absolute;left:230px">保存</button>
										<button type="submit" class="btn btn-default btn-info"  style="position:absolute;left:350px" >重置</button>
									</div>	

								</td>
						   </tr>
						  
						</tbody>
                   
					</form>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
@endsection