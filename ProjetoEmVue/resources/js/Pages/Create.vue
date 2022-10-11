<template>
    <Layout>

        <Head title="Cadastro" />
        <div class="container">
            <h1 class="text-center">Cadastro do Eletrodoméstico</h1>
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="addEletrodomestico">
                        <div class="form-group mb-3">
                            <label for="title">Nome do Eletrodoméstico</label>
                            <input type="text" class="form-control" id="nome" name="nome" v-model="eletrodomestico.nome"
                                placeholder="Ex: Geladeira Frost Free">
                            <div v-if="errors.nome">
                                <div id="alerta-danger">
                                    {{ errors.nome }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Descrição do Eletrodoméstico</label>
                            <textarea class="form-control" name="descricao" id="descricao"
                                v-model="eletrodomestico.descricao"
                                placeholder="Ex: Este produto é totalmente versátil. Tudo para ser personalizado para comportar o que você preferir."></textarea>
                            <div v-if="errors.descricao">
                                <div id="alerta-danger">
                                    {{ errors.descricao }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Tensão do Eletrodoméstico</label>
                            <select class="form-select" id="tensao" name="tensao"
                                v-model="eletrodomestico.tensao">
                                <option :value="null" disabled>Selecione a tensão...</option>
                                <option value="220V">220V</option>
                                <option value="110V">110V</option>
                                <option value="Bivolt">Bivolt</option>
                            </select>
                            <div v-if="errors.tensao">
                                <div id="alerta-danger">
                                    {{ errors.tensao }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Marca do Eletrodoméstico</label>
                            <input type="text" class="form-control" id="marca" name="marca"
                                v-model="eletrodomestico.marca"
                                placeholder="Ex: Electrolux, Brastemp, Fischer, Samsung ou LG">
                            <div v-if="errors.marca">
                                <div id="alerta-danger">
                                    {{ errors.marca }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 d-flex justify-content-center">
                            <button class="btn btn-dark btn-style" type="submit">Cadastrar
                                <ion-icon name="checkmark-outline"></ion-icon>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from './Menu.vue'
import { Head } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head,
        Layout,
    },
    data: () => {
        return {
            eletrodomestico: {
                nome: null,
                descricao: null,
                tensao: null,
                marca: null
            }
        }
    },
    props: {
        errors: Object
    },
    methods: {
        addEletrodomestico() {
            this.$inertia.post(route('home', this.eletrodomestico))
        }
    }
}
</script>