<div id="fundraising-section">
    <div class="wrapper">
        <h3>Fundraising</h3>

        <p class="section-instructions">
            This section helps keep track of funds raised from the event. If no funds were raised or spent, then leave
            blank.
        </p>

        <div class="funds-info">
            <div>
                {!! Form::label('amount_raised', 'Amount Raised') !!}
                {!! Form::number('amount_raised', 0) !!}
            </div>
            <div>
                {!! Form::label('amount_spent', 'Amount Spent') !!}
                {!! Form::number('amount_spent', 0) !!}
            </div>
            <div>
                {!! Form::label('net_profit', 'Net Profit') !!}
                {!! Form::number('net_profit', 0) !!}
            </div>
        </div>

        <div class="funds-purpose">
            {!! Form::label('funds_purpose', 'How will the funds be used?', array('autocapitalize' => 'none')) !!}
            {!! Form::textarea('funds_purpose') !!}
        </div>
    </div>
</div>