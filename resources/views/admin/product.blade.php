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
                                        <label>Mahsulot tasnifi :</label>
                                        <input class="text_color" type="text" name="description" placeholder="mahsulot tasnifi..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Mahsulot narxi :</label>
                                        <input class="text_color" type="text" name="price" placeholder="mahsulot narxi..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Chegirma narxi :</label>
                                        <input class="text_color" type="text" name="discount_price" placeholder="chegirma narxi..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Mahsulot miqdori :</label>
                                        <input class="text_color" type="number" name="quantity" placeholder="mahsulot miqdori..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Mahsulotni 1-rangi :</label>
                                        <input class="text_color" type="text" name="color_1" placeholder="mahsulot rangi..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Mahsulotni 2-rangi :</label>
                                        <input class="text_color" type="text" name="color_2" placeholder="mahsulot rangi..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Mahsulotni 3-rangi :</label>
                                        <input class="text_color" type="text" name="color_3" placeholder="mahsulot rangi..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Mahsulotni 4-rangi :</label>
                                        <input class="text_color" type="text" name="color_4" placeholder="mahsulot rangi..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Mahsulotni 5-rangi :</label>
                                        <input class="text_color" type="text" name="color_5" placeholder="mahsulot rangi..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Mahsulotni 6-rangi :</label>
                                        <input class="text_color" type="text" name="color_6" placeholder="mahsulot rangi..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Razmer 1 :</label>
                                        <input class="text_color" type="text" name="sz_1" placeholder="mahsulot o'lchami..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Razmer 2 :</label>
                                        <input class="text_color" type="text" name="sz_2" placeholder="mahsulot o'lchami..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Razmer 3 :</label>
                                        <input class="text_color" type="text" name="sz_3" placeholder="mahsulot o'lchami..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Razmer 4 :</label>
                                        <input class="text_color" type="text" name="sz_4" placeholder="mahsulot o'lchami..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Razmer 5 :</label>
                                        <input class="text_color" type="text" name="sz_5" placeholder="mahsulot o'lchami..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Razmer 6 :</label>
                                        <input class="text_color" type="text" name="sz_6" placeholder="mahsulot o'lchami..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Kategoryani tanlang</label>
                                        <select name="category_id" class="text_color" >
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
