<div class="">
	@if($comment->user_id ==0)
		<p><b>Unkown User</b></p>
	@else
		<p><b>{{ $comment->user->name }}</b></p>
	@endif
	<p>{{ $comment->content }}</p>
	<p>{{ $comment->created_at }}<a href="javascript:;" style="float:right" id="replyButton" data-comment-id="{{$comment->id}}">Reply</a></p>
	
	<div class="reply" style="margin-left:30px">
		<div class="replyList" id="replyLists{{$comment->id}}">

		</div>

		<!-- AJAX -->
		<form class="form-inline" ud="replyForm{{$comment->id}}" style="display:none;">
			<input type="hidden" name="comment_id" value="{{$comment->id}}">
			<input type="text" name="content" class="form-control">
			<a class="btn btn-default" id="replyAJAX" data-comment-id="{{$comment->id}}" href="">Reply</a>


		</form>
	</div>
	<hr>
</div>
  