<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    @include('admin.css')
    
    <style type="text/css">
        .center{
            margin:auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 10px;
        }
        .font_size{
            text-align: center;
            font-size: 20px;
            padding-top:50px;
        }
        .img_size{
            width: 50px;
            height: 50px;
        }
        .th_deg{
            padding: 2px;
        }
    </style>
  <body>
    @include('admin.sidebar')
      
    @include('admin.header')
    <div class="main-panel">
        <div class="content-wrapper">   
            <div class="card">
                <h2 class="font_size">Mahsus Kiyimlar</h2>
                <div class="card-body">
                    <table class="center">
                        <tr class="">
                            <th class="th_deg">Mahsulot nomi</th>
                            <th class="th_deg">Tasnifi</th>
                            <th class="th_deg">Narxi</th>
                            <th class="th_deg">Chegirma Narxi</th>
                            <th class="th_deg">Miqdori</th>
                            <th class="th_deg">Rangi</th>
                            <th class="th_deg">O'lchami</th>
                            <th class="th_deg">Kategoriya_id</th>
                            <th class="th_deg">Rasmi</th>
                            <th class="th_deg">Delete</th>
                            <th class="th_deg">Edit</th>
                        </tr>
                        @foreach ($product as $item)
                        <tr>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->description}}</td>
                            <td>{{ $item->price}}</td>
                            <td>{{ $item->discount_price}}</td>
                            <td>{{ $item->quantity}}</td>
                            <td>{{ $item->color_1}}/{{ $item->color_2}}/{{ $item->color_3}}/{{ $item->color_4}}/{{ $item->color_5}}/{{ $item->color_6}}</td>
                            <td>{{ $item->sz_1}}/{{ $item->sz_2}}/{{ $item->sz_3}}/{{ $item->sz_4}}/{{ $item->sz_5}}/{{ $item->sz_6}}</td>
                            <td>{{ $item->category_id}}</td>
                            @foreach ($item->images as $image)
                            <td>
                                <img class="img_size" src="{{ asset('images/' .  $image->image_path)}}">
                            </td> 
                            @endforeach
                            <td><a class="btn btn-danger" href="">Delete</a></td>
                            <td><a class="btn btn-success" href="">Edit</a></td>
                            
                        </tr>
                        @endforeach
                    </table>                  
                </div>
            </div>
        </div>
    </div>
    
    @include('admin.script')
  </body>
  </head>
</html>