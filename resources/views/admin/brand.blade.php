@extends('admin.layout')
@section('title')
 Quản lý thương hiệu
@endsection

@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý thương hiệu
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
            <th>Mã</th>
            <th>Tên thương hiệu</th>
            <th>Hành động</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody style="text-align:  center;>
          
          
          <tr>
            
          <?php $db = DB::table('thuonghieu')->Select('thMa','thTen')->get() ?>
            @foreach($db as $k => $v)
            <td>{{$v->thMa}}</td>
            <td>{{$v->thTen}}</td>
              <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa far fa-edit"></i>&nbsp;<i class="fa fas fa-trash" style="color: red;"></i></a>
            </td>
          </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>

@endsection