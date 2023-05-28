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
        table {
        border-collapse: collapse;
        width: 100%;
        font-family: Arial, sans-serif;
        color: #444;
        }

        th, td {
        text-align: left;
        padding: 8px;
        }

        th {
        background-color: #f2f2f2;
        color: #333;
        }

        tr:nth-child(even) {
        background-color: #f2f2f2;
        }

        tr:hover {
        background-color: #ddd;
        }

        td:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        }

        td:last-child {
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        }
    </style>
  <body>
    @include('admin.sidebar')
      
    @include('admin.header')
    <div class="main-panel">
        <div class="content-wrapper">   
            <div class="card">
                <h2 class="font_size">Erkaklar Mahsulotlari</h2>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                            <th>Mahsulot nomi</th>
                            <th>Tasnifi</th>
                            <th>Narxi</th>
                            <th>Chegirma Narxi</th>
                            <th>Miqdori</th>
                            <th>Rangi</th>
                            <th>O'lchami</th>
                            <th>Kategoriya_id</th>
                            <th>Rasmi</th>
                            <th>Delete</th>
                            <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                <td><a class="btn btn-danger" href="{{url('men_delete,$product->id')}}">Delete</a></td>
                                <td><a class="btn btn-success" href="">Edit</a></td>   
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                 
                </div>
            </div>
        </div>
    </div>
    
    @include('admin.script')
  </body>
  </head>
</html>