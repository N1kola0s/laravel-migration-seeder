@extends ('layouts.app')

        @section ('content')
            
            <h1 class="py-5 text-center">Viaggia lontano da me</h1>

            <div class="container">

                <div class="row row-cols-3 p-5 g-3">

                    @forelse($travels as $travel)
                        
                        <div class="col">

                            <div class="card" style="width: 18rem;">

                                <img src="{{$travel->image}}" 
                                class="card-img-top" alt="{{$travel->hotel}}">

                                <div class="card-body">

                                    <h5 class="card-title text-center">
                                        {{$travel->destination}}
                                    </h5>

                                    <p class="card-text">
                                        <strong>Offerta viaggio:</strong> {{$travel->package}} <br>

                                        <strong>Dal</strong> {{$travel->start_travel}}  <strong>al</strong> {{$travel->end_travel}} <br>

                                        <strong>Compagnia aerea</strong> {{$travel->airline_company}} <br>

                                        <strong>Hotel: </strong> {{$travel->hotel}} <br>

                                        <strong>Numero di persone: </strong> {{$travel->travelers}} <br>

                                        <strong>Numero Camere: </strong> {{$travel->rooms}} <br>

                                        <strong>Prezzo</strong> {{$travel->price}} euro <br>

                                        <strong>Servizi: </strong> {{$travel->description}} 
                                    
                                    </p>

                                    
                                    <a href="#" class="btn btn-primary w-100 text-center">Acquista viaggio</a>
                                    

                                   

                                </div>
                                <!-- /.card-title -->

                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col -->

                        @empty

                        <p>N/A</p>     

                    @endforelse

                </div>
                <!-- /.row -->   
            </div>
        @endsection


