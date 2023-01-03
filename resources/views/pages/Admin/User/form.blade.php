<div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="name" id="name" @if (isset($user->name))
          value='{{$user->name}}'
          @endif  id="name" required />
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>

          @enderror
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
          <input type="password" class="form-control" name='password' id="password" @if (isset($user->password))

          value="{{$user->password}}"
          @endif  />
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>

          @enderror
        </div>
      </div>
    </div>
    <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" name="email" id="email" @if (isset($user->email))
            value='{{$user->email}}'
            @endif  id="email" required />
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>

            @enderror
          </div>
        </div>
      </div>
    <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Roles</label>
          <div class="col-sm-9">
            <select name="role" >
                @foreach ($roles as $key => $role )
                <option @isset($user->role)
                    @if ($user->role == $role)
                    value="{{$user->role}}"
                    selected
                    @endif
                    @endisset  >

                    {{$role}}

                </option>

                @endforeach

                <option>

                </option>
            </select>
          </div>
        </div>
      </div>
  </div>
