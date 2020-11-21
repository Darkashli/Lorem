<div class="form-row">
    <div class="form-group col-md-6">
	    <label class="sr-only" for="name">Name</label>
	    <input class="form-control" type="text" name="name" placeholder="Name" autocomplete="off" value="{{ old('name') ?? $participant->name }}">

	    @error('name') <p style="color: red;">{{ $message }}</p> @enderror
    </div>

    <div class="form-group col-md-6">
        <label class="sr-only" for="email">Email</label>
        <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off" value="{{ old('email') ?? $participant->email }}">

        @error('email') <p style="color: red;">{{ $message }}</p> @enderror
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label class="sr-only" for="address">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Address" autocomplete="off" value="{{ old('address') ?? $participant->address }}">

     @error('address') <p style="color: red;">{{ $message }}</p> @enderror
    </div>

    <div class="form-group col-md-4">
        <label class="sr-only" for="city">City</label>
        <input type="text" class="form-control" name="city" placeholder="City" autocomplete="off" value="{{ old('city') ?? $participant->city }}">

        @error('city') <p style="color: red;">{{ $message }}</p> @enderror
    </div>

    <div class="form-group col-md-2">
        <label class="sr-only" for="postal_code">Zip</label>
        <input type="text" class="form-control" name="postal_code" placeholder="Postal Code" autocomplete="off" value="{{ old('posat_code') ?? $participant->postal_code }}">

      	@error('postal_code') <p style="color: red;">{{ $message }}</p> @enderror
    </div>
</div>




