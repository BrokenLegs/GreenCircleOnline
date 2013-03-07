@layout('master')
@section('content')
		<div class="offset1">
			{{Form::open('/home/new', 'POST')}}
                <div class="span8">
                    {{Form::label('week', ('Vecka'))}}
                    {{Form::text('week')}}
                </div>
                <div class="span4 leftcol">
                    {{Form::label('name1', ('Maträtt 1'))}}
                    {{Form::text('name1')}}
                    {{Form::label('description1', ('Beskrivning'))}}
                    {{Form::textarea('description1')}}
                </div>
                <div class="span4 rightcol">
                    {{Form::label('name2', ('Maträtt 2'))}}
                    {{Form::text('name2')}}
                    {{Form::label('description2', ('Beskrivning'))}}
                    {{Form::textarea('description2')}}
                </div>
                <div>
                    {{Form::submit('spara')}}
                </div>
            {{Form::close()}}
        </div>
@endsection