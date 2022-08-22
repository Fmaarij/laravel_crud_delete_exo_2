@extends('frontend.layouts.index')
@section('content')
    <h1 class="text-center">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Moins cher que 4000$
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <tr>
                                <th>Marque</th>
                                <th>Année</th>
                                <th>Prix</th>
                                <th>Reduction</th>
                                <th>Delete</th>
                                <th>Edit</th>

                            </tr>
                            @foreach ($underFourThousand as $item)
                                <tr>

                                    <td>{{ $item->marque }}</td>
                                    <td>{{ $item->annee }}</td>
                                    @if($item->reduction!='')
                                    <td><del>{{ $item->prix }}$</del>,{{($item->prix*$item->reduction)/100-$item->prix}} </td>
                                    @endif
                                    <td>{{ $item->reduction }}%</td>
                                    <form action="/crud/{{$item->id}}/delete" method="post">
                                        @csrf
                                        @method("DELETE")
                                    <td><button type="submit">Delete</button></td>
                                    </form>
                                    <td><a href="{{$item->id}}"><button>Edit</button></a></td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Plus cher que 4000$
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <tr>
                                <th>Marque</th>
                                <th>Année</th>
                                <th>Prix</th>
                                <th>Reduction</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                            @foreach ($aboveFourThousand as $item)
                                <tr>
                                    <td>{{ $item->marque }}</td>
                                    <td>{{ $item->annee }}</td>
                                    @if($item->reduction!='')
                                    <td><del>{{ $item->prix }}$</del>,{{($item->prix*$item->reduction)/100-$item->prix}} </td>
                                    @else{{$item->prix}}
                                    @endif
                                    <td>{{ $item->reduction}}%</td>
                                    <form action="/crud/{{$item->id}}/delete" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <td><button>Delete</button></td>
                                    </form>
                                    <td><button>Edit</button></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </h1>
@endsection
