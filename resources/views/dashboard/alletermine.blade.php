@extends('dashboard.app')

@section('content')
            <div class="box box-default container">
                <div class="box-header with-border">
                    <h3 class="box-title">Alle Termine fur  {{Auth::user()->name}}</h3>
                </div>
                    <div class="row">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Data</th>
                                <th scope="col">Time</th>
                                <th scope="col">Reserve am</th>
                              </tr>
                            </thead>
                            <tbody{{$c=1}}>
                                
                             @foreach ($alletermine as $item)
                                <tr>
                                    <th scope="row">{{$c++}}</th>
                                    <td>{{$item->date}}</td>
                                    <td>{{$item->time->format('H:i')}}</td>
                                    <td>{{$item->created_at->format('d M Y H:i')}}</td>
                                </tr>
                             @endforeach
                            </tbody>
                          </table>
                    </div>
            </div>
@endsection
