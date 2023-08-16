@extends('dashboard')

@section('content')
    <style>
        .card {
            margin: 0 auto;
            margin-top: 70px;
            float: none;
            margin-bottom: 10px;
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);

        }
    </style>

    <div class="card" style="width: 50rem;">
        <div class="main-content">

            <div class="card-header">
                <h2 style=" font-family:Georgia, 'Times New Roman', Times, serif">Edit Category</h2>

                <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <br>

                    <div class="col-sm-5">

                        <label for="name" class="form-label"
                            style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Name:</label>
                        <input class="form-control" type="text" id="name" name="name"
                            value="{{ $category->name }}" required>

                    </div>

                    <br>
                    <button type="submit" class="btn btn-outline-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
