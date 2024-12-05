<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Patient</h3>
    </div>
    <div class="box-body dependencies">
        <div class="table-responsive">
            <select class="form-select" aria-label="Default select example"  id="column1" oninput="copyValue()">
                <option selected>Open this select menu</option>
                <option value="1">Qendrim Sabedini</option>
                <option value="2">Jetmira Sabedini</option>
                <option value="3">Etrit Shabani</option>
              </select>
        </div>
    </div>
</div>




@foreach($appointments as $appointment)
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Termine</h3>
    </div>
    <div class="box-body dependencies">
        <div class="table-responsive">
                    <h2 class=" text-center ">
                        {{$appointment['date']}}
                    </h2>
                    <h3 class="text-center">
                        <b> {{$appointment['day_name']}}</b>
                    </h3>
                     <hr>
                        @if(!$appointment['off'])
                                <div class="row bg-white card-body">
                                    @foreach($appointment['business_hours'] as $time)
                                        @if (!in_array($time, $appointment['reserved_hours']))

                                            <form action="{{route('reserve')}}" method="post" class="col col-sm-4">
                                                @csrf
                                                <input type="hidden" id="column2">
                                                <input type="hidden" name="date" value=" {{$appointment['full_date']}}">
                                                <input type="hidden" name="time" value="{{$time}}">
                                                <button class="btn btn-success" type="submit">
                                                    {{$time}}
                                                </button>
                                                <br>
                                                <br>
                                            </form>
                                        @else
                                            <div class="col col-sm-4" title="Dieser Termin ist bereits vergeben.">
                                                <button class="btn btn-danger" disabled>
                                                    {{$time}}
                                                </button>
                                            </div>
                                            <br>
                                            <br>
                                        @endif
                                    @endforeach
                                </div>
                        @else     
                            <h1 class="text-center">Geschlossen</h1>
                        @endif
            
        </div>
    </div>
</div>
@endforeach
<script>
    $('.dependencies').slimscroll({height:'510px',size:'3px'});
</script>
<script>
    function copyValue() {
        // Merr vlerën nga fusha e parë
        var value = document.getElementById("column1").value;
        // Vendos vlerën në fushën e dytë
        document.getElementById("column2").value = value;
    }
</script>