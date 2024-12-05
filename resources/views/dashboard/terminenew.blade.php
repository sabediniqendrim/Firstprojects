@extends('dashboard.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Termine</h3>
                </div>
                    <div class="row">
                        @foreach($appointments as $appointment)
                            <div class="col-md-3 card m-1">
                                <h4 class="center btn btn-warning">
                                    {{$appointment['date']}}
                                </h4>
                                <h6 class="center btn btn-info">
                                    <b> {{$appointment['day_name']}}</b>
                                </h6>
                                 <hr>
                                    @if(!$appointment['off'])
                                            <div class="row">
                                                @foreach($appointment['business_hours'] as $time)
                                                    @if (!in_array($time, $appointment['reserved_hours']))

                                                        <form action="{{route('reserve')}}" method="post" class="col col-sm-4">
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
                                                    <div class="col col-sm-4">
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
                                        <br>
                                        <br>     
                                        <h4 class=" btn btn-danger" style="">Geschlossen</h4>
                                    @endif
                            </div>
                        @endforeach
                    </div>
            </div>
    </div>
</div>
@endsection
