@extends('admin.layout')
@section('title')
 Quản lý sản phẩm
@endsection

@section('content')

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý sản phẩm
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
            <th>Stt</th>
            <th>Mã</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Thương hiệu</th>
            <th>Loại</th>
            <th>Bảo hành</th>
            <th>Hình</th>
            <th>Tình trạng</th>
            <th>Hành động</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody  style="text-align:  center;">
          
          
          <tr>
            
          <?php $db = DB::table('sanpham')->Select('spMa','spTen','spGia','thMa','loaiMa','spBaohanh','spHinh','spTinhtrang')->get() ?>
            @foreach($db as $k => $v)
            <td>{{$k +1 }}</td>
            <td>{{$v->spMa}}</td>
            <td>{{$v->spTen}}</td>
            <td>{{number_format($v->spGia)}}</td>
            <td>{{$v->thMa}}</td>
            <td>{{$v->loaiMa}}</td>
            <td>{{$v->spBaohanh}}</td>
            <td><img style="widows: 100px;height: 100px;" src="{{{'public/frontend/img/'.$v->spHinh}}}" alt="hinh"></td>
            <td>
                @if($v->spTinhtrang ==1)
                  <i class="fa fa-check text-success text-active"></i></td>
                  @endif
                  @if($v->spTinhtrang !=1)
                  <i class="fa fa-times text-danger text" style="color: red;"></i></td>
                  @endif

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