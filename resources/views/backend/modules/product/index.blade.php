@extends('backend.master')
@section('content')

<form method="POST" action="">
    @csrf

    <x-card tieude="form.card_product_list">
       
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
                        <th>{{ __('form.form_product_name') }}</th>
                        <th>{{ __('form.form_product_price') }}</th>
                        <th>{{ __('form.form_product_intro') }}</th>
                        <th>{{ __('form.form_product_image') }}</th>
                        <th>{{ __('form.form_product_status') }}</th>
                        <th>{{ __('form.form_product_category_id') }}</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Update software</td>
                        <td>Update software</td>
                        <td>Update software</td>
                        <td>Update software</td>
                        <td>Update software</td>
                        <td>Update software</td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
    </x-card>
</form>

@endsection