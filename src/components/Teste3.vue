<template>
    <!--<div class="modal fade" role="dialog" tabindex="-1" id="cadastro">
    <div class="modal-content">
    <div class="modal-body">-->
    <b-form @submit="onSubmit()" @reset="onReset()" action="" method="">
        <div class="container-fluid">
        <div class="row">
            <b-form-group class="col-6" id="input-group-1 " label-for="nome" label="Nome">
                <b-form-input name="nome" id = "nome" v-model= "lente.nome" type="text" required placeholder="Nome"></b-form-input>    
            </b-form-group>
            <b-form-group class="col-6" id="input-group-2 " label-for="link" label="Link">
                <b-form-input name="link" id = "link" v-model= "lente.link" type="text" required placeholder="Nome"></b-form-input>    
            </b-form-group>           

        </div>
        <div class="row">
            <b-form-group class="col" id="input-group-3" label-for="codigo" label="Codigo">
                <b-form-input name="codigo" id = "codigo" v-model= "lente.codigo" type="text" required placeholder="Codigo"></b-form-input>    
            </b-form-group>
              <b-form-group class="col" id="input-group-4" label-for="codigo" label="Marca">
                <b-form-input name="marca" id = "marca" v-model= "lente.marca" type="text" required placeholder="Marca"></b-form-input>    
            </b-form-group>
            <b-form-group class="col"  id="input-group-8" label-for="categoria" label="Categoria">
                    <b-form-select name="categoria" id = "categoria" v-model= "lente.categoria" required>
                    <option v-for="categoria in categorias" :value="categoria" :key="categoria">{{categoria}}</option>
                    </b-form-select>    
            </b-form-group>
            
        </div>
            <div class="row">
                <b-form-group class="col"  id="input-group-5" label-for="preco" label="Preco">
                    <b-form-input name="preco" id = "preco" v-model= "lente.preco" type="number" required></b-form-input>    
                </b-form-group>
                <b-form-group class="col"  id="input-group-6" label-for="desconto" label="Desconto Porcentagem">
                    <b-form-input name="descontoPorcentagem" id = "descontoPorcentagem" v-model= "lente.descontoPorcentagem" type="number"></b-form-input>    
                </b-form-group>
                <b-form-group class="col"  id="input-group-7" label-for="desconto" label="Desconto Fixo">
                    <b-form-input name="descontoFixo" id = "descontoFixo" v-model= "lente.descontoFixo" type="number"></b-form-input>    
                </b-form-group>
                <div class="row">
                <b-form-group class="col" id="input-group-11" label-for="precoTotal" label="Preço Total">
                    <b-form-input id = "precoTotal" :value="lente.preco-(lente.preco*(lente.descontoPorcentagem/100))-lente.descontoFixo " disabled type="number"   ></b-form-input>    
                </b-form-group>
                <b-form-group class="col" id="input-group-12" label-for="estoque" label="Estoque">
                    <b-form-input name="estoque" id = "estoque" :value="lente.estoque" disabled type="number"   ></b-form-input>    
                </b-form-group>
                </div>
            </div>
            <label for="cores" v-show="lente.cores>0"><strong>Cores</strong></label>
            <div :style="{'border': 'gray solid 2px rounded'}" v-show="lente.cores>0" id="cores" class="row">
            </div>
            <div class="row m-3">
                <div class="col">
                    <div class="btn-group-toggle"  data-toggle="buttons">
                        <label class="btn btn-danger">
                            <input name = "frete" type="checkbox"> Frete Gratis
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-danger">
                            <input name = "destaque"  type="checkbox"> Destaque
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-danger">
                            <input name = "ativo"  type="checkbox"> Ativo
                        </label>
                    </div>
                </div>
                    <div class="col">
                        <button type="button" @click="criaCor()" class="btn btn-primary"><b-icon icon="plus">
                            
                        </b-icon>
                        </button>
                    </div>
            </div>
            <b-form-group id="input-group-13" label-for="lenteinfo" label="Informações do produto">
                <b-form-textarea
                    id="lenteinfo"
                    v-model="lente.info"
                    placeholder="Informações da lente"
                    rows="3"
                    max-rows="99"
                ></b-form-textarea>
                <pre class="mt-3 mb-0">{{ lente.info }}</pre>      

                <input type="submit" name="submit" class="btn btn-primary float-right" onclick="val()" value="Salvar">
            </b-form-group>
            <!--<input type="submit" class="btn btn-danger float-right" value="Cancelar">-->
        </div>
    </b-form>
</template>

<script>
export default {
    data(){
        return{
            lente: {
                nome: '',
                codigo: '',
                preco: '',
                marca: '',
                descontoPorcentagem: '',
                descontoFixo: '',
                categoria: '',
                freteGratis: '',
                ativo: '',
                destaque: '',
                info: '',
                estoque: '',
                cores: 0,
            },
            categorias: ['Pré Venda','Artísticas','Big Size', 'Naturais']
        }
    },
    methods: {
      onReset(evt) {
        evt.preventDefault()
        // Reset our form values
        this.form.email = ''
        this.form.name = ''
        this.form.food = null
        this.form.checked = []
        // Trick to reset/clear native browser form validation state
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      },
      onSubmit(evt) {
        evt.preventDefault()
        alert(JSON.stringify(this.form))
      },
      criaCor() {
        this.lente.cores++
        document.getElementById('cores').insertAdjacentHTML("afterbegin",
            `<div class="form-inline mx-auto col-6">
                <select class="form-control" name="cor"`+this.lente.cores+`>
                    <option value="Azul">Azul</option>
                    <option value="Amarelo">Amarelo</option>
                    <option value="Verde">Verde</option>
                    <option value="Vermelho">Vermelho</option>
                    <option value="Cinza">Cinza</option>
                    <option value="Roxo">Roxo</option>
                    <option value="Preto">Preto</option>
                    <option value="Rosa">Rosa</option>
                    <option value="Laranja">Laranja</option>
                    <option value="Branco">Branco</option>
                    <option value="Castanho">Castanho</option>
                </select>
                <input type="text" name = "tom`+this.lente.cores+`" class="form-control col-4" placeholder="Tom">
                <input type="number" name = "estoque`+this.lente.cores+`" class="form-control col-3" placeholder="Und">
            </div>` )

        }  
    },

}
</script>

<style>

</style>