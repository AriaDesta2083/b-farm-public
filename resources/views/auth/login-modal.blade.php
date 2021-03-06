<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('login') }}" class="signin-form" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Session Status -->
                  <x-auth-session-status class="mb-4 text-danger" :status="session('status')" />
              
                  <!-- Validation Errors -->
                  <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                  <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                      <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                  <br>
                  Belum punya akun? <a href="{{ route('register') }}">klik disini.</a>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-success">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
