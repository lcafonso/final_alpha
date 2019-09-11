{{-- conteiner body --}}

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Imagens por autorizar</h3>
            </div>
            <div class="panel-body">

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Publicado em</th>
                        <th>Titulo</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->created }}</td>
                            <td>{{ $post->name }}</td>
                            <td width="10px">

                            </td>
                            <td width="10px">

                            </td>
                            <td width="10px">
                                <a href="{{ route('adminposts.show', $post->id) }}" class="btn btn-sm btn-default">Ver</a>
                            </td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $posts->render() }}
            </div>
        </div>
    </div>



