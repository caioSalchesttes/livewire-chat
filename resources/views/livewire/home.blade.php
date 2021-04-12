
<div class="container" wire:poll>
                <div class="chat">

                    <div class="chat-history overflow-scroll" style="height: 500px; flex-direction: column-reverse; display: flex;" >
                        <ul class="m-b-0">

                            @foreach($dados as $chat)

                                @if($chat->id_session == $session)
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time">{{$chat->created_at}}</span>
                                        </div>
                                        <div class="message other-message float-right"><p style="font-weight: bold">{{$chat->nome}}</p>{{$chat->texto}} </div>
                                    </li>
                                @else

                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">{{$chat->created_at}}</span>
                                        </div>
                                        <div class="message my-message"><p style="font-weight: bold">{{$chat->nome}}</p>{{$chat->texto}}</div>
                                    </li>

                                    @endif

                            @endforeach
                        </ul>
                    </div>

                    <div class="chat-message clearfix">

                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">     <button class="btn btn-dark">Desconhecido</button></span>
                            </div>
                            <input type="text" class="form-control" wire:model="texto" placeholder="Digite aqui...">
                            <button wire:click="enviar" class="btn btn-success">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
