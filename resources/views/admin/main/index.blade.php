@extends('admin.admin')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}

    <style class="cp-pen-styles">


        body {
            background: -webkit-linear-gradient(left, #6267a9, #fff);
        }



    </style>

@endsection

{{--Section footer--}}
@section('content')

    {{-- conteiner body --}}
    <div class="container mt-3">
        <div class="container-fluid" style="width: 90%;height:auto">
            <div class="row" style="width: auto;height: 400px">
                <iframe src="https://pt.widgets.investing.com/live-currency-cross-rates?theme=darkTheme&roundedCorners=true" width="100%" height="100%" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Desenvolvido por <a href="https://pt.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=LIVE_CURRENCY_X_RATES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>
            </div>
            <div class="row mt-5" style="width: auto;height: 300px">
                <div class="col">
                    <iframe src="https://sslecal2.forexprostools.com?columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&category=_employment,_economicActivity,_inflation,_centralBanks,_confidenceIndex&importance=1,2,3&features=datepicker,timezone&countries=17,25,32,6,37,5,143,26,71,22,39,14,48,10,35,7,43,38,4,36,12,72&calType=week&timeZone=15&lang=50" width="650" height="400" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"><span style="font-size: 11px;color: #333333;text-decoration: none;">Calendário Económico fornecido por <a href="https://pt.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com Portugal</a>, o portal financeiro líder.</span></div>
                </div>
                <div class="col">
                    <iframe src="https://pt.widgets.investing.com/leading-stocks?theme=darkTheme&pairs=352,474,51870" width="100%" height="93%" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Desenvolvido por <a href="https://pt.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=LEADING_STOCKS&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>
                </div>
            </div>
        </div>

    </div>

    <br>

@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}
    <script >


    </script>

@endsection


