<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <!--bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mt-5">
                    <h1 class="fs-1 fw-bold">Comments</h1>
                    <form>
                    <div class="d-flex my-3">
                        <div class="mt-3 w-100">
                            <textarea class="form-control " name="message" id="contact-form"  placeholder="Write your message here...." ></textarea>
                        </div>
            
                        <div class=" mt-3 mx-3">
                            <button type="button" class="btn btn-primary py-2 px-3 fs-4 fw-bold" wire:click="addComment" >Add</button>
                        </div>
                    </div>
                    </form>
                  @foreach ($comments as $comment)
                    <div class="rounded border shadow p-3 my-2">
                        <div class="d-flex  my-2">
                            <p class="fw-bolder fs-3 text-xl-start">{{$comment['creator']}}</p>
                            <p class="mx-3 pt-2 text-xs text-secondary fw-light">{{$comment['created_at']}}</p>
                        </div>
                        <p class="text-dark fw-normal">{{$comment['body']}}</p>
                    </div>
                    @endforeach
                </div>

            </div>
    </div>
    
</body>
</html>