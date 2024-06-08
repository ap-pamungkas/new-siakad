<!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body">
            <form method="POST" action="{{ $action }}">
                    @csrf
                    {{$slot}}
            </form>
        </div>
      </div>
    </div>
  </div>