@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dreamscape Networks Inc. Videoke, Gym & Game Room Reservation <a class="btn btn-info float-right" role="button" href="{{route('tasks.create')}}">Create Reservation</a></div>
                
                <div class="card-body">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,listWeek',
           //right: 'timelineDay,timelineWeek,timelineMonth',
            
        },
            events : [
                @foreach($tasks as $task)
                {
                    title : '{{ $task->name }} | Reserved by:{{ucfirst($task->description)}}',
                    start : '{{ $task->task_date }}',
                    end : '{{$task->end_date_task }}',
                    url : '{{ route('tasks.edit', $task->id) }}',
                    allDay:false,
                },
                @endforeach
            ]
        })
    });
</script>






