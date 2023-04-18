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
        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid green;
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
                    <table class="center">
                        <tr>
                            <td>Kategoriya Nomi</td>
                            <td>Action</td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    
    @include('admin.script')
  </body>
  </head>
</html>