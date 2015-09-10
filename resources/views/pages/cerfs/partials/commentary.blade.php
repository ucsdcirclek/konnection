<div id="commentary-section">
    <div class="wrapper">
        <h3>Commentary</h3>

        <p class="section-instructions">
            Please provide some commentary and reflections on this event.
        </p>

        <div class="commentary-info">
            <div>
                {!! Form::label('summary', 'Event Summary') !!}
                {!! Form::textarea('summary') !!}
            </div>

            <div class="comparison">
                <div>
                    {!! Form::label('strengths', 'Strengths') !!}
                    {!! Form::textarea('strengths') !!}
                </div>
                <div>
                    {!! Form::label('weaknesses', 'Weaknesses') !!}
                    {!! Form::textarea('weaknesses') !!}
                </div>
            </div>

            <div>
                {!! Form::label('reflection', 'What would you do differently if you did this event again?', array('autocapitalize' => 'none')) !!}
                {!! Form::textarea('reflection') !!}
            </div>
        </div>
    </div>
</div>