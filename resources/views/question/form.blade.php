<div class="form-group">
    <label class="sr-only" for="question">Question</label>
    <input type="text" class="form-control" id="question" name="question[question]" aria-describedby="questionHelp" placeholder="Enter Question" value="{{ old('question.question') }}">
    <small id="titleHelp" class="text-muted p-1">Ask simple and to-the-point questions for best results.</small>

    @error('question.question')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <fieldset>
        <legend>Choices</legend>

        <div>
            <div class="form-group">
                <label class="sr-only" for="answer1">Choice 1</label>
                <input type="text" class="form-control" id="answer1" name="answers[][answer]" aria-describedby="choicesHelp" placeholder="Enter Choice 1" value="{{ old('answers.0.answer') }}">

                @error('answers.0.answer')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div>
            <div class="form-group">
                <label class="sr-only" for="answer2">Choice 2</label>
                <input type="text" class="form-control" id="answer2" name="answers[][answer]" aria-describedby="choicesHelp" placeholder="Enter Choice 2" value="{{ old('answers.1.answer') }}">

                @error('answers.1.answer')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div>
            <div class="form-group">
                <label class="sr-only" for="answer3">Choice 3</label>
                <input type="text" class="form-control" id="answer3" name="answers[][answer]" aria-describedby="choicesHelp" placeholder="Enter Choice 3" value="{{ old('answers.2.answer') }}">
                <small id="choicesHelp" class="text-muted p-1">Give choices that give you the most insight into your question</small>

                @error('answers.2.answer')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

    </fieldset>
</div>


