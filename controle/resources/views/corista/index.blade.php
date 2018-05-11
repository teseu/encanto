@extends('layout.layout')

@section('title', 'Coristas')

@section('content')
@include('corista._create')

<div class="col-lg-12">
    <div class="panel panel-grey">
        <div class="panel-heading">Lista dos Coristas <span class="pull-right"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#coristaCreate"><i class="fa fa-plus"></i></button>&nbsp;&nbsp;</span></div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Avatar</th>
                    <th>Corista</th>
                    <th>Ramal</th>
                    <th>Naipe</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($coristas as $corista) 
                <tr>
                    <td><img src="{{URL::asset('resources/assets/img/')}}/{{ $corista->pessoas->avatar }}" alt="" class="img-responsive avatar img-circle" style="width:36px;height:36px;"/></td>
                    <td>
                        <a href="{{ url('/pessoas', $corista->pessoas->id) }}">{{ $corista->pessoas->name }}</a>
                    </td>
                    <td>{{  $corista->pessoas->ramal  }}</td>
                    <td>{{  $corista->naipes->naipe  }}</td>
                    <td>
                        @if ($corista->left_on)
                        <span class="label label-danger">Inativo</span>
                        @else
                        <span class="label label-success">Ativo</span>
                        @endif
                    </td>
                    <td>
                        <span>
                            <a href="coristas/{{$corista->id}}/edit"><span class="text-blue"><i class="fa fa-edit"></i></span></a>
                        </span>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @include('errors.list')
        </div>
    </div>
</div>
@include('corista.script')
@endsection