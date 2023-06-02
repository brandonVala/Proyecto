<div>
    <h3>{{ $title }}</h3>
    <input class="form-control" type="text" placeholder="Note" wire:model='content'>
    <input class="btn btn-success" type="button" value="Save note" wire:click='store'>
    <!--input type="text" placeholder="Note" wire:model='content'-->
    <!--input type="button" value="Save note" wire:click='store'-->

    <p style="color:red">
        {{$status}}
    </p>
    @foreach($notes as $note)
       <p>
           {{ $note->content}}
           <button wire:click='update({{ $note->id }})'><svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24" 
           id="update-alt-2" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
           <path id="primary" d="M6,5H16a2,2,0,0,1,2,2v7" style="fill: none; stroke: rgb(51, 0, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
           <path id="primary-2" data-name="primary" d="M18,19H8a2,2,0,0,1-2-2V10" style="fill: none; stroke: rgb(51, 0, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
           <polyline id="primary-3" data-name="primary" points="15 11 18 14 21 11" style="fill: none; stroke: rgb(51, 0, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline>
           <polyline id="primary-4" data-name="primary" points="9 13 6 10 3 13" style="fill: none; stroke: rgb(51, 0, 255); 
           stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline></svg></button>

           <button wire:click='destroy({{ $note-> id }})'><svg width="24px" height="24px" viewBox="0 0 24 24" fill="#29B6F6" xmlns="http://www.w3.org/2000/svg">
           <path d="M5.16565 10.1534C5.07629 8.99181 5.99473 8 7.15975 8H16.8402C18.0053 8 18.9237 8.9918 18.8344 10.1534L18.142 19.1534C18.0619 20.1954 17.193 21 16.1479 21H7.85206C6.80699 21 5.93811 20.1954 5.85795 19.1534L5.16565 10.1534Z" stroke="#000000" stroke-width="2"/>
           <path d="M19.5 5H4.5" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
           <path d="M10 3C10 2.44772 10.4477 2 11 2H13C13.5523 2 14 2.44772 14 3V5H10V3Z" stroke="#000000" stroke-width="2"/>
           </svg></button>
      </p>
    @endforeach
</div>
