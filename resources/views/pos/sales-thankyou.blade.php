<!-- resources/views/pos/sales-thankyou.blade.php -->
<html>
<head>
    <title>Terima Kasih atas Pembelian Anda - POS</title>
</head>
<body>
    <h1>Terima Kasih atas Pembelian Anda</h1>
    
    <p>Detail Pembelian:</p>
    <ul>
        <li>Produk: {{ $saleData['product'] }}</li>
        <li>Jumlah: {{ $saleData['quantity'] }}</li>
        <li>Total Pembelian: {{ $saleData['total_amount'] }}</li>
    </ul>

    <!-- Tambahkan elemen HTML atau informasi lain yang diperlukan -->
</body>
</html>