<div>
    <h4>Order Confirmation</h4>
    <p><strong>Customer Name:</strong> {{ $sale->name}}</p>
    <p><strong>Phone Number:</strong> {{ $sale->phone}}</p>
    <p><strong>Email:</strong> {{ $sale->email}}</p>
    <p><strong>Choosen Service:</strong> {{ $sale->service}}</p>
    <p><strong>Apartment Size:</strong>
    @if ( $sale->size == 1)
     less than 50
     @elseif ( $sale->size == 2)
     50 to 59
     @elseif ( $sale->size == 3)
     60 to 69
     @elseif ( $sale->size == 4)
     70 to 79
     @elseif ( $sale->size == 5)
     80 to 89
     @elseif ( $sale->size == 6)
     90 to 99
     @elseif ( $sale->size == 7)
     100 to 120
     @elseif ( $sale->size == 8)
     121 to 140
     @elseif ( $sale->size == 9)
     141 to 160
     @elseif ( $sale->size == 10)
     161 to 180
     @elseif ( $sale->size == 11)
     181 to 200
     @else
     its bigger than 200
     @endif
     </p>
    <p><strong>Hours:</strong> 
    @if ( $sale->hours == 1)
     2
     @elseif ( $sale->hours == 2)
     2.5
     @elseif ( $sale->hours == 3)
     3
     @elseif ( $sale->hours == 4)
     3.5
     @elseif ( $sale->hours == 5)
     4
     @elseif ( $sale->hours == 6)
     4.5
     @elseif ( $sale->hours == 7)
     5
     @elseif ( $sale->hours == 8)
     5.5
     @elseif ( $sale->hours == 9)
     6
     @elseif ( $sale->hours == 10)
     6.5
     @elseif ( $sale->hours == 11)
     7
     @else
     8
     @endif
     </p>
    <p><strong>Address:</strong> {{ $sale->phone}}</p>
    <p><strong>Time for cleaning:</strong> {{ $sale->time}}</p>
    <p><strong>Frequency:</strong> {{ $sale->freq}}</p>
    <p><strong>Gift card code:</strong> {{ $sale->gift}}</p>
    <p><strong>More info:</strong> {{ $sale->info}}</p>
    <p><strong>If there are mistakes in the order summary please contact us!</strong></p>
    <p><strong>Enjoy high quality cleaning</strong></p>
</div>