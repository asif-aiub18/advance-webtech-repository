<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <h2 class="card-title">Prodcut Service</h2>
                        @foreach($data as $d)
                        
                        <h4 class="card-title">Product name:  {{$d["name"]}} </h4>
                        <h4 class="card-title">Product details:  {{$d["details"]}} </h4>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>       