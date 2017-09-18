<div class="col-sm-3 offset-sm-1 blog-sidebar">
  @if(count($archives))
          <h4>Archives</h4>
          <div class="sidebar-module sidebar-module-inset">
          @foreach($archives as $archive)
          <ol class="list-unstyled">
            <li>
              <a href="/posts/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
                {{$archive['month']}} {{$archive['year']}}
              </a>
            </li>
          </ol>
          @endforeach
          @endif
          </div>
  </div>