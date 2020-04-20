@extends('backend.master')
@section('content')

@include('backend.blocks.message')


  <x-card tieude="form.card_category_list" :nutnhan="false">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Parent</th>
          <th>Status</th>
          <th>Xoá</th>
          <th>Sửa</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($category as $cate)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $cate->name }}</td>
          
          @if ($cate->parent_id == 0) 
          <td>ROOT</td>
          @else
            @php
              $parent_name = DB::table('category')->where('id',$cate->parent_id)->value('name');
            @endphp
            <td>{{ $parent_name }}</td>
          @endif
         
          <td>{{ $cate->status == 'on' ? 'Active' : 'Unactive' }}</td>
          <td><a onclick="return acceptDelete('Bạn có chắc chắn muốn xoá thể loại này không ?')" href="{{ route('admin.category.destroy',['id' => $cate->id]) }}">Xoá</a></td>
          <td><a href="{{ route('admin.category.edit',['id' => $cate->id]) }}">Sửa</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </x-card>

@endsection