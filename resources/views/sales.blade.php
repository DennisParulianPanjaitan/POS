<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale - Transaksi</title>
    <link rel="stylesheet" href="{{ asset('css/sales.css') }}">
</head>
<body>

    <header>
        <h1>Point of Sale</h1>
    </header>

    <main>
        <section class="product-list">
            <!-- Daftar produk di sini -->
            <div class="product">Produk 1</div>
            <div class="product">Produk 2</div>
            <div class="product">Produk 3</div>
            <!-- ... -->
        </section>

        <section class="transaction-details">
            <!-- Rincian transaksi di sini -->
            <h2>Rincian Transaksi</h2>
            <ul>
                <li>Produk 1 - Harga: Rp 100.000</li>
                <li>Produk 2 - Harga: Rp 150.000</li>
                <!-- ... -->
            </ul>
            <p>Total: Rp 250.000</p>

            <button class="checkout-button">Checkout</button>
        </section>
    </main>

</body>
</html>
