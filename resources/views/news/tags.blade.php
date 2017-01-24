@if(Auth::check())
  <a href="/threads/mythreads" class="btn btn-warning btn-sm" style="color: white !important;">Threads saya</a>
  <br><br>
@endif

<table class="table table-condensed">
    <th class="warning"><h3>Forum<img id="kategori" src="/background/ide.svg"></h3></th>
    @foreach($tags as $tag)
      <tr class="success">
        <td class="info">
          <a href="/tags/{{$tag->slug}}"><img id="icon" src="/background/tag.svg"> {{$tag->name}} </a>
        </td>
      </tr>
    @endforeach
</table>
