<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .font_size{
            font-size: 20px;
            padding-bottom: 20px;
        }
        .text_color{
            color: black;
            padding-bottom: 8px;
        }
        label{
            display: inline-block;
            width: 150px;
        }
        .div_design{
            padding-bottom: 10px;
        }
    </style>
  <body>
    @include('admin.sidebar')

    @include('admin.header')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="div_center">
                <h1 class="font_size">Mahsulot Qo'shish Bo'limi</h1>
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="div_design">
                                        <label>Mahsulot nomi :</label>
                                        <input class="text_color" type="text" name="name" placeholder="mahsulot nomi..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Kategoryani tanlang</label>
                                        <select name="category_id" class="text_colort" >
                                           @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="div_design">
                                        <label>Rasmi :</label>
                                        <input type="file" name="images[]" multiple="multiple">
                                    </div>
                                    <div class="div_design">
                                        <label>Qo'shish tugmasi :</label>
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

    @include('admin.script')
  </body>
  </head>
</html>
