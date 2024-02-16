<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 20px;
            background-color: #fff;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }
        .header {
            text-align: center;
            margin-bottom: 10px;
        }
        .header h2 {
            margin: 0;
            font-size: 16px;
        }
        .header p {
            margin: 5px 0;
            font-size: 14px;

        }
        .details {
            margin-bottom: 10px;
        }
        .details table {
            width: 100%;
            border-collapse: collapse;
        }
        .details th, .details td {
            border: 1px solid #ccc;
            padding: 5px;
            text-align: left;
            font-size: 12px;
        }
        .footer {
            text-align: center;
            margin-top: 10px;
        }
        .footer p {
            margin: 5px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>NOTA PEMBELIAN</h2>
            <p>Legenda Plastik</p>
            <p>Jl. Mega Legenda</p>
            <p>Telp. (62) 811718988</p>
        </div>
        <div class="details">
            <table>
                <tr>
                    <th colspan="2">Detail Pembelian</th>
                </tr>
                <tr>
                    <td>Produk:</td>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <td>Harga:</td>
                    <td>Rp {{ number_format($sales->price) }}</td>
                </tr>
                <tr>
                    <td>Jumlah:</td>
                    <td>{{ $sales->quantity }}</td>
                </tr>
                <tr>
                    <td>Total:</td>
                    <td>Rp {{ number_format($sales->total_price) }}</td>
                </tr>
                <tr>
                    <td>Pembayaran:</td>
                    <td>Rp {{ number_format($sales->payment) }}</td>
                </tr>
                <tr>
                    <td>Kembalian:</td>
                    <td>Rp {{ number_format($sales->return) }}</td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>Terima kasih telah berbelanja di Stock Inventory</p>
        </div>
    </div>
</body>
</html>
