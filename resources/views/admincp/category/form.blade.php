@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
          QUẢN LÝ DANH MỤC PHIM HOẠT HÌNH
      </header>
      <div class="panel-body">
        <div class="position-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if(!isset($category))
                {!! Form::open(['route'=>'category.store','method'=>'POST']) !!}
            @else
                {!! Form::open(['route'=>['category.update',$category->id],'method'=>'PUT']) !!}
            @endif
              <div class="form-group">
                {!! Form::label('title', 'Tên danh mục', []) !!}
                {!! Form::text('title', isset($category) ? $category->title : '', ['class'=>'form-control','placeholder'=>'...','id'=>'slug','onkeyup'=>'ChangeToSlug()']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('slug', 'Đường dẫn', []) !!}
                {!! Form::text('slug', isset($category) ? $category->slug : '', ['class'=>'form-control','placeholder'=>'...','id'=>'convert_slug']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('description', 'Mô tả danh mục', []) !!}
                {!! Form::textarea('description', isset($category) ? $category->description : '', ['style'=>'resize:none', 'class'=>'form-control','placeholder'=>'...','id'=>'description']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('status', 'Trạng thái', []) !!}
                {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Không hiển thị'], isset($category) ? $category->status : '', ['class'=>'form-control']) !!}
              </div>
              @if(!isset($category))
                  {!! Form::submit('Thêm Danh Mục', ['class'=>'btn btn-primary']) !!}
              @else
                  {!! Form::submit('Cập Nhật Danh Mục', ['class'=>'btn btn-primary']) !!}
              @endif
            {!! Form::close() !!}
        </div>
      </div>
    </section>
  </div>
  <div class="col-lg-12">
    <section class="panel">
      <div class="panel-heading">
        LIỆT KÊ DANH MỤC PHIM HOẠT HÌNH
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tên danh mục</th>
              <th scope="col">Mô tả</th>
              <th scope="col">Đường dẫn</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Quản lý</th>
            </tr>
          </thead>
          <tbody>
            @foreach($list as $key => $cate)
              <tr id="{{$cate->id}}">
                <th scope="row">{{$key}}</th>
                <td>{{$cate->title}}</td>
                <td>{{$cate->description}}</td>
                <td>{{$cate->slug}}</td>
                <td>
                  @if($cate->status)
                      Hiển thị
                  @else
                      Không hiển thị
                  @endif
                </td>
                <td>
                  {!! Form::open(['method'=>'DELETE','route'=>['category.destroy',$cate->id],'onsubmit'=>'return confirm("Bạn có chắc muốn xóa?")']) !!}
                    {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
                    <a href="{{route('category.edit',$cate->id)}}" class="btn btn-primary">Sửa</a> 
                  {!! Form::close() !!}
                    
                </td>
              </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </section>
    </div>
</div>
@endsection
