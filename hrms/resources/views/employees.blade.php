<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/admin/fonts/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('assets/admin/fonts/SansPro/SansPro.min.css') }}">
    <title>الموظفين</title>
</head>
<body>
    <div class="col-12">
        <div class="card">
           <div class="card-header">
              <h3 class="card-title card_title_center">  اضافة  موظف جديد
              </h3>
           </div>
           <div class="card-body">
              {{-- <form action="{{ route('Employees.store') }}" method="post" enctype="multipart/form-data"> --}}
                 @csrf
           
        <!-- /.card -->
        <div class="card card-primary card-outline">
           <div class="card-header">
             <h3 class="card-title text-right" style="width: 100%;
             text-align: right !important;">
               <i class="fas fa-edit"></i>
               البيانات المطلوبة للموظف
             </h3>
           </div>
           <div class="card-body">
           
             <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
               <li class="nav-item">
                 <a class="nav-link active" id="personal_date" data-toggle="pill" href="#custom-content-personal_data" role="tab" aria-controls="custom-content-personal_data" aria-selected="true">البيانات الاساسية</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" id="jobs_data" data-toggle="pill" href="#custom-content-jobs_data" role="tab" aria-controls="custom-content-jobs_data" aria-selected="false">بيانات العمل</a>
               </li>
               {{-- <li class="nav-item">
                 <a class="nav-link" id="addtional_data" data-toggle="pill" href="#custom-content-addtional_data" role="tab" aria-controls="custom-content-addtional_data" aria-selected="false">بيانات اضافية</a>
               </li> --}}
               
             </ul>
             <div class="tab-content" id="custom-content-below-tabContent">
               <div class="tab-pane fade show active" id="custom-content-personal_data" role="tabpanel" aria-labelledby="personal_date">
               <br>
                 <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                          <label>    اسم الموظف  </label>
                          <input type="text" name="emp_name" id="emp_name" class="form-control" value="{{ old('emp_name') }}" >
                          @error('emp_name')
                          <span class="text-danger">{{ $message }}</span> 
                          @enderror
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
                          <label>  النوع </label>
                          <select  name="emp_gender" id="emp_gender" class="form-control">
                          <option   @if(old('emp_gender')==1) selected @endif  value="1">ذكر</option>
                          <option @if(old('emp_gender')==2 ) selected @endif value="1">انثي</option>
                          </select>
                          @error('emp_gender')
                          <span class="text-danger">{{ $message }}</span> 
                          @enderror
                       </div>
                    </div>
                   
                    <div class="col-md-4">
                       <div class="form-group">
                          <label>        تاريخ الميلاد</label>
                          <input type="date" name="brith_date" id="brith_date" class="form-control" value="{{ old('brith_date') }}" >
                          @error('brith_date')
                          <span class="text-danger">{{ $message }}</span> 
                          @enderror
                       </div>
                    </div>
     
                    <div class="col-md-4">
                       <div class="form-group">
                          <label>   الرقم القومى</label>
                          <input type="text" name="emp_national_idenity" id="emp_national_idenity" class="form-control" value="{{ old('emp_national_idenity') }}" >
                          @error('emp_national_idenity')
                          <span class="text-danger">{{ $message }}</span> 
                          @enderror
                       </div>
                    </div>
                     
                    <div class="col-md-4">
                       <div class="form-group">
                          <label>    الجنسية</label>
                          <select name="emp_nationality_id" id="emp_nationality_id" class="form-control select2 ">
                             <option value="">اختر الجنسية</option>
                             @if (@isset($other['nationalities']) && !@empty($other['nationalities']))
                             @foreach ($other['nationalities'] as $info )
                             <option @if(old('emp_nationality_id')==$info->id) selected="selected" @endif value="{{ $info->id }}"> {{ $info->name }} </option>
                             @endforeach
                             @endif
                          </select>
                          @error('emp_nationality_id')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                       </div>
                    </div>
                    
                    <div class="col-md-4">
                       <div class="form-group">
                          <label>    العنوان</label>
                          <input type="text" name="staies_address" id="staies_address" class="form-control" value="{{ old('staies_address') }}" >
                          @error('staies_address')
                          <span class="text-danger">{{ $message }}</span> 
                          @enderror
                       </div>
                    </div>
     
                    <div class="col-md-4">
                       <div class="form-group">
                          <label>     رقم تليفون</label>
                          <input type="text" name="emp_work_tel" id="emp_work_tel" class="form-control" value="{{ old('emp_work_tel') }}" >
                          @error('emp_work_tel')
                          <span class="text-danger">{{ $message }}</span> 
                          @enderror
                       </div>
                    </div>
              </div>
               <div class="tab-pane fade" id="custom-content-jobs_data" role="tabpanel" aria-labelledby="jobs_data">
                 <br>
                 <div class="row">
                 <div class="col-md-4 " >
                    <div class="form-group">
                       <label>   تاريخ التعاقد</label>
                       <input type="date" name="emp_start_date" id="emp_start_date" class="form-control" value="{{ old('emp_start_date') }}" >
                       @error('emp_start_date')
                       <span class="text-danger">{{ $message }}</span> 
                       @enderror
                    </div>
                 </div>
     
                 
                 <div class="col-md-4" >
                    <div class="form-group">
                       <label>     الراتب</label>
                       <input type="text" name="emp_sal" id="emp_sal" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" class="form-control" value="{{ old('emp_sal') }}" >
                       @error('emp_sal')
                       <span class="text-danger">{{ $message }}</span> 
                       @enderror
                    </div>
                 </div>
     
              </div>
     
              </div>
          
             </div>
            
           </div>
           <!-- /.card -->
         </div>
         <!-- /.card -->
     
     
                 
                 <div class="col-md-12">
                    <div class="form-group text-center">
                       <button class="btn btn-sm btn-success" type="submit" name="submit">اضف الموظف </button>
                       {{-- <a href="{{ route('Religions.index') }}" class="btn btn-danger btn-sm">الغاء</a> --}}
                    </div>
                 </div>
              </form>
           </div>
        
        
        </div>
     </div>

<!-- jQuery -->
<script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


</body>
</html>