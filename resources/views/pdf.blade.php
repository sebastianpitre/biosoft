@extends('layouts.panel')

@section('content')
@include('includes.panel.topnav', ['title' => 'Perfil'])
<div class="container-fluid my-5 py-2">
<div class="row">
<div class="col-md-8 col-sm-10 mx-auto">
<form class="" action="index.html" method="post">
<div class="card my-sm-5 my-lg-0">
<div class="card-header text-center">
<div class="row justify-content-between">
<div class="col-md-4 text-start">
<img class="mb-2 w-25 p-2" src="../../../assets/img/logo-ct-dark.png" alt="Logo">
<h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
St. Independence Embankment, 050105 Bucharest, Romania
</font></font></h6>
<p class="d-block text-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tel: +4 (074) 1090873</font></font></p>
</div>
<div class="col-lg-3 col-md-7 text-md-end text-start mt-5">
<h6 class="d-block mt-2 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Billed to: John Doe</font></font></h6>
<p class="text-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4006 Locust View Drive</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
San Francisco CA</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
California
</font></font></p>
</div>
</div>
<br>
<div class="row justify-content-md-between">
<div class="col-md-4 mt-auto">
<h6 class="mb-0 text-start text-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Invoice no
</font></font></h6>
<h5 class="text-start mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
#0453119
</font></font></h5>
</div>
<div class="col-lg-5 col-md-7 mt-auto">
<div class="row mt-md-5 mt-4 text-md-end text-start">
<div class="col-md-6">
<h6 class="text-secondary mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Invoice date:</font></font></h6>
</div>
<div class="col-md-6">
<h6 class="text-dark mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/03/2019</font></font></h6>
</div>
</div>
<div class="row text-md-end text-start">
<div class="col-md-6">
<h6 class="text-secondary mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha de vencimiento:</font></font></h6>
</div>
<div class="col-md-6">
<h6 class="text-dark mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11/03/2019</font></font></h6>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div class="row">
 <div class="col-12">
<div class="table-responsive border-radius-lg">
<table class="table text-right">
<thead class="bg-default">
<tr>
<th scope="col" class="pe-2 text-start ps-2 text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Articulo</font></font></th>
<th scope="col" class="pe-2 text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cantidad</font></font></th>
<th scope="col" class="pe-2 text-white" colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Velocidad</font></font></th>
<th scope="col" class="pe-2 text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cantidad</font></font></th>
</tr>
</thead>
<tbody>
<tr>
<td class="text-start"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soporte prémium</font></font></td>
<td class="ps-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td>
<td class="ps-4" colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 9.00</font></font></td>
<td class="ps-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 9.00</font></font></td>
</tr>
<tr>
<td class="text-start"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soft UI Design System PRO</font></font></td>
<td class="ps-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
<td class="ps-4" colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 100.00</font></font></td>
<td class="ps-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 300.00</font></font></td>
</tr>
<tr>
<td class="text-start"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parts for service</font></font></td>
<td class="ps-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td>
<td class="ps-4" colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 89.00</font></font></td>
<td class="ps-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 89.00</font></font></td>
</tr>
</tbody>
<tfoot>
<tr>
<th></th>
<th></th>
<th class="h5 ps-4" colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total</font></font></th>
<th colspan="1" class="text-right h5 ps-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 698</font></font></th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
<div class="card-footer mt-md-5 mt-4">
<div class="row">
<div class="col-lg-5 text-left">
<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¡Gracias!</font></font></h5>
<p class="text-secondary text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">If you encounter any issues related to the invoice you
can contact us at:</font></font></p>
<h6 class="text-secondary mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
email:
</font></font><span class="text-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">support@creative-tim.com</font></font></span>
</h6>
</div>
<div class="col-lg-7 text-md-end mt-md-0 mt-3">
<button class="btn btn-primary mt-lg-7 mb-0" onclick="window.print()" type="button" name="button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Imprimir</font></font></button>
</div>
</div>
</div>
</div>
</form>
</div>
</div>

</div>  

@endsection
