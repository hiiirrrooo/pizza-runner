<h1>Cancelled Orders</h1>
<table border="1">
<tr>
    <td>Customer ID</td>
    <td>Customer Name</td>
    <td>Order ID</td>
    <td>Dates</td>
</tr>
@foreach($cancelled as $cancel)
<tr>
    <td>{{$cancel['CustID']}}</td>
    <td>{{$cancel['CustName']}}</td>
    <td>{{$cancel['OrderID']}}</td>
    <td>{{$cancel['Dates']}}</td>
</tr>
@endforeach
</table>