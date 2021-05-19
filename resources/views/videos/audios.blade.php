@extends('layouts.app')

@section('content')
<style>
    .scroll_style
        {
            max-height: 300px;
            overflow-y: scroll;
        }
</style>
<script src="{{ asset('js/howler/howler.min.js') }}"></script>

<div class="container">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
        Abrir reproductor de música
      </button>
  
  <!-- Modal -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content bg primary-color-dark">
        <div class="modal-header">
          <h3 class="modal-title text-white" id="exampleModalLabel">
              <strong>{{ $tipo }}</strong>
          </h3>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ route('escucharAudios',$tipo) }}" allowfullscreen></iframe>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
    
</div>

<script>
    $('#basicExampleModal').modal('show')
</script>
@endsection
