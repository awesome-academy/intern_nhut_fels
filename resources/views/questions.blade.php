@extends('layouts.master')
@section('content')
    <form class="form" action="{{ route('lesson.question.post', ['id' => $id]) }}" method="POST">
        @csrf
        @foreach ($questions as $key => $question)
            <p class="question">{{ $question->content }}</p>
            @foreach ($question->options as $option)
                @if ($question->id == $option->question_id)
                    <input type="radio" name="option{{ $key }}" value="{{ $option->id }}">
                    <label>{{ $option->option }}</label><br>
                @endif
            @endforeach
            <hr>
        @endforeach
        <input type="text" class="idPost" value="{{ $id }}" hidden>
        <button type="submit">@lang('messages.end_exam')</button>
    </form>
@endsection
@section('script')
    {!! HTML::script('../../js/getAnswer.js') !!}
@endsection
