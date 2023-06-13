<h1>Daily Sales</h1>
<table border="1">
<tr>
    <td>Dates</td>
    <td>Pizzas Sold</td>
</tr>
@foreach($sales as $sale)
<tr>
    <td>{{$sale['Dates']}}</td>
    <td>{{$sale['Pizzas_Sold']}}</td>
</tr>
@endforeach
</table>