<div class="form-group">
    <label class="sr-only" for="service">Service</label>
    <input type="text" class="form-control" id="service" name="service" aria-describedby="serviceHelp" placeholder="Enter Service" autocomplete="off">
    <small id="serviceHelp" class="form-text text-muted">Add a new service here.</small>

    @error('service')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
