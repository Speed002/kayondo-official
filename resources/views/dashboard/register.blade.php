<x-layouts.app>
    <div class="row py-4 mb-3">
        <div class="col-sm-8">
            <p class="slate">Creating New client</p>
            <p class="slate-light">Personal information</p>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="eg. John Doe">
                @error('name')
                    <small class="text-danger text-xs">Name is required.</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="eg. name@example.com">
                @error('email')
                    <small class="text-danger text-xs">Valid email is required.</small>
                @enderror
            </div>
            <div class="mb-3">
                <button class="btn btn-light slate-light" type="submit">Sign up</button>
            </div>
        </div>
        {{-- Empty space --}}
        <div class="col-sm-4">
            ...
        </div>
    </div>
</x-layouts.app>
