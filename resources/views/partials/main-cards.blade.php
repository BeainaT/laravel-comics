<section class="cards">
    <div class="cards_container">
        <button class="btn_custom btn_current">current series</button>
            <ul>
                @foreach ($cards as $card)
                <li>
                    <div class="card_box">
                        <div class="img_box">
                            <img src="{{$card['thumb']}}" alt="">
                        </div>
                        <h5>{{$card['series']}}</h5>
                    </div>
                </li>
                @endforeach
            </ul>
            <button class="btn_custom">load more</button>
        </div>
</section>