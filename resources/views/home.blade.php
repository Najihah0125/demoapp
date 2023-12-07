
<body>
<h1>List of Purchase Request</h1>

<table>
    <tr>
        <th>Purchase ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Position</th>
        <th>Support</th>
        <th>Payment Term</th>
        <th>EDD</th>
        <th>Item Code</th>
        <th>Description</th>
        <th>Supplier</th>
        <th>Quantity</th>
        <th>Claim</th>
        <th>Unit Price</th>
        <th>Unit Price</th>
        <th>Reason</th>
        <th>Attachment</th>
    </tr>
    @foreach($list as $x)
    <tr>
        <th>{{$x['purchase_id']}}</th>
        <td>{{$x['name']}}</td>
        <td>{{$x['date']}}</td>
        <td>{{$x['position']}}</td>
        <td>{{$x['support']}}</td>
        <td>{{$x['payment_term']}}</td>
        <td>{{$x['edd']}}</td>
        <td>{{$x['item_code']}}</td>
        <td>{{$x['description']}}</td>
        <td>{{$x['supplier']}}</td>
        <td>{{$x['quantity']}}</td>
        <td>{{$x['claim']}}</td>
        <td>{{$x['unit_price']}}</td>
        <td>{{$x['total_price']}}</td>
        <td>{{$x['reason']}}</td>
        <td>{{$x['attachment']}}</td>
        <td><a href = {{'updateForm/'.$x['purchase_id']}}><b style="color:blue; text-decoration: underline;">Update</b></a></td>
        <td><a href = {{'delete/'.$x['purchase_id']}}><b style="color:red; text-decoration: underline;">Delete</b></a></td>
    </tr>
    @endforeach
</table>
</body>