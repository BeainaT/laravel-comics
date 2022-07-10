<section class="card_selected">
    <div class="selected_container">
        <div class="book_box">
            <img class ="book" src="{{$card['thumb']}}" alt="">
            <a href="">comic book</a>
            <a href="">comic book</a>
        </div>
    </div>
    <div class="selected_container desc">
        <div class="description_box">
            <h1>{{$card['title']}}</h1>
            <div class="availability">
                <span>U.S. Price:</span>
                <span>{{$card['price']}}</span>
                <span>AVAILABLE</span>
                <span>check availabilty &#9662;</span>
            </div>
            <p>{{$card['description']}}</p>
        </div>
        <div class="advs">
            <h4>advertisement</h4>
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>
    </div>
    <div class="desc_details">
        <div class="selected_container details">
            <div class="box_desc_left">
                <h3>talent</h3>
                <div class="row artists">
                <span>Art by:</span>
                <span>
                    <ul>
                        @foreach ($card['artists'] as $elm)
                            <li><a href="">{{$elm}}</a></li>            
                        @endforeach
                    </ul>
                </span>
                </div>
                <div class="row writers">
                    <span>Written by:</span>
                    <span>
                        <ul>
                            @foreach ($card['writers'] as $elm)
                                <li><a href="">{{$elm}}</a></li>
                            @endforeach
                        </ul>
                    </span>
                </div>
            </div>
            <div class="box_desc_right">
                <h3>Specs</h3>
                <div class="row series">
                    <span>Series:</span>
                    <span>{{$card['series']}}</span>
                </div>
                <div class="row">
                    <span>U.S. Price:</span>
                    <span>{{$card['price']}}</span>
                </div>
                <div class="row">
                    <span>On Sale Date:</span>
                    <span>{{$card['sale_date']}}</span>
                </div>
            </div>
        </div>
        <div class="nav_card">
            <div class="link_to">
            </div>
            <div class="link_to">
                <h4>digital comics</h4>
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
            </div>
            <div class="link_to">
                <h4>merchandise</h4>
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
            </div>
            <div class="link_to">
                <h4>shop locator</h4>
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
            </div>
            <div class="link_to">
                <h4>subscriptions</h4>
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
            </div>
            <div class="link_to">
            </div>
        </div>
    </div>
</section>