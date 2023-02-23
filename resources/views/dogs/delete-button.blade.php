<form action="{{ route('dogs.destroy', $dog->id) }}" method="POST" style="display: inline;">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-outline-danger">Delete</button>
</form>
