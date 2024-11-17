<section id="rooms" class="rooms">
    <div class="section-title">
        <h2>Our Rooms</h2>
        <p>Explore our luxurious options for your stay.</p>
    </div>
    <div class="room-grid">
        @foreach($rooms as $room)
            <div class="room">
                <div class="room-image" style="background-image: url('{{ asset($room['image']) }}');">
                    <div class="room-hover-info">
                        <h3>{{ $room['name'] }}</h3>
                        <p>{{ $room['description'] }}</p>
                        <p class="price">${{ $room['price'] }} / night</p>
                    </div>
                </div>
                <h3>{{ $room['name'] }}</h3>
                <p class="price">${{ $room['price'] }} / night</p>
                <button>Book</button>
            </div>
        @endforeach
    </div>
</section>
