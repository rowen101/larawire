<div>

        @csrf
        <div class=" mb-4">
            <input type="text" name="addTodo" class="form-control form-control-lg" id="addTodo"
            placeholder="What need to be done?" value="{{ old('addTodo') }}" wire:model="title" wire:keydown.enter='addTodo'>
            {{-- <button  class="btn btn-primary" wire:click="addTodo" type="submit">Add</button> --}}
        </div>


    <ul class="list-group">
        @foreach ($todos as $todo )


        <li class="list-group-item d-flex justify-content-between align-item-center">

            <div>
                <input type="checkbox" class="mr-4"/>
                <a href="#" class="">{{ $todo->title }}</a>
            </div>
            <div>
                <form action="#" method="POST">
                    @csrf
                    <button class="btn btn-sm btn-danger">&times;</button>
                </form>
            </div>
        </li>
          @endforeach
    </ul>
</div>
