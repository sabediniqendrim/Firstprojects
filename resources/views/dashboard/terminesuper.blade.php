@extends('dashboard.app')
@section('content')
            <div class="box box-default container">
                <div class="box-header with-border">
                    <h3 class="box-title">Termine</h3>
                </div>
                    <div class="row mt-1 text-center">
                        @foreach($appointments as $appointment)
                            <div class="card m-1 text-center">
                                <h4 class="center btn">
                                    {{$appointment['date']}}
                                </h4>
                                <h6 class="text-center">
                                    <b> {{$appointment['day_name']}}</b>
                                </h6>
                                 <hr>
                                    @if(!$appointment['off'])
                                            <div class="row">
                                                @foreach($appointment['business_hours'] as $time)
                                                    @if (!in_array($time, $appointment['reserved_hours']))

                                                        <form action="{{route('reserve')}}" method="post" class="col col-sm-1">
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
                                                    <div class="col col-sm-1" title="Dieser Termin ist bereits vergeben.">
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
                                        <h4 class="danger">Geschlossen</h4>
                                    @endif
                            </div>
                        @endforeach
                    </div>
            </div>
@endsection