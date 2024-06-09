<div>
    <ul class="list-group">
        @foreach ($clients as $client)
            <livewire:clients.client-item :client="$client"/>
        @endforeach
      </ul>
</div>
