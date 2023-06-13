<h1>Pizza Counts</h1>
<table border="1">
<tr>
    <td>Dates</td>
    <td>Pizza ID</td>
    <td>Pizza Name</td>
    <td>Pizzas Sold</td>
</tr>
@foreach($pizzacounts as $pizzacount)
<tr>
    <td>{{$pizzacount['Dates']}}</td>
    <td>{{$pizzacount['PizzaID']}}</td>
    <td>{{$pizzacount['PizzaName']}}</td>
    <td>{{$pizzacount['PizzaCount']}}</td>
</tr>
@endforeach
</table>