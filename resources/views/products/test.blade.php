@extends('dashboard')
@section('content')
    <style>
        /* Additional CSS styles for the product cards */
        .product-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product-card {
            width: 300px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f0f0f0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .image-wrapper {
            position: relative;
            width: 100%;
            padding-top: 100%;
            /* 1:1 Aspect Ratio (square) */
            overflow: hidden;
        }

        .product-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-card .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 10px;
            margin-left: 5px;

        }

        .product-card:hover {
            transform: scale(1.1);
            /* Enlarge the card on hover */
            z-index: 1;
            /* Bring the hovered card to the front */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Add a shadow effect */
        }

        /* Product Card Details on Hover */
        .product-card:hover .card-details {
            height: auto;
            /* Display all the details on hover */
        }


        .product-card .card-details {
            font-size: 1rem;
            color: #666;
            /* Set the container height and text properties */
            height: 1.2rem;
            /* Adjust the height to fit the first row of text */
            overflow: hidden;
            text-overflow: ellipsis;
            /* Display ellipsis (...) for overflow text */
            white-space: nowrap;
            /* Prevent the text from wrapping */
            transition: height 0.3s ease;
            /* Add smooth transition for height change */
            margin-left: 5px;

            text-overflow: ellipsis;
            /* Display ellipsis (...) for overflow text */
            white-space: nowrap;
            /* Prevent the text from wrapping */
            transition: height 0.3s ease;

            margin-right: 5px;
            margin-bottom: 10px;

        }

        /* Product Card Details on Hover */
        .product-card:hover .card-details {
            max-height: none;
            /* Display all the details on hover */
        }

        /* Display points for extra characters */
        .product-card .card-details.extra {
            display: none;
        }

        /* Show extra details below the card on hover */
        .product-card:hover .card-details.extra {
            display: block;
            margin-top: 10px;
            /* Adjust the space between the first row and the extra details */
        }

        /* Non-selected Cards on Hover */
        .product-card:not(:hover) {
            opacity: 0.7;
            /* Reduce opacity of non-selected cards */
        }


        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');

        body {
            /* solid background */
            background: rgb(0, 212, 255);

            /* gradient background*/
            background: linear-gradient(45deg, rgba(0, 212, 255, 1) 0%, rgba(11, 3, 45, 1) 100%);

            /* photo background */
            background-image: url(https://images.unsplash.com/photo-1619204715997-1367fe5812f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1889&q=80);
            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(17, 25, 40, 0.25);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
            padding: 38px;
            filter: drop-shadow(0 30px 10px rgba(0, 0, 0, 0.125));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;

        }

        .wrapper {
            width: 100%;
            height: 100%;

        }

        .banner-image {
            background-image: url(https://images.unsplash.com/photo-1641326201918-3cafc641038e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80);
            background-position: center;
            background-size: cover;
            height: 300px;
            width: 100%;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.255)
        }

        h1 {
            font-family: 'Righteous', sans-serif;
            color: rgba(255, 255, 255, 0.98);
            text-transform: uppercase;
            font-size: 2.4rem;
        }

        p {
            color: #fff;
            font-family: 'Lato', sans-serif;
            text-align: center;
            font-size: 0.8rem;
            line-height: 150%;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .button-wrapper {
            margin-top: 18px;
        }

        .btn {
            border: none;
            padding: 12px 24px;
            border-radius: 24px;
            font-size: 12px;
            font-size: 0.8rem;
            letter-spacing: 2px;
            cursor: pointer;
        }

        .btn+.btn {
            margin-left: 10px;
        }

        .outline {
            background: transparent;
            color: rgba(0, 212, 255, 0.9);
            border: 1px solid rgba(0, 212, 255, 0.6);
            transition: all .3s ease;

        }

        .outline:hover {
            transform: scale(1.125);
            color: rgba(255, 255, 255, 0.9);
            border-color: rgba(255, 255, 255, 0.9);
            transition: all .3s ease;
        }

        .fill {
            background: rgba(0, 212, 255, 0.9);
            color: rgba(255, 255, 255, 0.95);
            filter: drop-shadow(0);
            font-weight: bold;
            transition: all .3s ease;
        }

        .fill:hover {
            transform: scale(1.125);
            border-color: rgba(255, 255, 255, 0.9);
            filter: drop-shadow(0 10px 5px rgba(0, 0, 0, 0.125));
            transition: all .3s ease;
        }
    </style>
    <div class="main-content">

        {{-- <h2>Products</h2> --}}
        <a href="{{ route('product.create') }}" class="btn btn-outline-success btn-lg btn-block">Add Product</a><br><br>
        <br>
        <div class="product-cards">
            @if ($products->count() > 0)
                @foreach ($products as $product)
                    <div class="product-card">
                        <div class="image-wrapper ">
                            <div class="product-image">

                                @if ($product->image)
                                    <img class="rounded img-thumbnail mb-3 mb-3 shadow-sm"
                                        src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="img-fluid mb-3">
                                @else
                                    No Image
                                @endif
                            </div>
                        </div>


                        <div class="product-details">
                            <h3 class="card-title">{{ $product->name }}</h3>

                            {{-- @php
                                $details = $product->details;
                                $chunkedDetails = str_split($details, 40);
                            @endphp
                            @foreach ($chunkedDetails as $chunk)
                                    <p class="card-details">
                                {{ $chunk }}
                                @if (strlen($details) > 40)
                                    @if ($loop->last)
                                        ...
                                    @endif
                                @endif

                                </p>
                            @endforeach --}}


                            <div class="card">
                                <p class="card-details">{{ $product->details }}</p>
                                <p class="card-details-hidden" style="display: none;">{{ $product->details }}</p>
                            </div>

                            {{-- <div class="card-details">
                                {{ substr($product->details, 0, 40) }}{{ strlen($product->details) > 40 ? '...' : $product->details }}
                                <!-- Display the extra details (hidden by default) -->
                                <span class="extra">
                                    {{ strlen($product->details) > 40 ? substr($product->details, 40) : $product->details }}
                                </span>

                            </div> --}}
                            <p>category: {{ $product->category->name }}</p>
                            <p>Is Available: {{ $product->is_available ? 'Yes' : 'No' }}</p>
                            {{-- <p >Details:{{ $product->details }}</p> --}}
                            {{-- <p>Price: {{ $product->price }}</p> --}}

                        </div>
                        {{-- <a href="{{ route('product.edit', ['id' => $product->id]) }}"
                            class="btn btn-success btn-sm">Edit</a><br><br> --}}


                        <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-success btn-sm"
                            role="button" aria-pressed="true">edit</a><br><br>



                        {{-- <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form> --}}

                        <!-- Delete Button with Modal Confirmation -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{ $product->id }}">
                            Delete
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1"
                        aria-labelledby="deleteModalLabel{{ $product->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $product->id }}">Confirm Deletion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete "{{ $product->name }}"?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="wrapper">
                            <div class="banner-image"> </div>
                            <h1> Toyota Supra</h1>
                            <p>Lorem ipsum dolor sit amet, <br />
                                consectetur adipiscing elit.</p>
                        </div>
                        <div class="button-wrapper">
                            <button class="btn outline">DETAILS</button>
                            <button class="btn fill">BUY NOW</button>
                        </div>
                    </div>
        </div>
        @endforeach
    @else
        <p>No products found.</p>
        @endif
    </div>
    </div>



    <script>
        // jQuery script
        $(document).ready(function() {
            // Loop through each product card
            $(".product-card").each(function() {
                var detailsElement = $(this).find(".card-details");
                var detailsHiddenElement = $(this).find(".card-details-hidden");

                // Get the details text
                var detailsText = detailsElement.text();
                var maxChars = 40; // Change this to 40 characters

                // Check if the details length is greater than 40
                if (detailsText.length > maxChars) {
                    // Split the details into chunks of 40 characters
                    var chunkedText = detailsText.match(new RegExp('.{1,' + maxChars + '}', 'g'));
                    // Join the chunks with newlines
                    var truncatedText = chunkedText.join('\n');
                    detailsElement.text(truncatedText);
                }

                // Show all details on hover
                $(this).hover(function() {
                    detailsHiddenElement.show();
                }, function() {
                    detailsHiddenElement.hide();
                });
            });
        });
    </script>

@endsection
