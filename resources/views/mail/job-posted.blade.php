<h1>{{$job->title}}</h1>
<p>
    Congrats! Your job is live on the website now!    
</p>
<p>
    <a href="{{url('/jobs/'. $job->id)}}">See your Job</a>
</p>
