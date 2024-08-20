<div>
    
    <select
        
        class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('agribusiness_id') ? ' border-red-500' : '' }} rounded
        py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
        name="agribusiness_id" id="agribusiness_id"  wire:model.change="agribusiness_id">
        <option value="">choississez votre coopérative</option>
        @foreach ($agribusinesses as $agribusiness)
            <option value="{{ $agribusiness->id }}">{{ $agribusiness->name }}</option>
        @endforeach
    </select>

    @error('name')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
    cc
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:navigated', () => {
            console.log('testmultiselect');
        })
    </script>
@endpush