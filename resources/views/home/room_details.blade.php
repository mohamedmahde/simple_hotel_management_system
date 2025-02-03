<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">

 @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
       


        <div  class="our_room">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                     </div>
                  </div>
               </div>
               <div class="row">
        
                 
                     <div class="col-md-8">
                         <div id="serv_hover" class="room">
                             <div style="padding:20px" class="room_img">
                                 <figure><img style="height: 300px ; width:800px;" src="/room/{{ $room->image }}" alt="#" /></figure>
                             </div>
                             <div class="bed_room">
                                 <h3>{{ $room->room_title }}</h3>
                                 <h2 style="padding: 12px">{{ $room->description }}</h2>
                                 <h4 style="padding: 12px">Free WiFi:{{ $room->wifi }}</h4>
                                 <h4 style="padding: 12px">Free Type:{{ $room->room_type }}</h4>
                                 <h4 style="padding: 12px">price:{{ $room->price }}</h4>

                             </div>
                         </div>
                     </div>
                 
        
                 
               </div>
            </div>
         </div>

        @include('home.header')
      </header>
    

      @include('home.footer')
   </body>
</html>