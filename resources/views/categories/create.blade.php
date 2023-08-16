@extends('dashboard')

@section('content')
    <style>
        body {
            /* solid background */

            /* gradient background*/


            /* photo background */
            background-size: cover;
            background-position: center;

        }

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

    {{-- <div class="card" style="width: 50rem;">
        <div class="main-content">
            <div class="card-header">
                <h2 style=" font-family:Georgia, 'Times New Roman', Times, serif">Create Category</h2>

                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <br>

                    <div class="col-sm-5">
                        <label for="name" class="form-label"
                            style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Name:</label>
                        <input class="form-control" type="text" id="name" name="name" required autocomplete="off">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-outline-secondary">Create</button>
                </form>
            </div>
        </div>
    </div> --}}
@endsection
