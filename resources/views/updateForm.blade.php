<h1>Update Purchase Request</h1>

<form action="/update" method="post">
    @csrf
    Purchase ID <input name="purchase_id" type="int" value="{{$x['purchase_id']}}" hidden><br>
    Name <input name="name" type="text" value="{{$x['name']}}" required><br>
    Date <input name="date" type="date" value="{{$x['date']}}" required><br>
    Position <input name="position" type="text" value="{{$x['position']}}" required><br>
    Support <input name="support" type="text" value="{{$x['support']}}" required><br>
    Payment Term <input name="payment_term" value="{{$x['payment_term']}}" type="int" required><br>
    EDD <input name="edd" type="text" value="{{$x['edd']}}" required><br>

    <h1>Item Details</h1>
    Item Code <input name="item_code" type="text" value="{{$x['item_code']}}" required><br>
    Description <input name="description" type="text" value="{{$x['description']}}" required><br>
    Supplier <input name="supplier" type="text" value="{{$x['supplier']}}" required><br>
    Quantity <input name="quantity" type="int" value="{{$x['quantity']}}" required><br>
    Claim <input name="claim" type="int" value="{{$x['claim']}}" required><br>
    Unit Price <input name="unit_price" type="number" value="{{$x['unit_price']}}" required><br>
    Total Price <input name="total_price" type="number" value="{{$x['total_price']}}" required><br>
    Reason <input name="reason" type="text" value="{{$x['reason']}}" required><br>
    Attachment <input name="attachment" type="file" value="{{$x['attachment']}}" required><br>

    
    <br><br>
    <button type="submit">Submit</button>
</form>