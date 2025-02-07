<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>

      .table_deg{

          border: 2px solid white;
          margin: auto;
          width: 80%;
          text-align: center;
          margin-top: 40px;
      }

      .th_deg{

          background-color: skyblue;
          padding: 15px;
      }

      tr{

          border: 3px solid white;
      }

      td{

          padding: 10px;
      }
  </style>
  </head>
  <body>
    @include('admin.header')
   @include('admin.sidebar')


   <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">




        <table class="table_deg">
          <tr>
              <th class="th_deg">Name</th>
              <th class="th_deg">Email</th>
              <th class="th_deg">Phone</th>
              <th class="th_deg">Message</th>
              <th class="th_deg">Send Email</th>
    
          </tr>
      
          @foreach ( $messages as $messages )
      
          <tr>
      
                  
              <td>{{ $messages->name  }}</td>
              <td>{{ $messages->email}}</td>
              <td>{{ $messages->phone  }}</td>
              <td>{{ $messages->message  }}</td>


              <td>
                <a class="btn btn-primary" href="{{ url('send_mail' , $messages->id) }}">Send Email</a>
              </td>

          </tr>
      
          @endforeach
      
      </table>
        
      </div>
    </div>
</div>



   @include('admin.footer')
  </body>
</html>



