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
            <th>email</th>
            <th>cấp độ tài khoản</th>
            <th>trạng thái</th>
            <th>xóa</th>
            <th>sửa</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($listdata as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->fullname }}</td>
            <td>{{ $item->status == 'on' ? 'Active' : 'Unactive' }}</td>
            <td><a href="">Xoá</a></td>
            <td><a href="">Sửa</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </x-card>
</form>

@endsection