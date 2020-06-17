  <template>
    <!--<div class="modal fade" role="dialog" tabindex="-1" id="cadastro">
    <div class="modal-content">
    <div class="modal-body">-->
        <div>
        <div class="d-flex">
        <cad-img/>
        <div class="container-fluid">
        <div class="row">
            <b-form-group class="col-6" id="input-group-1 " label-for="nome" label="Nome">
                <b-form-input name="nome" id = "nome" v-model="lente.nome" type="text" placeholder="Produto1"></b-form-input>    
            </b-form-group>
            <b-form-group class="col-6" id="input-group-2 " label-for="link" label="Link">
                <b-form-input name="link" id = "link" v-model="lente.link" type="text" placeholder="Exemplo123"></b-form-input>    
            </b-form-group>           

        </div> 
        <div class="row">
            <b-form-group class="col" id="input-group-3" label-for="codigo" label="Codigo">
                <b-form-input name="codigo" id = "codigo" v-model="lente.codigo" type="text" placeholder="XABY"></b-form-input>    
            </b-form-group>
              <b-form-group class="col" id="input-group-4" label-for="codigo" label="Marca">
                <b-form-input name="marca" id = "marca" v-model="lente.marca" type="text" placeholder=""></b-form-input>    
            </b-form-group>
            <b-form-group class="col"  id="input-group-8" label-for="categoria" label="Categoria">
                    <b-form-select name="categoria" id = "categoria" v-model="lente.categoria">
                        <option v-for="categoria in lente.categorias" :value="lente.categoria" :key="categoria">{{categoria}}</option>
                    </b-form-select>    
            </b-form-group>
            
        </div>
            <div class="row">
                <b-form-group class="col-4"  id="input-group-5" label-for="preco" label="Preco">
                    <b-form-input name="preco" id = "preco" v-model="lente.preco" type="number"></b-form-input>    
                </b-form-group>
                <b-form-group class="col-4"  id="input-group-6" label-for="desconto" label="Desconto Porcentagem">
                    <b-form-input name="descontoPorcentagem" id = "descontoPorcentagem" v-model="lente.descontoPorcentagem" type="number"></b-form-input>    
                </b-form-group>
                <b-form-group class="col-4"  id="input-group-7" label-for="desconto" label="Desconto Fixo">
                    <b-form-input name="descontoFixo" id = "descontoFixo" v-model="lente.descontoFixo" type="number"></b-form-input>    
                </b-form-group>
            </div>
                <div class="row justify-content-center">
                <b-form-group class="col-3" id="input-group-11" label-for="precoTotal" label="Preço Total">
                    <b-form-input id = "precoTotal" :value="lente.preco-(lente.preco*(lente.descontoPorcentagem/100))-lente.descontoFixo " disabled type="number"   ></b-form-input>    
                </b-form-group>
                <b-form-group class="col-3" id="input-group-12" label-for="estoque" label="Estoque">
                    <b-form-input name="estoque" id = "estoque" v-model="lente.estoque" disabled type="number"   ></b-form-input>    
                </b-form-group>
                </div>
            <div class="row m-3">
                    <b-form-checkbox class="col" v-model="lente.freteG"  name="freteG" switch>
                        Frete Gratis
                    </b-form-checkbox>
                    <b-form-checkbox class="col" v-model="lente.ativo" name="ativo" switch>
                        Ativo
                    </b-form-checkbox>
                    <b-form-checkbox class="col" v-model="lente.destaque" name="destaque" switch>
                        Destaque
                    </b-form-checkbox>
                    <b-form-checkbox class="col" name="grau" v-model="lente.grau" switch>
                        Grau
                    </b-form-checkbox>
                    <div class="col">
                        <button type="button" @click="criaCor()" class="btn btn-primary"><b-icon icon="plus"></b-icon></button>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b-form-group class="col" id="input-group-16" label-for="peso" label="Peso">
                                <b-form-input name="peso" id = "peso" :value="lente.peso" type="text"   ></b-form-input>    
                            </b-form-group>
                        </div>
                        <div class="col">
                            <b-form-group class="col" id="input-group-17" label-for="altura" label="Altura">
                                <b-form-input name="altura" id = "altura" :value="lente.altura" type="text"   ></b-form-input>    
                            </b-form-group>
                        </div>
                        <div class="col">
                            <b-form-group class="col" id="input-group-17" label-for="largura" label="Largura">
                                <b-form-input name="largura" id = "largura" :value="lente.largura" type="text"   ></b-form-input>    
                            </b-form-group>
                        </div>
                        <div class="col">
                            <b-form-group class="col" id="input-group-17" label-for="profundidade" label="Profundidade">
                                <b-form-input name="profundidade" id = "profundidade" :value="lente.profundidade" type="text"   ></b-form-input>    
                            </b-form-group>
                        </div>
                    </div>
            </div>
        </div>

            </div>
            <div class="container-fluid">
                <b-form-group class="col" id="input-group-20" label-for="youtube" label="Link do youtube">
                    <b-form-input name="youtube" id = "youtube" :value="lente.youtube"  type="text"   ></b-form-input>    
                </b-form-group>
            <b-form-group id="input-group-13" label-for="lenteinfo" label="Informações do produto">
                <b-form-textarea
                    name= "info"
                    id="lenteinfo"
                    v-model="lente.info"
                    placeholder="Informações da lente"
                    rows="3"
                    max-rows="99"
                ></b-form-textarea>

                <label for="cores" v-show="lente.cores>0"><strong>Cores</strong></label>
            <div :style="{'border': 'gray solid 2px'}" v-show="lente.cores.length >0"  id="cores" class="row">
            <div v-for="(cor,i) in lente.cont" :key="i"  :id="'form['+i+']'" class="container-fluid my-1 form-inline col-10 align-self-center">
                <select class="form-control" v-model="lente.cores[i].cor" :name="'cor['+i+']'">
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
                {{lente.cores[i].cor}}
                <input type="text" :name="'tom['+i+']'" v-model="lente.cores[i].tom" class="form-control col" placeholder="Tom">
                {{lente.cores[i].tom}}
                <input @change="getEstoque" v-model="lente.cores[i].estoque" type="number" :name="'estoque['+i+']'" class="form-control col-3" placeholder="Und">
                {{lente.cores[i].estoque}}
                <button class ="btn btn-danger col-1" @click="removeCor">X</button>
            </div>
        </div>
                <button @click="submit" class="btn btn-primary float-right" value="Salvar"></button>
            </b-form-group>
            </div>
            <!--<input type="submit" class="btn btn-danger float-right" value="Cancelar">-->
    </div>
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
                descontoPorcentagem: 0,
                descontoFixo: 0,
                categoria: '',
                freteG: true,
                ativo: true,
                destaque: '',
                info: '',
                estoque: 0,
                altura: '',
                profundidade: '',
                peso: '',
                largura: '',
                cont: [],
                cores: [],
                grau: '',
                categorias: ['Pre Venda','Artisticas','Big Size', 'Naturais']
            },
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
      submit(e){
          e.preventDefault
          this.$http.post('api/lentes', this.lente).then(console.log('worth'))
      }
      ,
      removeCor(event){
            event.path[1].remove()
      },  
      criaCor() {
            this.lente.cont.push({teste:'teste'})
            this.lente.cores.push({cor: 'Azul', tom: '',estoque: 0})
            console.log(this.lente.cores)
        },
        getEstoque(e){
            this.lente.estoque += parseInt(e.path[0].value)
        },
    },

}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');

body{
  background: linear-gradient(to right, #355c7d, #6c5b7b, #c06c84); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }
label{
    color: aliceblue;
    font-family: 'Lobster', cursive;
    font-size: 18px;
}
</style>