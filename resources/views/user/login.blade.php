<x-container>
    <div class="d-flex flex-column t-1/2 w-100 align-items-center justify-content-center mt-4">
        <h2>...</h2>
        <div class="card p-4 m-2 align-items-center">
            <form method="POST" action="/user/authenticate">
                @csrf

                <!-- Email input -->
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


                <!-- Submit button -->
                <div class="d-flex w-100 justify-content-center">
                    <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">Sign in</button>
                </div>
                <div class="d-flex pl-3 justify-content-center">
                    <!-- Simple link -->
                    <a href="register">Create an Account</a>
                </div>
            </form>
        </div>
    </div>

</x-container>
