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
            margin-right: 10px;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image img {
            width: 100%;
            height: auto;
        }

        .product-details h3 {
            margin-bottom: 10px;
        }

        .product-details p {
            margin-bottom: 5px;
        }

        .card {
            margin: 0 auto;
            margin-top: 70px;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            /* Added */
        }

        .small-card {
            margin-left: 20px;
            margin-top: 20px;

        }
    </style>

    <div class="card" style="width: 70rem;">
        <div class="main-content">
            {{-- <h2>Products</h2> --}}
            {{-- <div class="small-card">
                <a href="{{ route('category.create') }}" class="btn btn-warning">add category</a><br><br>
            </div> --}}
            <div class="product-cards">
                <div class="small-card">
                    <div class="row">
                        @if ($categories->count() > 0)
                            @foreach ($categories as $category)
                                <div class="product-card">

                                    <div class="product-details">
                                        <h3>{{ $category->name }}</h3><br>
                                    </div>


                                    {{-- <a href="{{ route('category.edit', ['id' => $category->id]) }}"
                                        class="btn btn-warning" role="button" aria-pressed="true">edit</a>

                                    <!-- Delete Button with Modal Confirmation -->
                                    <button  class="btn btn-dark btn-sm"  data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $category->id }}"  > <i class="fas fa-trash"></i>

                                        <span class="delete-text text-danager">Delete</span>
                                        
                                        
                                    </button> --}}


                                    <button class="btn btn-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $category->id }}"> <i class="fas fa-trash"></i>

                                        <span class="delete-text text-danager">Change
                                            Status</span>

                                        @if ($category->status)
                                            <button class="btn btn-success btn-sm mt-1" style="margin-left: 5px;">
                                                Available
                                            </button>
                                        @else
                                            <button class="btn btn-danger btn-sm mt-1" style="margin-left: 5px;">
                                                Unavailable
                                            </button>
                                        @endif


                                    </button>

                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabel{{ $category->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $category->id }}">Confirm
                                                    Deletion
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to change the status of the category:
                                                "{{ $category->name }}"?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('category.destroy', $category->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Change</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No categories found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
