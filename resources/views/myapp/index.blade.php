<!DOCTYPE html>
<html>
<head>
    <title>MyApp</title>
</head>
<body>

<table width="100%" height="100%">
    <tr>
        <td colspan="2" align="center">
            <h1>APLIKASI DATA PRODUCT & CUSTOMER</h1>
        </td>
    </tr>
    <tr>
        <td width="200" valign="top">
            <h3>MENU</h3>
            <ul>
                <li><a href="#" onclick="show('product'); return false;">PRODUCT</a></li>
                <li><a href="#" onclick="show('customer'); return false;">CUSTOMER</a></li>
            </ul>
        </td>
        <td valign="top">
            <div id="product">
                @include('myapp.partials.product', ['products' => $products])
            </div>
            <div id="customer" style="display:none;">
                @include('myapp.partials.customer', ['customers' => $customers])
            </div>
        </td>
    </tr>
</table>

<script>
function show(menu) {
    document.getElementById('product').style.display = menu == 'product' ? 'block' : 'none';
    document.getElementById('customer').style.display = menu == 'customer' ? 'block' : 'none';
}
</script>

</body>
</html>
