<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <title>Posts</title>
</head>
<body>
 <section>
 <div class="container mt-5">
  <div class="row">
   <div class="col-md-12">
    <div class="card">
      @if(Session::has('post_deleted'))
        <div class="alert alert-success">
         <span>{{ Session::get('post_deleted') }}</span>
        </div>
      @endif
     <div class="card-header">All post  </div>

     <div class="card-body">
       <table class="table">
         <thead>
           <tr>
             <th>Post Title</th>
             <th>Post Body</th>
             <th>Action</th>
           </tr>
         </thead>
       <tbody>
         @foreach($posts as $post)
         <tr>
           <td>{{$post->title }}</td>
           <td>{{$post->body }}</td>
           <td>
            <a href="/posts/{{$post->id}}" class="btn btn-success">View</a>
            <a href="/edit-post/{{$post->id}}" class="btn btn-info">Edit</a>
            <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
           </td>
         </tr>
         @endforeach
       </tbody>
       </table>
     </div>
     <a href="{{ route('post.addSubmit') }}" class="btn btn-success">Add Post</a>

    </div>
    <div class="col-md-6 ">
        {{ $posts->links()}}

    </div>
   </div>
  </div>
 </div>
 </section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>