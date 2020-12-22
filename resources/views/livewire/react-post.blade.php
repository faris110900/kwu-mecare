<div>

    <div class="react" align="center">
        {{-- <form action="" method="post"> --}}
            {{-- {{ $react }} --}}
            <input type="button" wire:click="voteReact" wire:model="react" class="btn-react" style="border:none; background: none;">
                <i class="far fa-smile-wink fa-3x"></i>
            
            <input type="button" wire:click="voteReact" wire:model="react" class="btn-react" style="border:none; background: none;">
                <i class="far fa-frown-open fa-3x ml-3"></i>
            
            <input type="button" wire:click="voteReact" wire:model="react" class="btn-react" style="border:none; background: none;">
                <i class="far fa-sad-tear fa-3x ml-3"></i>
            
        {{-- </form> --}}
    </div>
</div>
