@foreach($questionnaire->questions as $key => $question)
    <div class="card mt-4">
        <div class="card-header"><strong>{{ $key + 1 }}.</strong> {{ $question->question }}</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($question->answers as $answer)
                        <label for="answer {{ $answer->id }}">
                            <li class="list-group-item">
                                <input class="mr-2" type="radio" name="responses[{{ $key }}][answer_id]"
                                    id="answer {{ $answer->id }}" value="{{ $answer->id }}"
                                    {{ (old('responses.' . $key . '.answer_id') == $answer->id) ? 'checked' : '' }}>

                                    {{ $answer->answer }}

                                <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                            </li>
                        </label>
                    @endforeach
                </ul>

                @error('responses.' . $key . '.answer_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
    </div>
@endforeach

    <div class="card mt-4">
        <div class="card-header">Your Information</div>
            <div class="card-body">
                <div class="form-group">
                    <label class="sr-only" for="name">Your Name</label>
                    <input class="form-control" type="text" name="survey[name]" id="name" aria-describedby="nameHelp" placeholder="Enter your name" autocomplete="off">
                    <small id="nameHelp" class="form-text text-muted">Hello! what's your name?</small>

                    @error('survey.name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="sr-only" for="email">Your Email</label>
                    <input class="form-control" type="email" name="survey[email]" id="email" aria-describedby="emailHelp" placeholder="Enter Email" autocomplete="off">
                    <small id="nameHelp" class="form-text text-muted">Your Email Please!</small>

                    @error('survey.email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                     <button type="submit" class="btn btn-primary">Complete Survey</button>
                </div>
            </div>
    </div>



