<h1>Successful Orders</h1>
<table border="1">
<tr>
    <td>Order ID</td>
    <td>Customer ID</td>
    <td>Customer Name</td>
    <td>Runner ID</td>
    <td>Runner Name</td>
    <td>Order DT</td>
    <td>Pickup DT</td>
    <td>Distance</td>
    <td>Duration</td>
</tr>
@foreach($successful as $success)
<tr>
    <td>{{$success['OrderID']}}</td>
    <td>{{$success['CustID']}}</td>
    <td>{{$success['CustName']}}</td>
    <td>{{$success['RunnerID']}}</td>
    <td>{{$success['RunnerName']}}</td>
    <td>{{$success['OrderDT']}}</td>
    <td>{{$success['PickupDT']}}</td>
    <td>{{$success['distance']}}</td>
    <td>{{$success['duration']}}</td>
</tr>
@endforeach
</table>