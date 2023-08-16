@extends('dashboard')
@section('content')
    <style>
        .product-card:hover .card-details {
            height: auto;
            /* Display all the details on hover */
        }

        .product-card .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 10px;
            margin-left: 5px;

        }

        /* Show extra details below the card on hover */
        .product-card:hover .card-details.extra {
            display: block;
            margin-top: 10px;
            /* Adjust the space between the first row and the extra details */
        }

        /* Non-selected Cards on Hover */
        .product-card:not(:hover) {
            opacity: 0.9;
            /* Reduce opacity of non-selected cards */
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

        .product-card .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 10px;
            margin-left: 5px;

        }

        .wrapper {
            width: 100%;
            height: 100%;

        }

        .button-wrapper {
            margin-top: 18px;
        }


        .c {
            backdrop-filter: blur(12px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(17, 25, 40, 0.25);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.125);
            padding: 38px;
            filter: drop-shadow(0 30px 10px rgba(0, 0, 0, 0.125));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;

            text-align: center;

        }

        .product-cards {
            display: flex;
            padding: 10;

        }


        .product-card {

            /* width: 300px; */
            display: inline-block;
            padding: 25px;
            margin: 10px;
            /* border: 1px solid #ccc; */
            border-radius: 5px;
            /* background-color: #f0f0f0; */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;



        }

        .product-card:hover {
            transform: translateY(-5px);
        }


        .product-card:hover {
            transform: scale(1.1);
            /* Enlarge the card on hover */
            z-index: 1;
            /* Bring the hovered card to the front */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Add a shadow effect */
        }

        .fill {
            background: rgba(241, 152, 51, 0.9);
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

        h1 {
            font-family: 'Righteous', sans-serif;
            color: rgba(255, 255, 255, 0.98);
            text-transform: uppercase;
            font-size: 20px;
        }

        p {
            color: #fff;
            font-family: 'Lato', sans-serif;
            text-align: center;
            font-size: 18px;
            line-height: 150%;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
    </style>


    <div class="container">
        <div class=' btn '>
            <a href="{{ route('product.create') }}" class="btn btn-warning">Add Product</a><br><br>

        </div>


        <div class="row ">
            <div class="">

                @if ($products->count() > 0)
                    @foreach ($products as $product)
                        <div class="product-card ">
                            <div class="c">
                                {{-- <div class="wrapper"> --}}
                                <div>
                                    @if ($product->image)
                                        {{-- <div class="banner-image"> --}}
                                        {{-- {{ asset('storage/' . $product->image) }} --}}
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                            width="150px" height="150px">
                                        {{-- <img src="{{ asset('images/login.jpg') }}"> --}}
                                    @else
                                        No Image
                                    @endif
                                    {{-- </div> --}}
                                    <br>
                                    <br>
                                    <h1> {{ $product->name }}</h1>
                                    @php
                                        $details = $product->details;
                                        $chunkedDetails = str_split($details, 30);
                                    @endphp
                                    <div class="card-details-hidden" style="display: none;">
                                        @foreach ($chunkedDetails as $chunk)
                                            <p>{{ $chunk }}</p>
                                        @endforeach
                                    </div>
                                    <p>{{ $product->category->name }}</p>
                                    <p>Is Available: {{ $product->is_available ? 'Yes' : 'No' }}</p>

                                </div>
                                {{-- </div> --}}
                                <div class="button-wrapper">

                                    <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn fill"
                                        role="button" aria-pressed="true">edit</a>

                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $product->id }}">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Model -->
                        <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1"
                            aria-labelledby="deleteModalLabel{{ $product->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $product->id }}">Confirm Deletion
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete "{{ $product->name }}"?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No products found.</p>
                @endif


            </div>
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
