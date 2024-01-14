@extends('product.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('product.create') }}" class="btn btn-success">Add Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Product Details</th>
            <th width='280px'>Action</th>
        </tr>
        @forelse ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="{{ route('product.destroy', $product->id) }}" method="post"
                        onsubmit="confirm('Product will be deleted?..')">
                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-info">show</a>
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">edit</a>

                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <div class="alert alert-info mt-3">
                <label for=""><strong>Woops..! </strong> data empty</label>
            </div>
        @endforelse
    </table>
    <div class="pagination">
        {{ $products->links() }}
    </div>
@endsection
