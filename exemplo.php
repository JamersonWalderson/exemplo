Um foreach que lÊ os dados que vem do banco onde é gerado um card com as informações do array,
e nesse card existe um link onde aciona uma função JS onclick chamada getData() que recebe como argumento os valores daquele card do foreach
e passa para a função JS que insere esses dados no Modal... porém aleatoriamente por algum motivo as vezes não funciona e não é exibido nenhum erro.

<a class="custom-card" href="#" data-toggle="modal" data-target="#productDescription" onClick="getData('{{ $product->id }}', '{{ $product->name }}', '{{ $product->price }}', '{{ $product->short_description }}', '{{ $product->long_description }}', '{{ $product->image }}')">
    
<script type="text/javascript">
    function getData(id, name, price, short_description, long_description, image) {
        document.getElementById('modalProductName').innerHTML = name;
        document.getElementById('modalProducImage').src= '/assets/image/product/uploads/' + image;
        document.getElementById('modalProductLongDescription').innerHTML = long_description;
    }
</script>



<!-------- container -------->
<div class="container">
    <div class="row mt-4">
@foreach($products as $product)
        <div class='col-lg-3 col-md-6 mb-4'>
            <a class="custom-card" href="#" data-toggle="modal" data-target="#productDescription" onClick="getData('{{ $product->id }}', '{{ $product->name }}', '{{ $product->price }}', '{{ $product->short_description }}', '{{ $product->long_description }}', '{{ $product->image }}')">
                <div class='card card-mobile'>
                    <div class='card card-img' style='background-image: url({{ asset('assets/image/product/uploads/'.$product->image) }}');'>
                        <!-- imagem -->
                    </div>
                    <div class='card-body'>
                        <h4 class='card-title'>
                            <h5>R$ {{$product->price}} @if($product->disponibility == 0) <span class="badge badge-danger justify-content-end">Indisponível</span> @endif</h5>  
                        </h4>
                        <p class="product-name">{{ $product->name }}</p>
                        <p class='card-text text-secondary product-short-description'>{{ $product->short_description }}</p>
                    </div>
                    <div class='card-footer h-100 m-0 p-0'>
                    <!-- card footer-->    
                    </div>
                </div>
            </a>
        </div>
@endforeach
    </div>
    <!-- Modal -->
    <div class="modal fade" id="productDescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <!-- name product -->
            <h5 class="modal-title" id="modalProductName"></h5>
            <!-- /name product -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <img class="rounded img-fluid" id="modalProducImage" src="" alt="Imagem do produto">
            <p id="modalProductLongDescription"> </p>
        </div>
        <div class="modal-footer">
            <!-- <a class='btn btn-success w-100' target="_blank" href=""><i class="fab fa-whatsapp"></i> Mais informações<a> -->
        </div>
        <div class="container-fluid">
            <a class="btn btn-danger d-flex justify-content-center mb-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Compre agora ou obtenha mais informações
            </a>
            <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="form-group">
                    <input name="inputClientName" type="text" class="form-control" id="formGroupExampleInput" placeholder="* Nome e sobrenome" required>
                </div>
                <div class="form-group">
                    <input name="inputClientEmail" type="text" class="form-control" id="formGroupExampleInput2" placeholder="* Digite seu e-mail" required>
                </div>
                <button onClick="sendMessage()" class="btn border border-success text-success w-100">Mais infomações</button>
            </div>
            </div> 
        </div>     
        </div>
    </div>
    </div>
</div>
<!-------- /container -------->

<!-- Loading modal data -->
<script type="text/javascript">
    function getData(id, name, price, short_description, long_description, image) {
        document.getElementById('modalProductName').innerHTML = name;
        document.getElementById('modalProducImage').src= '/assets/image/product/uploads/' + image;
        document.getElementById('modalProductLongDescription').innerHTML = long_description;
    }
</script>
