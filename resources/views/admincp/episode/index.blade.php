@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <div class="panel-heading">
          LIỆT KÊ DANH SÁCH TẬP PHIM
      </div>
      <div class="table-responsive"><br>
        <table class="table table-striped b-t b-light" id="tablephim">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên phim</th>
                  <th scope="col">Hình ảnh phim</th>
                  <th scope="col">Tập phim</th>
                  <th scope="col">Link phim</th>
                  <!-- <th scope="col">Trạng thái</th> -->
                  <th scope="col">Quản lý</th>
                </tr>
              </thead>
              <tbody>
                @foreach($list_episode as $key => $episode)
                <tr>
                  <th scope="row">{{$key}}</th>
                  <td>{{$episode->movie->title}}</td>
                  <td><img width="100" src="{{asset('uploads/movie/'.$episode->movie->image)}}"></td>
                  <td>{{$episode->episode}}</td>
                  <td style="width: 20%">{!!$episode->linkphim!!}</td>
                  <!-- <td>
                    @if($episode->status)
                        Hiển thị
                    @else
                        Không hiển thị
                    @endif
                  </td> -->
                  <td>
                      {!! Form::open(['method'=>'DELETE','route'=>['episode.destroy',$episode->id],'onsubmit'=>'return confirm("Bạn có chắc muốn xóa?")']) !!}
                        {!! Form::submit('Xóa', ['class'=>'btn btn-danger']) !!}
                        <a href="{{route('episode.edit',$episode->id)}}" class="btn btn-primary">Sửa</a> 
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
