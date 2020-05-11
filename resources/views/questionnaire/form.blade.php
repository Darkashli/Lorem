<div class="form-group">
    <label class="sr-only" for="title">Tilte</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="Enter Title">
    <small id="titleHelp" class="form-text text-muted">Give your questionnaire a title that attracts attention.</small>

    @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label class="sr-only" for="purpose">Purpose</label>
    <input type="text" class="form-control" id="purpose" name="purpose" aria-describedby="purposeHelp" placeholder="Enter Purpose">
    <small id="purposeHelp" class="form-text text-muted">Giving a purpose will increase responses.</small>

    @error('purpose')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

