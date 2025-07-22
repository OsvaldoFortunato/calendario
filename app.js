import {createApp} from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js';

createApp({
    data() {
        return {
            dias_semanas: [],
            dias_ordenados : []
        }
    },
    async mounted() {
        const resposta = await fetch('../calendario/dados.php');
        const data = await resposta.json();
        this.dias_semanas = data
        this.dias_ordenados = await this.processarDatas()
        console.log(this.dias_ordenados)
    },
    computed: {
        dias_semanas_ingles() {
            return ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
        },
        dia_calendario()
        {

          return this.dias_ordenados
        }
    },

    methods: {
        async processarDatas() {
            let datas = []
            this.dias_semanas_ingles.forEach(dia => {

                let listaDiasSeparados  =[]
                const DIA = this.dias_semanas.filter(dados => dados.dia === dia)
                let novas_lista = []
                for (let i = 0; i <= 4; i++) {
                    if (DIA[i] !== null && DIA[i] !== undefined) {
                       novas_lista.push(DIA[i])
                    }
                }

                datas.push({
                    dia,
                    dias_separados: novas_lista
                })

            })
            return datas
        },
        dataCalendario(diasemana){
            return this.dias_ordenados.filter(dados => dados.dia === diasemana)
        }
    }
}).mount('#app');

