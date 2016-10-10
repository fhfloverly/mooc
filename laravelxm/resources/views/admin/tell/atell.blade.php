@extends("admin.base.base")
@section("title")
  添加公告
@endsection
@section("content")



   <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><span class="glyphicon glyphicon-th-list">&nbsp;添加公告</span></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
          <form class="form-horizontal">
            <tbody>
               <tr>
              <td>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-1 control-label">公告标题</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  
              </td>
              </tr>
              <tr>
                <td>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-1 control-label">公告内容</label>
                    <div class="col-sm-5">
                      <textarea class="form-control" rows="3" placeholder="请输入公告内容 "></textarea>
                    </div>
                  </div>
                   
                </td>
              </tr>
              <tr>
              <td>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-1 control-label">发布时间</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  
              </td>
              </tr>
              <tr>
              <td>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-1 control-label">失效时间</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  
              </td>
              </tr>
              <tr>
                <td>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default btn-info" style="position:absolute;left:230px">添加</button>
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