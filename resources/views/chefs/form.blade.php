    <div class="form-group">
        {!! Form::label('name', "姓名：") !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', "電子信箱：") !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('professional', "專長：") !!}
        {!! Form::text('professional', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('employed_at', "僱用日期：") !!}
        {!! Form::input('date', 'employed_at', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>