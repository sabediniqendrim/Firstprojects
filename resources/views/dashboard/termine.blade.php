@extends('dashboard.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Termine</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div class="row">
                            @foreach($appointments as $appointment)
                                <div class="col-md-1">
                                    <h4 class="center">
                                        {{$appointment['full_date']}}
                                    </h4>
                                    <h4 class="center">
                                        <b> {{$appointment['day_name']}}</b>
                                    </h4>
                                    <hr>
                                @if(!$appointment['off'])
                                    @foreach($appointment['business_hours'] as $time)
                                        @if (!in_array($time, $appointment['reserved_hours']))
                                            <form action="{{route('reserve')}}" method="post">
                                                        @csrf
                                                <input type="hidden" name="date" value=" {{$appointment['full_date']}}">
                                                <input type="hidden" name="time" value="{{$time}}">
                                                    <button class="btn btn-success" type="submit">
                                                        {{$time}}
                                                    </button>
                                                    <br>
                                                    <br>
                                            </form>
                                        @else
                                            <button class="btn btn-danger" disabled>
                                                {{$time}}
                                            </button>
                                            <br>
                                            <br>
                                        @endif
                                    @endforeach
                                @else            
                                            <h4 class=" btn-danger">Geschlossen</h4>
                                @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
