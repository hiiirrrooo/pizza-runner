<h1>Unique Customers</h1>
<table border="1">
<tr>
    <td>Order ID</td>
    <td>Customer ID</td>
    <td>Customer Name</td>
    <td>Date Ordered</td>
</tr>
@foreach($uniques as $unique)
<tr>
    <td>{{$unique['OrderID']}}</td>
    <td>{{$unique['CustID']}}</td>
    <td>{{$unique['CustName']}}</td>
    <td>{{$unique['DateOrdered']}}</td>
</tr>
@endforeach
</table>