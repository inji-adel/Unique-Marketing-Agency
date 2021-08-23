@include('navbar')

<div class="container">
    <h2>Send Us Your Opinion</h2>

    {!! Form::open(['url' => '/api/email/recommend', 'class' => 'form-horizontal']) !!}

    {!! Form::label('seriallbl', 'Name') !!}
    {!! Form::text('name', '', ['class' => 'form-control']) !!}<br>

    {!! Form::label('seriallbl', 'Email') !!}
    {!! Form::text('email', '', ['class' => 'form-control']) !!}<br>

    {!! Form::label('seriallbl', 'content') !!}
    {!! Form::text('content', '', ['class' => 'form-control']) !!}<br>
    <div style="margin-left: 40%;">
        <br>
        {!! Form::submit('Add Points', ['class' => 'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}<br>

</div>

<style>
    h2 {
        margin-bottom: 100px;
        text-align: center;
        color: darkorange;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
    }

    label {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 17px;
        color: khaki;
    }

</style>
