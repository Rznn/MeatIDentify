@extends('admin.layout.sidebar')
@section('title', 'Image Review Restore')
@section('content')
    <div class="control">
        <table class="table">
            <thead>
                <tr>
                    <th class="col-small">Id</th>
                    <th class="col-photo">Photo</th>
                    <th class="col-small">User</th>
                    <th class="col-small">Accuracy</th>
                    <th class="col-small">Category</th>
                    <th class="col-small">Rating</th>
                    <th class="col-small">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $image)
                <tr>
                    <td>#{{ $image->id }}</td>
                    <td><img src="{{ asset('storage/images/' . $image->image_path) }}" alt="Image"></td>
                    <td>{{ $image->users->name }}</td>
                    <td>{{ $image->probability }}%</td>
                    <td>{{ $image->meats->name }}</td>
                    <td>
                        @if ($image->reviews->isNotEmpty())
                            {{ $image->reviews->first()->rate }}
                        @else
                            No reviews
                        @endif
                    </td>
                    <td>
                        <a href="/admin/manage/{{$image->id}}/restore" type="button" class="button delete-button" style="width:auto;">Restore</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Pagination links -->
        <div class="pagination">
            {{ $images->links() }}
        </div>
    </div>
    <!-- Modal Structure -->
    <div id="delete-modal" class="modal">
        <div class="modal-container">
            <div class="modal-content">
                <h4>Confirmation</h4>
                <p>Are you sure you want to delete this image?</p>
                <div class="modal-footer">
                    <button id="confirm-delete" class="modal-close button">Yes</button>
                    <button id="close-modal" class="button">Back</button>
                </div>
            </div>
        </div>
    </div>

@endsection
