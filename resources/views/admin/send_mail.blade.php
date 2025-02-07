<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
    <style>
        label {

            display: inline-block;
            width: 200px;
        }

        .div_dig {

            padding-top: 30px;
        }

        .div_center {

            text-align: center;
            padding-top: 30px;


        }
    </style>
  </head>
  <body>
    @include('admin.header')
   @include('admin.sidebar')


   <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">


<center>

    <h1 style="font-size: 30px ; font-weight: bold">Mail send to {{ $data->name }}</h1>
    <form action="{{ url('mail' , $data->id) }}" method="POST" >
        @method('POST')
        @csrf
        <div class="div_dig">
            <label>Greeting</label>
            <input type="text" name="greeting">
        </div>

        <div class="div_dig">
            <label>Mail Body</label>
            <textarea name="body"></textarea>
        </div>

        
        
        <div class="div_dig">
            <label>Action URL</label>
            <input type="text" name="action_url">
        </div>

        
        <div class="div_dig">
            <label>Action Text</label>
            <input type="text" name="action_text">
        </div>

        
        <div class="div_dig">
            <label>End Line</label>
            <input type="text" name="endline">
        </div>

        <div class="div_dig">
            <input class="btn btn-primary" type="submit" value="Send Mail">
        </div>
        
    </form>
</center>

        
      </div>
    </div>
</div>



   @include('admin.footer')
  </body>
</html>



