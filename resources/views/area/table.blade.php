
<div class="row">
    <div class="col-md-9 col-sm-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-comments"></i>Áreas 
                </div>
                {{-- <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                    <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                    <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                </div> --}}
            </div> 
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Sigla</th>                                    
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($area as $areas)                        
                                <tr>
                                <th scope="row">{{$areas->id}}</th>
                                    <td width="50%">{{$areas->descricao}}</td>
                                    <td><b>{{$areas->sigla}}</b></td>                                        
                                    @if ($areas->ativo == 'N')                                    
                                        <td><span class="label label-sm label-danger"> {{"Inativa"}} </span></td>
                                    @else
                                        <td><span class="label label-sm label-success"> {{"Ativa"}} </span></td>
                                    @endif
                                </tr>
                            @endforeach                     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>
</div>

<script src="{{asset('metronic/modelo/tabelaAjax.js')}}" type="text/javascript"></script>