<x-container>
    <div class="d-flex flex-column t-1/2 w-100 align-items-center justify-content-center mt-4">
        <h2>...</h2>
        <div class="card p-4 m-2 align-items-center">
            <form method="POST" action="/user">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" />
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" />
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" />
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="form-control" />
                    @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Submit button -->
                <div class="d-flex w-100 justify-content-center">
                    <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">Create Account</button>
                </div>

            </form>
        </div>
    </div>

</x-container>
