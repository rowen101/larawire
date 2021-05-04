<div>
    <h1>{{ $email }}</h1>
    <button wire:click="decrement" class="btn btn-primary btn-sm">+</button>
    <h2>{{ $count }}</h2>
    <button wire:click="increment" class="btn btn-primary btn-sm">+</button>

    <div class="form-control">
        <label for="email">email</label>
        <input wire:model="email" type="text"  name="email">
    </div>
</div>
