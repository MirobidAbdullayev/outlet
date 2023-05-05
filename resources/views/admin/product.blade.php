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
                                <form action="{{url('/add_product')}}" method="POST" encytype="multipart/form-data">
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
                                        <input class="text_color" type="text" name="discount_price" placeholder="chegirma narx..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Mahsulot miqdori :</label>
                                        <input class="text_color" type="number" min="0" name="quantity" placeholder="mahsulot miqdori..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>Kategoriya :</label>
                                        <select class="text_color" name="category" required="">
                                            <option value="">kategoriyani tanla</option>
                                            @foreach ($category as $category)
                                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="div_design">
                                        <label>1 Rangi :</label>
                                        <input class="text_color" type="text" name="color_1" placeholder="birinchi rang..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>2 Rangi :</label>
                                        <input class="text_color" type="text" name="color_2" placeholder="ikkinchi rang..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>3 Rangi :</label>
                                        <input class="text_color" type="text" name="color_3" placeholder="uchinchi rang..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>4 Rangi :</label>
                                        <input class="text_color" type="text" name="color_4" placeholder="to'rtinchi rang..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>5 Rangi :</label>
                                        <input class="text_color" type="text" name="color_5" placeholder="beshinchi rang..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>6 Rangi :</label>
                                        <input class="text_color" type="text" name="color_6" placeholder="oltinchi rang..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>1 Razmeri :</label>
                                        <input class="text_color" type="text" name="sz_1" placeholder="birinchi razmer..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>2 Razmeri :</label>
                                        <input class="text_color" type="text" name="sz_2" placeholder="ikkinchi razmer..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>3 Razmeri :</label>
                                        <input class="text_color" type="text" name="sz_3" placeholder="uchinchi razmer..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>4 Razmeri :</label>
                                        <input class="text_color" type="text" name="sz_4" placeholder="to'rtinchi razmer..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>5 Razmeri :</label>
                                        <input class="text_color" type="text" name="sz_5" placeholder="beshinchi razmer..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>6 Razmeri :</label>
                                        <input class="text_color" type="text" name="sz_6" placeholder="oltinchi razmer..." required="">
                                    </div>
                                    <div class="div_design">
                                        <label>1 Rasmi :</label>
                                        <input type="file" name="img_1" required="">
                                    </div>
                                    <div class="div_design">
                                        <label>2 Rasmi :</label>
                                        <input type="file" name="img_2" required="">
                                    </div>
                                    <div class="div_design">
                                        <label>3 Rasmi :</label>
                                        <input type="file" name="img_3" required="">
                                    </div>
                                    <div class="div_design">
                                        <label>4 Rasmi :</label>
                                        <input type="file" name="img_4" required="">
                                    </div>
                                    <div class="div_design">
                                        <label>1 Rasmi :</label>
                                        <input type="file" name="img_1" required="">
                                    </div>
                                    <div class="div_design">
                                        <label>2 Rasmi :</label>
                                        <input type="file" name="img_2" required="">
                                    </div>
                                    <div class="div_design">
                                        <label>3 Rasmi :</label>
                                        <input type="file" name="img_3" required="">
                                    </div>
                                    <div class="div_design">
                                        <label>4 Rasmi :</label>
                                        <input type="file" name="img_4" required="">
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