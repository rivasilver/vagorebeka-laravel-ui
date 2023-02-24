<form action="{{ route('sandwiches.destroy', $sandwich->id) }}" method="POST" style="display: inline;">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-outline-danger">Delete</button>
</form>
