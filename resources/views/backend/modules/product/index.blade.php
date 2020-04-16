@extends('backend.master')
@section('content')
@include('backend.blocks.message')

<form method="POST" action="">
    @csrf
    <x-card tieude="form.card_category_list" :nutnhan="false">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>price</th>
            <th>category_id</th>
            <th>status</th>
            <th>image</th>
            <th>Xoá</th>
            <th>Sửa</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($product as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            @php
                $name_cate = DB::table('category')->where('id',$item->category_id)->value('name');
            @endphp
            <td>{{ $name_cate }}</td>
            <td>{{ $item->status == 'on' ? 'Active' : 'Unactive' }}</td>
            <td>{{ $item->image }}</td>
            <td><a href="">Xoá</a></td>
            <td><a href="">Sửa</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </x-card>
</form>

@endsection