<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 bordered">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="7800">0</span>
                        <small class="font-green-sharp">$</small>
                    </h3>
                    <small>Ocorrências Cadastradas</small>
                </div>
                <div class="icon">
                    <i class="icon-pie-chart"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                        <span class="sr-only">76% progress</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> progress </div>
                    <div class="status-number"> <?$objQtde_TotOcor?>% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 bordered">
            <div class="display">
                <div class="number">
                    <h3 class="font-red-haze">
                        <span data-counter="counterup" data-value="1349">0</span>
                        <small class="font-red-haze">$</small>
                    </h3>
                    <small>Ocorrências mês anterior</small>
                </div>
                <div class="icon">
                    <i class="icon-like"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                        <span class="sr-only">85% change</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> change </div>
                    <div class="status-number"> 85% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 bordered">
            <div class="display">
                <div class="number">
                    <h3 class="font-blue-sharp">
                        <span data-counter="counterup" data-value="567">6</span>
                        <small class="font-blue-sharp">$</small>
                    </h3>
                    <small>Ocorrências finalizadas.</small>
                </div>
                <div class="icon">
                    <i class="icon-basket"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                        <span class="sr-only">45% grow</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> grow </div>
                    <div class="status-number"> 45% </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 bordered">
            <div class="display">
                <div class="number">
                    <h3 class="font-purple-soft">
                        <span data-counter="counterup" data-value="276">5</span>
                        <small class="font-purple-soft">$</small>
                    </h3>
                    <small>Ocorrências no mês atual</small>
                </div>
                <div class="icon">
                    <i class="icon-user"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                        <span class="sr-only">56% change</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> change </div>
                    <div class="status-number"> 57% </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('conteudo')
<div class="page-head">

    <div class="container">
        <div class="row justify-content-center">

            <div class="row">
                <div class="col-lg-10">
                    <div class="portlet light bordered"> 
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <span class="caption-subject font-red bold">SAC Ocorrências</span>
                            </div>
                            <div class="tools"> </div>
                        </div>
                        <div class="portlet-body">
                            <i class="fa fa-thumbs-o-up fa-2x"></i> Bem Vindo!<br>
                            <br>Para começar, escolha uma das opções ao lado.                            
                        </div>
                    </div>
                </div>
            </div>           

        </div>
    </div>
@endsection