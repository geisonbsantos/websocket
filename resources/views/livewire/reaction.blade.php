<div>
    <x-ts-reaction />

    <x-ts-button wire:click="sending">
        Send Toast
    </x-ts-button>
</div>

<!-- <script type="module">
    Echo.channel('reaction')
    .listen('ReactionEvent', () => console.log(1));
</script> -->