@extends('codedlivechat.include.app')

@section('content')
    <!-- main-content -->
    <div class="main-content app-content">

        @include('codedlivechat.include.desktop-notifications')

        @include('codedlivechat.include.mobile-notification')

        <!-- container -->
        <div class="container-fluid">

            @include('codedlivechat.include.breadcrumbs')



            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body">



                            <!-- main-content closed -->
                            <!-- Basic modal -->
                            <div class="" id="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content modal-content-demo">


                                        <div class="modal-body pd-sm-40">

                                            {{-- start  comment --}}
                                            <button id="show-comments" class="btn btn-sm btn-success">Chat History</button>

                                            <div class="comment-wrapper" style="display:none">
                                                <ol class="comment-list">

                                                    @forelse ($user_response as $uresponse)
                                                    @php
                                                    //logged in users
                                                    $loggedticket =  Coded\Codedlivechat\Models\support_chat_store::where("ticket_id",$uresponse->ticket_id)
                                                    ->first();
                                                    @endphp
                                                    <li class="comment">
                                                        <div class="comment-avatar">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Avatar">
                                                        </div>
                                                        <div class="comment-content">
                                                            <p class="comment-author">{{ $loggedticket->client_name }}</p>
                                                            <p class="comment-text">{{ $uresponse->message_body }}</p>
                                                            <p class="comment-date">{{ $uresponse->created_at->diffForHumans(['part'=>2]) }}</p>

                                                            @foreach ($admin_response as $aresponse)
                                                                <div class="admin-reply">
                                                                <p class="admin-reply-text">{{ $aresponse->message_body }}</p>
                                                                <p class="admin-reply-date">{{ $aresponse->created_at->diffForHumans(['part'=>2]) }}</p>
                                                            </div>

                                                            @endforeach

                                                        </div>
                                                    </li>
                                                    @empty

                                                    @endforelse


                                                </ol>
                                            </div>

                                            {{-- end of comment lists --}}

                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif

                                            <form method="POST"
                                                action="{{ route('livechat.adminreply.send', ['ticket_id' => $ticket->ticket_id]) }}">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="message">Message Body</label>
                                                    <textarea id="myeditorinstance" class="form-control" type="text" name="content"></textarea>
                                                </div>


                                                <div class="form-group mg-b-25">

                                                </div>
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary btn-block">Message Now</button>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- End Basic modal -->


                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->









        </div>
        <!-- Container closed -->
    </div>

    <style>
       .comment-wrapper {
  margin-top: 1.5rem;
}

.comment-list {
  list-style: decimal;
  padding-left: 0;
}

.comment {
  display: flex;
  margin-bottom: 1.5rem;
}

.comment-avatar {
  margin-right: 1.5rem;
}

.comment-avatar img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.comment-content {
  flex: 1;
}

.comment-author {
  font-weight: bold;
  margin-bottom: 0.5rem;
}

.comment-text {
  margin-bottom: 0.5rem;
}

.comment-date {
  font-size: 0.8rem;
  color: #999;
  margin-bottom: 0.5rem;
}

.admin-reply {
  margin-left: 1.5rem;
  border-left: 2px solid #ccc;
  padding-left: 1.5rem;
}

.admin-reply-text {
  font-style: italic;
}

.admin-reply-date {
  font-size: 0.8rem;
  color: #999;
  margin-top: 0.5rem;
}



</style>

<script>
    const showCommentsBtn = document.querySelector('#show-comments');
const commentWrapper = document.querySelector('.comment-wrapper');

showCommentsBtn.addEventListener('click', () => {
  if (commentWrapper.style.display === 'none') {
    commentWrapper.style.display = 'block';
    showCommentsBtn.innerText = 'Hide comments';
  } else {
    commentWrapper.style.display = 'none';
    showCommentsBtn.innerText = 'Show comments';
  }
});

</script>

    {{ LivesupportRender::renderCodedLiveChat() }}

    {{ LivesupportRender::liveChatJs() }}

    {{ LivesupportRender::liveChatStyles() }}
@endsection
