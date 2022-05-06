<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
       
       <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        <section id="tabs">
            <div class="container">
                <h6 class="section-title h1">Repository Pattern Example</h6>
                <div class="row">
                    <div class="col-md-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-store-tab" data-toggle="tab" href="#nav-store" role="tab" aria-controls="nav-store" aria-selected="true">Store Data</a>
                                <a class="nav-item nav-link" id="nav-read-tab" data-toggle="tab" href="#nav-read" role="tab" aria-controls="nav-read" aria-selected="false">Read Data</a>
                  
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-store" role="tabpanel" aria-labelledby="nav-store-tab">
                      @if(session()->has('success_message'))
                      <div class="alert alert-success">
                          {{session('success_message')}}
                      </div>
                      @endif
                                <form action="{{route('store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Full Name</label>
                                    <div class="form-group">
                                        <input type="text" placeholder="Full Name" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Email</label>
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Password</label>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" name="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary"/>
                                </div>
                            </div>
                        </form>
                           
                            </div>
                            <div class="tab-pane fade" id="nav-read" role="tabpanel" aria-labelledby="nav-read-tab">
             <table class="table" >
                 <thead>
                     <tr>
                         <th>#</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Creation Date</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach($users as $key => $user)
                         <tr>
                             <td>{{$key + 1}}</td>
                             <td>{{$user->name}}</td>
                             <td>{{$user->email}}</td>
                             <td>{{\Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
                         </tr>
                     @endforeach
                 </tbody>
                 
             </table>
                            </div>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
