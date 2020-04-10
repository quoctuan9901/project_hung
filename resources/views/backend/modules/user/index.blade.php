@extends('backend.master')
@section('content')

<form method="POST" action="">
    @csrf

    <x-card tieude="form.card_user_list" :nutnhan="false">
        <div class="row">
          
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"></h3>
  
                  <div class="card-tools">
                    <ul class="pagination pagination-sm float-right">
                      <li class="page-item"><a class="page-link" href="#">«</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 10px">STT</th>
                        <th>{{ __('form.card_user_fullname') }}</th>
                        <th>{{ __('form.card_user_email') }}</th>
                        <th>{{ __('form.card_user_level') }}</th>
                        <th>{{ __('form.card_user_status') }}</th>
                        <th>{{ __('form.created_at') }}</th>
                        

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>1</td>
                        <td>aaaaa</td>
                        <td><span>222222@gmail.com</span></td>
                        <td><span>admin</span></td>
                        <td><span>hoạt động</span></td>
                        <td><span>12/20/2020</span></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
    </x-card>
</form>

@endsection