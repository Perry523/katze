<template>
  <div :style="{'width':'435px','border':'solid 1px gray'}">
    <b-form-file  id="file" class="mt-3" @change="getImg" plain>
      </b-form-file>
      <img :src="src" :style=" {'height':'  430px','width':'430px','margin-bottom':'10px' }" alt="">
      <div :style=" {'display':'inline-flex',}" v-for="(imagem, i) in produto.imagens" :key="i">
          <div :style=" {'height':'80px','width':'80px','margin': '10px 10px','box-sizing':'border-box'}">
            <button v-if="produto.imagens[i].registered" @click="removeBanco" :style="{'height':'20px','width':'20px','color': 'red','position':'absolute'}">X</button>
            <button v-else @click="removeImg" :style="{'height':'20px','width':'20px','color': 'red','position':'absolute'}">X</button>
            <img :src="produto.imagens[i].src" :id="'id'+i" :name="'nome['+i+']'" height="80px" width="80px" alt="" @click="changeUrl">
          </div>
      </div>

  </div>
</template>

<script>
export default {
    data() {
        return {
            i2: 0,
            src: "https://s3.zerochan.net/Evelynn.240.2843936.jpg",
            produto:{
                cont: 0,
                imagens: [{src : 'https://cdn.awsli.com.br/1000x1000/1059/1059876/produto/49604048/98ef879b1e.jpg',
                registered : false},
                {src: 'https://s3.zerochan.net/Evelynn.240.2475846.jpg', registered: false}, {src:'https://s3.zerochan.net/Evelynn.240.2843936.jpg',registered: false}, {src:'https://cdn.awsli.com.br/1000x1000/1059/1059876/produto/49604048/98ef879b1e.jpg',
                registered : false},
                {src: 'https://s3.zerochan.net/Evelynn.240.2475846.jpg', registered: false}, {src:'https://s3.zerochan.net/Evelynn.240.2843936.jpg',registered: false}],
            },
        }
    },
    created() {
        this.produto.cont = this.produto.imagens.length
    },
    methods:{
        getImg(e){
            if(e.target.files.item(0)){
                const fileToUpload = e.target.files.item(0);
                this.produto.imagens.push({src: e.target.files.item(0), registered: false})
                setTimeout(() => {
                    const img = document.getElementById('id'+this.produto.cont.toString(10))
                    const reader = new FileReader()
                    console.log(reader)
                    reader.onload = event=>{
                        img.src = event.target.result
                        this.produto.imagens[this.produto.imagens.length-1] = {src: img.src, registered: false}
                    }
                    reader.readAsDataURL(fileToUpload);

                    this.produto.cont++
                }, 0);
            }
        },
        changeUrl(e){
            this.src = e.path[0].src
        },
        removeImg(e){
            e.path[1].remove()
        },
        getI(){
            console.log('e')
        }


    },
}

</script>

<style>
.test{
    box-sizing: content-box;
}
</style>