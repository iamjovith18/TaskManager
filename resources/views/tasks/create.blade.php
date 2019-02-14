
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dreamscape Networks Inc. Videoke, Gym & Game Room Reservation <div class="pull-right"><a class="btn btn-info" role="button" href="{{route('tasks.create')}}">Create Reservation</a></div></div>
                
                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group">
                        <label for="email">Select a room</label>
                        <select name="name" class="form-control" required>
                            <option value="Game Room">Game Room</option>
                            <option value="Gym Room">Gym Room</option>
                            <option value="Videoke Room">Videoke Room</option>
                            
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="full_name">Full Name:</label>
                            <input type="text" class="form-control" value="{{old('description')}}" name="description"  required>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date & Time:</label>
                            <input type="datetime-local" class="form-control" name="task_date" autocomplete="off" required />
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date & Time:</label>
                            <input type="datetime-local" class="form-control" name="end_date_task" autocomplete="off" required />
                        </div>
                        <input type="submit" class="btn btn-success" value="Save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection








