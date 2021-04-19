@foreach($posts as $key => $post)
<div class="card" style="margin-bottom: 20px;">
    <div class="card-header">
        <h3><a href="">{{ ($posts->currentpage()-1) * $posts->perpage() + $key + 1 }} {{ $post->title }}</a></h3>
    </div>
    <div class="card-body">
        <p>{{ $post->description }}</p>
        <div class="text-right">
            <button class="btn btn-success">Read More</button>
        </div>
    </div>

</div>
<hr style="margin-top:5px;">

@endforeach