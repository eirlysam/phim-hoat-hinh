@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        QUẢN LÝ QUỐC GIA PHIM HOẠT HÌNH
      </header>

                <div class="panel-body">
        <div class="position-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!isset($country))
                        {!! Form::open(['route'=>'country.store','method'=>'POST']) !!}
                    @else
                        {!! Form::open(['route'=>['country.update',$country->id],'method'=>'PUT']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('title', 'Tên quốc gia', []) !!}
                            {!! Form::text('title', isset($country) ? $country->title : '', ['class'=>'form-control','placeholder'=>'...','id'=>'slug','onkeyup'=>'ChangeToSlug()']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('slug', 'Đường dẫn', []) !!}
                            {!! Form::text('slug', isset($country) ? $country->slug : '', ['class'=>'form-control','placeholder'=>'...','id'=>'convert_slug']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Mô tả quốc gia', []) !!}
                            {!! Form::textarea('description', isset($country) ? $country->description : '', ['style'=>'resize:none', 'class'=>'form-control','placeholder'=>'...','id'=>'description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('status', 'Trạng thái', []) !!}
                            {!! Form::select('status', ['1'=>'Hiển thị','0'=>'Không hiển thị'], isset($country) ? $country->status : '', ['class'=>'form-control']) !!}
                        </div>
                        @if(!isset($country))
                            {!! Form::submit('Thêm Quốc Gia', ['class'=>'btn btn-primary']) !!}
                        @else
                            {!! Form::submit('Cập Nhật Quốc Gia', ['class'=>'btn btn-primary']) !!}
                        @endif
                    {!! Form::close() !!}
                </div>
            </div>
            </section>
  </div>
  <div class="col-lg-12">
    <section class="panel">
      <div class="panel-heading">
        LIỆT KÊ QUỐC GIA PHIM HOẠT HÌNH
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên quốc gia</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col">Đường dẫn</th>
                  <th scope="col">Trạng thái</th>
                  <th scope="col">Quản lý</th>
                </tr>
              </thead>
              <tbody>
                @foreach($list as $key => $cate)
                <tr>
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
                      {!! Form::open(['method'=>'DELETE','route'=>['country.destroy',$cate->id],'onsubmit'=>'return confirm("Bạn có chắc muốn xóa?")']) !!}
                        {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
                        <a href="{{route('country.edit',$cate->id)}}" class="btn btn-primary">Sửa</a>
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
