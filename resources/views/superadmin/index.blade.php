@extends('layouts.app')

@section('content')

    @section('title')
    &nbsp;
    <h3>
        Bienvenido SuperAdmin {{auth()->user()->name}}
    </h3>
    &nbsp;
    @endsection

    @push('cards')
        @section('card_title')
            Todos los contratos
            <!--
            <span title="TOOL TIP DE AYUDA PARA ESTA TABLA.">
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 7C2 4.23858 4.23858 2 7 2H17C19.7614 2 22 4.23858 22 7V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V7ZM7 4C5.34315 4 4 5.34315 4 7V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V7C20 5.34315 18.6569 4 17 4H7ZM12 7.5C10.5523 7.5 10 8.55229 10 9C10 9.55229 9.55228 10 9 10C8.44772 10 8 9.55229 8 9C8 7.44772 9.44771 5.5 12 5.5C13.1557 5.5 14.1702 5.78891 14.9085 6.43492C15.6643 7.09623 16 8.01748 16 9C16 10.1875 15.6945 11.0279 15.1178 11.6677C14.8502 11.9645 14.5539 12.1844 14.2896 12.3608C14.1648 12.4442 14.0375 12.524 13.9223 12.5962L13.9043 12.6075C13.7803 12.6853 13.6678 12.7561 13.5575 12.8302C13.2061 13.0662 13.0643 13.2421 13.0061 13.3563C12.9615 13.4436 12.9296 13.5614 12.9786 13.7942C13.0922 14.3347 12.7462 14.865 12.2058 14.9786C11.6653 15.0922 11.135 14.7462 11.0214 14.2058C10.8952 13.6054 10.938 13.0088 11.2247 12.4472C11.4975 11.9124 11.9434 11.505 12.4425 11.1698C12.5822 11.076 12.7197 10.9896 12.8418 10.9131L12.851 10.9073C12.9733 10.8306 13.0787 10.7646 13.1791 10.6975C13.3836 10.561 13.5248 10.4478 13.6322 10.3286C13.8055 10.1363 14 9.81253 14 9C14 8.48252 13.8357 8.15377 13.5915 7.94008C13.3298 7.71109 12.8443 7.5 12 7.5ZM12 15.7812C11.4477 15.7812 11 16.229 11 16.7812C11 17.3335 11.4477 17.7812 12 17.7812C12.5523 17.7812 13 17.3335 13 16.7812C13 16.229 12.5523 15.7812 12 15.7812Z" fill="black"/>
                </svg>
            </span>
            -->
        @overwrite
        
        @section('card_content')
        <table class='table data-table-global datatable' id='datatable'>
            <thead>
                <tr>
                    <th>Contrato</th>
                    <th>Faena</th>
                    <th>Área</th>
                    <th>Centro</th>
                    <th>Servicio / Bien</th>
                    <th>Contrato SAP</th>
                    <th>Admin</th>
                    <th>Tipo Contrato</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contratos as $contrato)
                <tr>
                    <td>{{$contrato->id}}</td>
                    <td>{{$contrato->faena->nombre_faena}}</td>
                    <td>{{$contrato->area->nombre_area}}</td>
                    <td>{{$contrato->centro->nombre_centro}}</td>
                    <td>{{$contrato->servicio_bien->nombre_servicio_bien}}</td>
                    <td>{{$contrato->contrato_sap}}</td>
                    <td>{{$contrato->admin_contrato->nombre}}</td>
                    <!--TODO revisar por que retorna un arreglo en vez de un objeto -->
                    <td>{{$contrato->detalle_contrato[0]->tipo_contrato->nombre_tipo}}</td>
                    <td>{{$contrato->estado_contrato}}</td>

                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-primary" href="{{route('contrato.show', [$contrato->id])}}" title="Mostrar Contrato"><i class='fa fa-info'></i></a>
                            <a class="btn btn-danger" href="" onclick="alert('Esta acción elimina el contrato.\nEs Irreversible')" title="Cancelar Contrato"><i class='fa fa-ban'></i></a>
                            
    
                            {{-- <a class="btn btn-primary" href="{!! route('solicitud.edit', [$solicitud->id]) !!}"><i class='fas fa-edit'></i></a> --}}
                        </div>
                    </td>
                </tr>
                @endforeach
    
            </tbody>
        </table>
        @overwrite
        @include('layouts.card')
    @endpush


    @section('down_cards')
    <div class="row">
        <div class="col">
            <a href="" class='btn btn-primary'>Opción 1</a>
        </div>
    </div>
    @endsection
@endsection
