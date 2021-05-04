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
                <input type="checkbox" wire:change="toggleTodo({{ $todo->id }})" class="mr-4" {{ $todo->completed ? 'checked' : '   '}}/>
                <a href="#" class="{{ $todo->completed ? 'completed' : ''}}">{{ $todo->title }}</a>
            </div>
            <div>


                    <button class="btn btn-sm btn-danger"
                    onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                     wire:click="deleteTodo({{ $todo->id }})">&times;</button>

            </div>
        </li>
          @endforeach
    </ul>
</div>
