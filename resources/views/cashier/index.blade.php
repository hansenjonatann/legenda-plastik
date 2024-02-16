<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .input-container {
            transition: box-shadow 0.3s ease;
        }

        .input-container:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input:focus {
            outline: none;
            border-color: #4F46E5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.3);
        }

        /* Colorful and modern styles */
        body {
            font-family: 'Inter', sans-serif;
        }

        .input-container {
            background-color: #F3F4F6;
            border-radius: 0.5rem;
        }

        input[type='number'] {
            border: 1px solid #E5E7EB;
            border-radius: 0.5rem;
            padding: 0.75rem;
            transition: border-color 0.3s ease;
        }

        input[type='number']:focus {
            border-color: #7F9CF5;
            outline: none;
        }

        button[type='submit'] {
            background-color: #6B46C1;
            color: #FFFFFF;
            border: none;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        button[type='submit']:hover {
            background-color: #553C9A;
        }
    </style>
</head>

<body class="bg-gray-100 p-6">
    <form action="{{ route('cashier.sales') }}" method="post">
        @csrf
        <div class="max-w-4xl mx-auto grid grid-cols-2 gap-8">
            <!-- Left Column: Transaction Details -->
            <div class="input-container p-6 rounded-lg shadow-md bg-white">
                <h2 class="text-lg font-medium mb-4">Details</h2>
                <div class="mb-4">
                    <label for="product" class="block text-sm font-medium text-gray-700">Product</label>
                    <select name="product" id="product"
                        class="w-full border border-gray-300 rounded-lg mt-1 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">Choose a Product</option>
                        @foreach($products as $product)
                        <option value="{{ $product->id }}" data-price='{{ $product->price_of_sales }}'>{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" name="price" id="price"
                        class="w-full border border-gray-300 rounded-lg mt-1 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
                        readonly>
                </div>
            </div>

            <!-- Right Column: Payment Details -->
            <div class="input-container p-6 rounded-lg shadow-md bg-white">
                <h2 class="text-lg font-medium mb-4">Payment Details</h2>
                <div class="mb-4">
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                    <input type="number" name="quantity" id="quantity"
                        class="w-full border border-gray-300 rounded-lg mt-1 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="total" class="block text-sm font-medium text-gray-700">Total</label>
                    <input type="number" name="total" id="total"
                        class="w-full border border-gray-300 rounded-lg mt-1 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
                        readonly>
                </div>
                <div class="mb-4">
                    <label for="payment" class="block text-sm font-medium text-gray-700">Payment</label>
                    <input type="number" name="payment" id="payment"
                        class="w-full border border-gray-300 rounded-lg mt-1 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="change" class="block text-sm font-medium text-gray-700">Change</label>
                    <input type="number" name="change" id="change"
                        class="w-full border border-gray-300 rounded-lg mt-1 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <button type="submit"
                    class="text-white text-center w-full font-bold py-2 rounded-md bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Pay Now
                </button>

                @if(auth()->user()->roles == 'cashier')
                <a href="{{ route('cashier.close') }}"
                    class="text-red-700 font-bold text-xl text-center block mt-4 hover:text-red-500">Close Cashier</a>
                @endif
            </div>
        </div>
    </form>

    <script>
        // Menambahkan event listener untuk setiap kali pilihan produk berubah
        document.getElementById('product').addEventListener('change', function() {
            // Mendapatkan nilai harga dari opsi yang dipilih
            var selectedOption = this.options[this.selectedIndex];
            var price = selectedOption.getAttribute('data-price');

            // Mengatur nilai harga ke input harga
            document.getElementById('price').value = price;
        });

        document.getElementById('quantity').addEventListener('input', function() {
            // Mendapatkan nilai harga dari input harga
            var price = document.getElementById('price').value;
        
            // Mendapatkan nilai kuantitas dari input kuantitas
            var quantity = this.value;

            // Menghitung total dengan mengalikan harga dengan kuantitas
            var total = price * quantity;

            // Mengatur nilai total ke input total
            document.getElementById('total').value = total.toFixed(2); // Membulatkan ke 2 digit desimal
        });

        document.getElementById('payment').addEventListener('input', function() {
            // Mendapatkan nilai total dan pembayaran
            var total = document.getElementById('total').value;
            var payment = this.value;

            // Menghitung kembalian
            var change = payment - total;

            // Menampilkan nilai kembalian
            document.getElementById('change').value = change.toFixed(2); // Membulatkan ke 2 digit desimal
        });
    </script>
</body>

</html>
