@extends('dashboard')

@section('content')
    <style>
        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);

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
    </style>



    <div class="card" style="width: 75rem;">
        <div class="card-header">
            <h2 style="text-align:center; font-family:Georgia, 'Times New Roman', Times, serif">Create Product</h2>
            <br>
            <br>
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-sm-5">
                        <label for="name"
                            style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Product
                            Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required
                            autocomplete="off">
                    </div>

                    {{-- {{-- <div class="form-group col-md-4">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" class="form-control" required>
            </div> --}}




                    <!-- Categories Dropdown -->
                    <div class="col-sm-5">
                        <label for="category"
                            style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Select
                            Category:</label>
                        <select name="category_id" id="category" class="form-select" required>
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <br>
                <div class="col-12">
                    <label for="inputAddress" class="form-label"
                        style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Details:</label>

                    <textarea id="details" name="details" class="form-control" rows="3" required></textarea>
                </div>

                <br>


                <div class="col-sm-7">
                    <label for="image" class="form-label"
                        style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Image:</label>
                    <input type="file" id="image" name="image" class="form-control" required>
                </div>

                <br>


                <div class="col-12">
                    <div class="form-check">
                        <input type="hidden" name="is_available" value="0">
                        <input class="form-check-input" type="checkbox" id="is_available" name="is_available"
                            value="1">
                        <label class="form-check-label" for="is_available"
                            style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                            Is Available
                        </label>
                        {{-- <input type="hidden" name="is_available" value="0">
                    <input type="checkbox" id="is_available" name="is_available" value="1"> --}}
                    </div>
                </div>

                <br>

                <button type="submit" class="btn btn-outline-secondary">Create</button>






            </form>
        </div>
    </div>
@endsection
