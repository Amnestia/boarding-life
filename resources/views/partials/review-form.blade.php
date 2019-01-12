@if(auth()->user())
    <div class="form-wrapper">
        <form action="/insert/review/{{$review[0]->location->id}}" method="POST" id="review-form">
            {{csrf_field()}}
            <div class="form__group">
                <label for="review" class="form__label">Review</label>
                <input type="text" class="form__field" id="review" name="review" placeholder="delicious" required>
            </div>
            <div class="form__group">
                <label for="review-good" class="form__label">Review</label>
                <input type="radio" name="status" id="review-good" value="1" required><i class="fa fa-thumbs-up"  style="font-size: 12px">Good</i>
                <input type="radio" name="status" id="review-bad" value="-1"><i class="fa fa-thumbs-down" style="font-size: 12px">Bad</i>
            </div>
            <div class="form__group">
                <input type="submit" id="btn-submit" class="form__submit" value="Submit">
            </div>
        </form>
    </div>
@endif
