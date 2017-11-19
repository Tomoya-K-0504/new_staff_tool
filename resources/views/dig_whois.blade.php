@extends('common.main')

@section('content')

    <div id="container" class="topPage">
      <h2 class="headTitle"><span class="inner">dig/whois</span></h2>
      <div id="contents">
        <section class="toolListArea">
          <div class="in">
            <ul class="list">
              <li class="item2"><a href="{{url('/tools/domain_search/dig')}}" title=""><span class="toolTitle left-col">dig</span><span class="auther right-col"><span class="name">tomoya koike</span></span></a></li>
              <li class="item2"><a href="{{url('/tools/domain_search/whois')}}" title=""><span class="toolTitle left-col">whois</span><span class="auther right-col"><span class="name">tomoya.koike</span></span></a></li>
            </ul>
          </div>
        </section>
      </div>
    </div>
@endsection