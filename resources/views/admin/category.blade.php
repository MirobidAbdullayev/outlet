<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size: 20px;
            padding-bottom: 20px;
        }
        .input_color{
            color: black;
        }
    </style>
  <body>
    @include('admin.sidebar')
      
    @include('admin.header')
        
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="div_center">
                <h2 class="h2_font">Kategoriya Qo'shish</h2>
                <form action="{{url('add_category')}}" method="POST">
                    @csrf
                    <input class="input_color" type="text" name="category" placeholder="Kategoriya nomini yozing...">
                    <input type="submit" class="btn btn-primary" name="submit" value="Qo'shish">
                    <br>
                    <br>                    
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th> KATEGORIYA NOMI </th>
                                            <th> ACTION </th>
                                        </tr>
                                        </thead>
                                        @foreach ($data as $data)
                                        <tbody>
                                        <tr>
                                            <td> {{$data->id}} </td>
                                            <td> {{$data->category_name}} </td>
                                            <td>
                                                <a class="badge badge-outline-danger" onclick="return confirm('Siz haqiqatdan ham manashu kategoriyani o\'chirmoqchimisiz?')" href="{{url('delete_category', $data->id)}}">Delete</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @include('admin.script')
  </body>
  </head>
</html>