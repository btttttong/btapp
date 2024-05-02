<section> 
    <form action="{{ route('outfit.delete', $outfit->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-500">Delete</button>
    </form>
</section>