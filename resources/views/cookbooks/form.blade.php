    <div class="form-group">
        {!! Form::label('title', "名稱：") !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', "種類：") !!}
        {!! Form::text('type', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ingredient', "食材：") !!}
        {!! Form::text('ingredient', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('flavor', "調味料：") !!}
        {!! Form::text('flavor', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('step', "步驟：") !!}
        {!! Form::text('step', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('chef_id', "廚師：") !!}
        <select name="chef_id" class="form-control">
            @foreach($chefs as $chef)
                @if (isset($cookbook->chef))
                    @if ($cookbook->chef->id == $chef->id)
                        <option value="{{ $chef->id }}" selected>{{ $chef->name }}</option>
                    @else
                        <option value="{{ $chef->id }}">{{ $chef->name }}</option>
                    @endif
                @else
                    <option value="{{ $chef->id }}">{{ $chef->name }}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>